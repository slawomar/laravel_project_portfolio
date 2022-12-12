<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomePageItem;
use App\Models\Skill;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Testimonial;
use App\Models\Client;
use App\Models\Service;

class HomeController extends Controller
{
    public function index() {
        $page_data = HomePageItem::where('id',1)->first();
        $left_skills = Skill::where('side','Lewa')->get();
        $right_skills = Skill::where('side','Prawa')->get();
        $education = Education::orderBy('item_order','asc')->get();
        $experiences = Experience::orderBy('item_order','asc')->get();
        $testimonials = Testimonial::orderBy('id','asc')->get();
        $clients = Client::orderBy('id','asc')->get();
        $services = Service::orderBy('item_order','asc')->get();
        return view('front.home',compact('page_data','left_skills','right_skills','education','experiences','testimonials','clients','services'));
    }
}
