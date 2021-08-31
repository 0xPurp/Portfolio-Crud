<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class BackOfficeController extends Controller
{
    public function index () {
        $aboutData = About::all();
        $contactData = Contact::all();
        $factData = Fact::all();
        $portfolioData = Portfolio::all();
        $serviceData = Service::all();
        $skillData = Skill::all();
    } return view('index', compact($aboutData, $contactData, $factData, $portfolioData, $serviceData, $skilData));
}
