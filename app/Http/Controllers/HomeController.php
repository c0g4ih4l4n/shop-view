<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $selected_navbar = 0;

    public function index()
    {
        $list_product = array();



        $data = array('list_product' => $list_product);

        return view('four-col');
    }

    public function listProduct()
    {
        $selected_navbar = 2;
        $data = array ('selected_navbar' => $selected_navbar);
        return view('products')->with($data);
    }
}
