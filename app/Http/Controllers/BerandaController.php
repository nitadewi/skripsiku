<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Response;


use App\wisata;
use App\node;
use App\TambahRute;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $daftar = wisata::orderBy('id_wisatas', 'DESC')->paginate(3);
        return view('depan.show', compact('daftar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tampilkan = wisata::find($id);
        return view('depan.tampil')->with('tampilkan', $tampilkan);
    }

    public function kontak(){
        return view('depan.kontak');
    }

    public function listwisata(){
        $datas = wisata::orderBy('id_wisatas', 'DESC')->paginate(12);
        return view('depan.daftarwisata')->with('datas', $datas);;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
 
    public function graph() {
        $jalur = Tambahrute::select('jalur')->get();
        $jalurArray['graph'] = [];
        foreach($jalur as $j){
            $jj = json_decode($j->jalur, true);
            
            $jjjj[] = $jj;
        }
        $jalurArray['graph'] = $jjjj;

        $node = node::get();
        $jalurArray['node'] = [];
        foreach($node as $n){
            $nn = json_decode($n->jalur, true);
            
            $a = [];
            foreach($nn['coord'] as $nn){
                $a[] = $nn;
            }

            $aaaa = [
                $n->nama_node => [
                    "coord" => $a
                ]
            ];

            $jalurArray['node'] = array_merge($jalurArray['node'], $aaaa);
        }

        return Response::json($jalurArray);

    }

    public function dataAjax(){
        
        $data = wisata::select('nama')->get();
        return response()->json($data);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
