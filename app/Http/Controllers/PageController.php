<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $properties  = Property::all();
        return view("pages.index")->with("properties",$properties);;
    }


    public function aboutUs()
    {
        return view("pages.about-us");
    }

    public function property()
    {
        return view("pages.property");
    }

    public function singleProperty($id)
    {
        return view("pages.single-property");
    }

    public function contactUs()
    {
        return view("pages.contact-us");
    }
}








