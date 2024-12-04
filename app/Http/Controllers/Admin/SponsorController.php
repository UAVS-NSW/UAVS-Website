<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

use App\Repositories\Manager\SponsorRepository;
use App\Models\Sponsor; 
use Carbon\Carbon;
use Session;
use Hash;
use DB;

class SponsorController extends Controller
{
    protected $sponsor;

    public function __construct(Sponsor $sponsor){
        $this->sponsor             = new SponsorRepository($sponsor); 
    }
    public function index(){
        return view("admin.manager.sponsor");
    }

    public function get(){
        $data = $this->sponsor->get_all();
        return $this->sponsor->send_response(201, $data, null);
    }
    public function get_one($id){
        $data = $this->sponsor->get_one($id);
        return $this->sponsor->send_response(200, $data, null);
    }
 
    public function store(Request $request){ 

        $data_image = $this->sponsor->imageInventor('images', $request->data_image, 500);
        $data = [ 
            "description"      => $request->data_description, 
            "image"      => $data_image,  
            "infor"      => $request->data_infor, 
            "carrers"      => $request->data_carrers,  
        ];
        $data_create = $this->sponsor->create($data); 
        return $this->sponsor->send_response("Create successful", $data_create, 201);
    }
    public function update(Request $request){  
        $data = [ 
            "description"      => $request->data_description, 
            "infor"      => $request->data_infor, 
            "carrers"      => $request->data_carrers,  
        ];

        if ($request->data_image != "null") {
            $data["image"] = $this->sponsor->imageInventor('images', $request->data_image, 500);
        }
        $data_update = $this->sponsor->update($data, $request->data_id);
        return $this->sponsor->send_response("Update successful", $data_update, 200);
    }

    public function delete($id){
        $this->sponsor->delete($id); 
        return $this->sponsor->send_response(200, "Delete successful", null);
    }
}
