<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function contactus(){
        return view('pages.contactus');
    }
    public function messageSend(Request $request){
        $validate = $request->validate([
            "name"=>"required|max:20|alpha",
            'email'=>'email',
        ],
    );
        return $request;
    }

        public function registration(){
            return view('pages.registration');
        }
        public function studentCreateSubmitted(Request $request){
            $validate = $request->validate([
                "fname"=>"required|alpha",
                "lname"=>"required|alpha",
                "password"=>"required|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/i",
                'dob'=>'required',
                'email'=>'email',
            ],
        );
            return $request;
        }
        public function login(){
            return view('pages.login');
        }
        public function loginSubmitted(Request $request){
            $validate = $request->validate([
                "username"=>"required|alpha",
                'email'=>'email',
            ],
        );
            return $request;
        }
    }
