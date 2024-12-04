<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

use App\Repositories\Manager\SchoolRepository;
use App\Models\School; 
use Carbon\Carbon;
use Session;
use Hash;
use DB;

class SchoolController extends Controller
{
    protected $school;

    public function __construct(School $school){
        $this->school             = new SchoolRepository($school); 
    }
    public function index(){
        return view("admin.manager.school");
    }

    public function get(){
        $data = $this->school->get_all();
        return $this->school->send_response(201, $data, null);
    }
    public function get_one($id){
        $data = $this->school->get_one($id);
        return $this->school->send_response(200, $data, null);
    }
 
    public function store(Request $request){ 

        $data_image = $this->school->imageInventor('images', $request->data_image, 500);
        $data = [ 
            "image"      => $data_image,  
            "name"      => $request->data_name, 
            "email"      => $request->data_email, 
            "website"      => $request->data_website, 
            "address"      => $request->data_address,  
        ];
        $data_create = $this->school->create($data); 
        return $this->school->send_response("Create successful", $data_create, 201);
    }
    public function update(Request $request){  
        $data = [ 
            "name"      => $request->data_name, 
            "email"      => $request->data_email, 
            "website"      => $request->data_website, 
            "address"      => $request->data_address,  
        ];

        if ($request->data_image != "null") {
            $data["image"] = $this->school->imageInventor('images', $request->data_image, 500);
        }
        $data_update = $this->school->update($data, $request->data_id);
        return $this->school->send_response("Update successful", $data_update, 200);
    }

    public function delete($id){
        $this->school->delete($id); 
        return $this->school->send_response(200, "Delete successful", null);
    }
}
