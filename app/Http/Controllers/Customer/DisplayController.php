<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Member;
use App\Repositories\Manager\MemberRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;


use App\Repositories\Manager\SponsorRepository;
use App\Models\Sponsor;

use App\Repositories\Manager\SchoolRepository;
use App\Models\School;
use Carbon\Carbon;
use Session;
use Hash;
use DB;

class DisplayController extends Controller
{
    protected $school;
    protected $sponsor;
    protected $member;

    public function __construct(Sponsor $sponsor, School $school, Member $member){
        $this->sponsor             = new SponsorRepository($sponsor);
        $this->school             = new SchoolRepository($school);
        $this->member = new MemberRepository($member);
    }
    public function index(){
        $page = "index";

        $sponsor = $this->sponsor->get_limit();
        $highlightedBlogs = Blog::query()
            ->where('highlight', true)
            ->where('publish_date', '<=', Carbon::today())
            ->orderByDesc('publish_date')
            ->orderByDesc('created_at')
            ->get();

        return view('customer.index', compact('page', 'sponsor', 'highlightedBlogs'));
    }
    public function about(){
        $members = $this->member->get_all();
        $school = $this->school->get_all();
        $page = "about";
        return view('customer.about', compact("page", "school", "members"));
    }
    public function event(){
        $page = "event";
        return view('customer.event', compact("page"));
    }
    public function sponsor(){
        $sponsor = $this->sponsor->get_all();
        $page = "sponsor";
        return view('customer.sponsors', compact("page", "sponsor"));
    }
    public function blog(){
        $today = Carbon::today();
        $blogs = Blog::where('publish_date', '<=', $today)
            ->orderBy('publish_date', 'desc')
            ->orderBy('created_at', 'desc')
            ->paginate(5);
        $page = "blog";
        return view('customer.blog', compact("page", 'blogs'));
    }
    public function show(Blog $blog)
    {
        $page = "blog-detail";
        return view('customer.blog-detail', compact('page', 'blog'));
    }
    public function contact(){
        $page = "contact";
        return view('customer.contact', compact("page"));
    }
    public function register(){
        $page = "register";
        return view('customer.register', compact("page"));
    }
    public function newsletter(){
        $page = "newsletter";
        return view('customer.newsletter', compact("page"));
    }
    public function eventlist(){
        $page = "event";
        return view('customer.event-list', compact("page"));
    }

}
