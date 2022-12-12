<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\PageItem;

class ServiceController extends Controller
{
    public function index() {

        $services = Service::orderBy('item_order','asc')->get();
        $page_data = PageItem::where('id',1)->first();
        return view('front.services',compact('services','page_data'));
    }
}
