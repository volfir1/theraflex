<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view("welcome");
    }

    public function product(){
        return view("producted");
    }
  
    public function adduser(){
        return view("accounts.add_user");
    }
    public function signup(){
        return view("accounts.signup");
    }

    public function summary(){
        return view("summaries");
    }

    public function addproduct(){
        return view("addproduct");
    }
    public function addservices(){
        return view("addservices");
    }
    public function addcombos(){
        return view("addcombos");
    }
    public function addemployee(){
        return view("addemployee");
    }

    public function employeelist(){
        return view("employeelist");
    }

    public function sidebar(){
        return view("layout.adminSidebar");
    }

    public function reviews(){
        return view("reviews");
    }
    public function skillcard(){
        return view("skillcard");
    }

    public function appointments(){
        return view("appointments");
    }

    public function profile(){
        return view("profile");
    
}

public function workspace(){
    return view("theworkspace");

}

public function reschedule(){
    return view("reschedule");

}



}
