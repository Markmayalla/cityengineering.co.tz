<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home() {
        return view("web.home");
    }

    public function about() {
        return view("web.about");
    }

    public function services() {
        return view("web.services");
    }

    public function services_single() {
        return view("web.service");
    }

    public function projects() {
        return view("web.projects");
    }

    public function projects_single() {
        return view("web.project");
    }

    public function contacts() {
        return view("web.contacts");
    }
}
