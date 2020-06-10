<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\node;
use App\wisata;
use App\Http\Controllers\Controller;


class NodeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $node = node::orderBy('id_node', 'DESC')->paginate(10);
        $liat = node::all();
        $graph = wisata::all();
        return view('admin.tambahnode.node', compact('node', 'liat', 'graph'));
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nama_node' => ['required', 'string'],
            'ltd' => ['required', 'string'],
            'lngtd' => ['required', 'string'],
            'jalur' => ['required','string'],
        ]);
    }

    public function create()
    {
        return view('admin.tambahnode.node');
    }

    public function store(Request $request) {
        $input = $request->all();
        node::create($input);
        return redirect('admin/tambahnode')->with('flash_message', 'node added!');

    }
    
    public function edit($id) {

        $liat = node::all();
        $coba = node::orderBy('id_node', 'DESC')->paginate(10);
        $datas = node::findOrFail($id);
        $graph = wisata::all();
        return view('admin.tambahnode.edit', compact('datas', 'coba', 'liat','graph'));
    }


public function update(Request $request, $id)
{
    $request->validate([
        'nama_node' => ['required', 'string'],
        'ltd' => ['required', 'string'],
        'lngtd' => ['required', 'string'],
        'jalur' => ['required','string'],
    ]);

    $form_data = array(
        'nama_node' =>$request->nama_node,
        'ltd' => $request->ltd,
        'lngtd' => $request->lngtd,
        'jalur' => $request->jalur,
        
    );
    node::where('id_node',$id)->update($form_data);

    return redirect()->to('/admin/tambahnode')->with('flash_message', 'node updated!');
}

    public function destroy($id)
    {
        node::destroy($id);
        return redirect('admin/tambahnode')->with('flash_message', 'node deleted!');
    }
}
