<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

use App\Repositories\Manager\MemberRepository;
use App\Models\Member;
use Carbon\Carbon;
use Session;
use Hash;
use DB;

class MemberController extends Controller
{
    protected $member;

    public function __construct(Member $member){
        $this->member             = new MemberRepository($member);
    }
    public function index(){
        return view("admin.manager.member");
    }

    public function get(){
        $data = $this->member->get_all();
        return $this->member->send_response(201, $data, null);
    }
    public function get_one($id){
        $data = $this->member->get_one($id);
        return $this->member->send_response(200, $data, null);
    }

    public function store(Request $request){
        $image = $request->file('data_image');

        if (!$request->hasFile('data_image')) {
            return response()->json(['error' => 'No file uploaded'], 400);
        }

        if (!$image->isValid()) {
            return response()->json(['error' => 'Uploaded file is not valid'], 400);
        }

        $data_image = $this->member->imageInventor('images', $image, 500);
        $data = [
            "name"      => $request->data_name,
            "image"      => $data_image,
            "yob" => $request->data_yob,
            "major" => $request->data_major,
            "school" => $request->data_school,
            "achievement" => $request->data_achievement,
            "linkined"      => $request->data_linkedin,
            "position"      => $request->data_position,
            "other_position"      => $request->data_other_position,
            "year"      => $request->data_year,
            "sort" => $request->data_sort
        ];
        $data_create = $this->member->create($data);
        return $this->member->send_response("Create successful", $data_create, 201);
    }
    public function update(Request $request){
        $data = [
            "name"      => $request->data_name,
            "yob" => $request->data_yob,
            "major" => $request->data_major,
            "school" => $request->data_school,
            "achievement" => $request->data_achievement,
            "linkined"      => $request->data_linkedin,
            "position"      => $request->data_position,
            "other_position"      => $request->data_other_position,
            "year"      => $request->data_year,
            "sort" => $request->data_sort
        ];

        $member = $this->member->find($request->data_id);
        $oldImage = $member->image;

        if ($request->data_image != "null" && $request->hasFile('data_image')) {
            if ($oldImage && file_exists(public_path($oldImage))) {
                unlink(public_path($oldImage));
            }
            $data["image"] = $this->member->imageInventor('images', $request->data_image, 500);
        }

        $data_update = $this->member->update($data, $request->data_id);
        return $this->member->send_response("Update successful", $data_update, 200);
    }

    public function delete($id){
        $member = $this->member->find($id);
        $imagePath = $member->image;

        if ($imagePath && file_exists(public_path($imagePath))) {
            unlink(public_path($imagePath));
        }

        $this->member->delete($id);
        return $this->member->send_response(200, "Delete successful", null);
    }
}
