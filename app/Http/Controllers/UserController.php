<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produklist;

class UserController extends Controller
{
    public function indexPage(){
        $data_product = produklist::all();
        return view('index',compact('data_product'));
    }

    public function beliPage($id){
        $data_product = produklist::where('id_produk',$id)->get();
        return view('beli',compact('data_product'));
    }

    public function aboutPage(){
        return view('about');
    }
    
    public function blog_listPage(){
        return view('blog_list');
    }

    public function contactPage(){
        return view('contact');
    }
    
    public function ourstoryPage(){
        return view('ourstory');
    }
    
    public function productPage(){
        $data_product = produklist::all();
        return view('product',compact('data_product'));
    }

}
