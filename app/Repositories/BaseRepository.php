<?php

namespace App\Repositories;

use Carbon\Carbon;
use App\Traits\ApiRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Image;
use Session;
use Hash;
use DB;

abstract class BaseRepository implements RepositoryInterface
{
    // model property on class instances
    protected $model;

    // Constructor to bind model to repo
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    // Get all instances of model
    public function getAll()
    {
        return $this->model->all()->sortByDesc("id");
    }

    // create a new record in the database
    public function create(array $data)
    {
        try {
            DB::beginTransaction();
            $record   = $this->model->create($data);
            DB::commit();
            return $record;
        } catch (\Exception $exception) {
            DB::rollBack();
            return $exception;
        }
    }

    // update record in the database
    public function update(array $data, $id = null)
    {
        try {
            DB::beginTransaction();
            $record     = $this->find($id)->update($data);
            DB::commit();
            return $record;
        } catch (\Exception $exception) {
            Log::log($exception->getMessage(), LOG_ERR);
            DB::rollBack();
            return false;
        }
        return $record->update($data);
    }

    // remove record from the database
    public function delete($id)
    {
        return $this->model->destroy($id);
    }

    // show the record with the given id
    public function find($id)
    {
        return $this->model->findOrFail($id);
    }

    // show the record with the given id
    public function findColumn($column, $id)
    {
        return $this->model->where($column, $id)->get();
    }

    // Get the associated model
    public function getModel()
    {
        return $this->model;
    }

    // Set the associated model
    public function setModel($model)
    {
        $this->model = $model;
        return $this;
    }

    // Eager load database relationships
    public function with($relations)
    {
        return $this->model->with($relations);
    }

    public function updateOrCreate(array $data, $id)
    {
        return $this->model->updateOrCreate(['id' => $id], $data);
    }

    // # tạo random secret key
    public function generateSecretKey(){
        return mt_rand(1000000, 9999999);
    }

    public function send_response($message, $data, $status){
        if (isset($data->errorInfo)) {
            $res = [
                'status'    => 404,
                'data'      => $data,
                'message'   => $data->errorInfo[2],
            ];

            return response()->json($res);
        }

        $res = [
            'status'    => $status,
            'data'      => $data,
            'message'   => $message,
        ];
        return response()->json($res);
    }

    public function imageInventor($folder, $image, $size){
        try {
            $originalName = $image->getClientOriginalName();
            $tempPath = $image->path();
            $input['imagename'] = time() . static::to_reset($originalName);

            \Log::info('Processing image', [
                'original' => $originalName,
                'temp_path' => $tempPath,
                'target' => $input['imagename'],
                'file_exists' => file_exists($tempPath) ? 'Yes' : 'No'
            ]);
            $filePath = public_path($folder);
            if (!file_exists($filePath)) {
                mkdir($filePath, 0755, true);
            }

            $img = Image::make($tempPath);
            $img->resize($size, null, function ($const) {
                $const->aspectRatio();
            })->save($filePath.'/'.$input['imagename']);

            return $folder.'/'.$input['imagename'];
        } catch (\Exception $e) {
            \Log::error('Image processing failed: ' . $e->getMessage(), [
                'original' => $image->getClientOriginalName(),
                'temp_path' => $image->path(),
                'target' => $input['imagename']
            ]);
            throw $e; // Or return an error response
        }
    }

    public function to_reset($string){
        $str = trim(mb_strtolower($string));
        $str =  preg_replace('/\s+/', '', $str);
        return $str;
    }

    public function to_slug($str){
        $str = trim(mb_strtolower($str));
        $str = preg_replace('/(–)/', ' ', $str);
        $str = preg_replace('/(-)/', ' ', $str);
        $str = preg_replace('/(")/', '', $str);
        $str = preg_replace('/(”)/', '', $str);
        $str = preg_replace('/(“)/', '', $str);
        $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
        $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
        $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
        $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
        $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
        $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
        $str = preg_replace('/(đ)/', 'd', $str);
        $str = preg_replace('/(\[|\])/', '', $str);
        $str = preg_replace('/([\s]+)/', '-', $str);
        return $str;
    }
}
