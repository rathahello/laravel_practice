<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function action(){
        $action = "action";
        return view('pages.action',compact('action'));
    }
    public function about(){
        $about = "about";
        return view("pages.about",compact('about'));
    }
    public function join(){
        $join = "join Us";
        return view("pages.join")->with('join_us',$join);
    }
    public function news(){
        $news = "News";
        return view("pages.news",['news_us' => $news]);
    }
    public function contact(){
        $contact = "Contact Us";
        return view("pages.contact",['contact_us' => $contact]);
    }
    
    public function listCustomer(){
        $page = "This is customer list page";
        $customers = array(

        '0'=>array('id' => 1,'name' => 'Chandaraty','email' => 'chandaraty@example.org'),
        
        '1'=>array('id' => 2,'name' => 'Maly','email' => 'maly@example.org'),
        
        '2'=>array('id' => 3,'name' => 'Samphas','email' =>'samphas@example.org'),
        
        '3'=>array('id' => 4,'name' => 'Donat','email' => 'donat@example.org')
        
        );

            return view('customer',compact('customers','page'));
    }
}
