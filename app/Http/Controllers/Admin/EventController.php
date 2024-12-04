<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

use App\Repositories\Manager\EventRepository;
use App\Models\Event; 
use Carbon\Carbon;
use Session;
use Hash;
use DB;

class EventController extends Controller
{
    protected $event;

    public function __construct(Event $event){
        $this->event             = new EventRepository($event); 
    }
    public function index(){
        return view("admin.manager.event");
    }

    public function get(){
        $data = $this->event->get_all();
        return $this->event->send_response(201, $data, null);
    }
    public function get_one($id){
        $data = $this->event->get_one($id);
        return $this->event->send_response(200, $data, null);
    }
 
    public function store(Request $request){ 

        $data_image = $this->event->imageInventor('images', $request->data_image, 500);
        $data = [ 
            "description"      => $request->data_description, 
            "image"      => $data_image,  
            "link"      => $request->data_link, 
            "type"      => $request->data_type,   
        ];
        $data_create = $this->event->create($data); 
        return $this->event->send_response("Create successful", $data_create, 201);
    }
    public function update(Request $request){  
        $data = [ 
            "description"      => $request->data_description,  
            "link"      => $request->data_link, 
            "type"      => $request->data_type,   
        ];

        if ($request->data_image != "null") {
            $data["image"] = $this->event->imageInventor('images', $request->data_image, 500);
        }
        $data_update = $this->event->update($data, $request->data_id);
        return $this->event->send_response("Update successful", $data_update, 200);
    }

    public function delete($id){
        $this->event->delete($id); 
        return $this->event->send_response(200, "Delete successful", null);
    }
}
