<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Contact;
use App\Models\Fact;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Skill;

class BackOfficeController extends Controller
{
    public function index () {
        // $aboutData = About::all();
        // $contactData = Contact::all();
        // $factData = Fact::all();
        // $portfolioData = Portfolio::all();
        // $serviceData = Service::all();
        // $skillData = Skill::all();
        return view('backoffice');  
    } 
}
