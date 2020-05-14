<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\TambahRute;
use App\node;
use Illuminate\Http\Request;



class TambahRuteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $item = node::all(['nama_node']);
        $t = node::all(['nama_node']);
        $datas = TambahRute::orderBy('id_graph', 'DESC')->paginate(10);
        return view('admin.tambahrute.buatrute', compact('datas', 'item','t'));
    }


    public function tampilpeta() {
        $hasil = wisata::all();
        return view('admin.tambahrute.tampilpeta',['liat'=>$hasil]);
    }
}
