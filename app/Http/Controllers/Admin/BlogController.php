<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Repositories\Manager\BlogRepository;
use App\Models\Blog;
use Carbon\Carbon;
use Session;
use Hash;
use DB;

class BlogController extends Controller
{
    protected $blog;

    public function __construct(Blog $blog)
    {
        $this->blog = new BlogRepository($blog);
    }

    public function index()
    {
        return view("admin.manager.blogs");
    }

    public function get()
    {
        $data = $this->blog->getAll();
        return $this->blog->send_response(201, $data, null);
    }

    public function get_one($id)
    {
        $data = $this->blog->find($id);
        return $this->blog->send_response(200, $data, null);
    }

    public function store(Request $request)
    {
        $image = $request->file('data_image');

        if ($request->hasFile('data_image') && !$image->isValid()) {
            return response()->json(['error' => 'Uploaded file is not valid'], 400);
        }

        $data = [
            "title" => $request->data_title,
            "description" => $request->data_description,
            "content" => $request->data_content,
            "publish_date" => Carbon::createFromFormat('Y-m-d', $request->data_publish_date)->toDateString(),
        ];

        if ($request->hasFile('data_image')) {
            $data["image"] = $this->blog->imageInventor('blog_images', $image, 500);
        }

        $data_create = $this->blog->create($data);
        return $this->blog->send_response("Create successful", $data_create, 201);
    }

    public function update(Request $request)
    {
        $data = [
            "title" => $request->data_title,
            "description" => $request->data_description,
            "content" => $request->data_content,
            "publish_date" => $request->data_publish_date,
        ];

        $blog = $this->blog->find($request->data_id);
        $oldImage = $blog->image;

        if ($request->data_image != "null" && $request->hasFile('data_image')) {
            if ($oldImage && file_exists(public_path($oldImage))) {
                unlink(public_path($oldImage));
            }
            $data["image"] = $this->blog->imageInventor('blog_images', $request->file('data_image'), 500);
        }

        $data_update = $this->blog->update($data, $request->data_id);
        return $this->blog->send_response("Update successful", $data_update, 200);
    }

    public function delete($id)
    {
        $blog = $this->blog->find($id);
        $imagePath = $blog->image;

        if ($imagePath && file_exists(public_path($imagePath))) {
            unlink(public_path($imagePath));
        }

        $this->blog->delete($id);
        return $this->blog->send_response(200, "Delete successful", null);
    }
}
