<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    public function aboutus(){
        return view('pages.aboutus');
    }
    public function contactus(){
        return view('pages.contactus');
    }
        public function home(){
            return view('pages.home');
        }
        public function teams(){
            return view('pages.teams');
        }
        public function product()
        {
            $products = array();
            for($i=1;$i<=5;$i++){
                $product = array(
                    "id"=>"$i",
                    "name"=>"Product $i",
                    "price"=>"1200 tk"
                );
                $products[] = (object)$product;
            }
            return view('pages.product')
            ->with('products',$products);
        }
    }
