<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Galeri;
use App\Models\Produk;

class HomeController extends Controller
{
    public function index(){
        $order  = Order::get();
        $galeri = Galeri::get();
        $produk = Produk::get();

    return view('dashb.index', compact('order', 'galeri','produk'));
    }
    public function gallery(){
        $galeri = Galeri::get();
        return view('dashb.gallery',compact('galeri'));
    }
    public function form(){
        return view('dashb.form');
    }
    public function welcome(){
        return view('welcome');
    }
    public function about(){
        return view('dashb.about');
    }
    public function review(){
        return view('dashb.review');
    }
    public function product(){
        $produk = Produk::get();
        return view('dashb.product',compact('produk'));
    }
    public function pesan(){
        return view('dashb.order');
    }

    public function sukses(){
        $order = Order::get();

        return view('dashb.sukses', compact('order'));
    }
}
