<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\TambahRute;
use App\node;
use App\wisata;
use Illuminate\Http\Request;



class TambahRuteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $graph = node::all();
        $t = node::all();
        $w = wisata::all();
        $q = wisata::all();
        $liat = node::all();
        $datas = TambahRute::orderBy('id_graph', 'DESC')->all();
        return view('admin.tambahrute.buatrute', compact('datas', 'graph','t', 'w', 'q','liat'));
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'node_awal' => ['required', 'string'],
            'node_tujuan' => ['required', 'string'],
            'jalur' => ['required', 'string'],
            'bobot' => ['required', 'string'],
        ]);
    }

    public function create()
    {
        return view('admin.tambahrute.buatrute');
    }

    public function store(Request $request) {
        $post = new TambahRute;
        $post->node_awal = $request->get('node_awal');
        $post->node_tujuan = $request->get('node_tujuan');
        $post->jalur = $request->get('jalur');
        $post->bobot = $request->get('bobot');
        $post->temp = $request->get('temp');
        $post->save();
        return redirect('/admin/tambahrute')->with('flash_message', 'rute added!');

    }
    
    public function edit($id) {
        $coba = TambahRute::orderBy('id_graph', 'DESC')->all();
        $graph = node::all();
        $liat = node::all();
        $t = node::all();
        $datas = TambahRute::findOrFail($id);
        return view('admin.tambahrute.edit', compact('datas', 'coba', 'graph','t','liat'));
    }


public function update(Request $request, $id)
{
    $request->validate([
        'node_awal' => ['required', 'string'],
        'node_tujuan' => ['required', 'string'],
        'jalur' => ['required', 'string'],
        'bobot' => ['required', 'string'],
    ]);

    $form_data = array(
        'node_awal' =>$request->node_awal,
        'node_tujuan' => $request->node_tujuan,
        'jalur' => $request->jalur,
        'bobot' => $request->bobot,
        'temp' => $request->temp,
        
    );
    TambahRute::where('id_graph',$id)->update($form_data);

    return redirect()->to('/admin/tambahrute')->with('flash_message', 'graph updated!');
}

    public function destroy($id)
    {
        TambahRute::destroy($id);
        return redirect('/admin/tambahrute')->with('flash_message', 'node deleted!');
    }


    public function tampilpeta() {
        $hasil = wisata::all();
        return view('admin.tambahrute.tampilpeta',['liat'=>$hasil]);
    }
}
