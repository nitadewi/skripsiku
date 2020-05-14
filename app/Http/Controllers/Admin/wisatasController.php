<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\wisata;
use Illuminate\Http\Request;

class wisatasController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $wisatas = wisata::where('nama', 'LIKE', "%$keyword%")
                ->orWhere('foto', 'LIKE', "%$keyword%")
                ->orWhere('alamat', 'LIKE', "%$keyword%")
                ->orWhere('keterangan', 'LIKE', "%$keyword%")
                ->orWhere('ltd', 'LIKE', "%$keyword%")
                ->orWhere('lngtd', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $wisatas = wisata::latest()->paginate($perPage);
        }

        return view('admin.wisatas.index', compact('wisatas'));
    }


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nama' => ['required', 'string'],
            'alamat' => ['required', 'string'],
            'foto' => ['required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'],
            'keterangan' => ['required', 'string'],
            'ltd' => ['required', 'string'],
            'lngtd' => ['required', 'string'],
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {

        return view('admin.wisatas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {

        $request->validate([
            'foto'         =>  'required|image|max:2048'
        ]);

        $post = new wisata;
        $post->nama = $request->get('nama');
        $image = $request->file('foto');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $post->foto = $new_name;
        $post->alamat = $request->get('alamat');
        $post->keterangan = $request->get('keterangan');
        $post->ltd = $request->get('ltd');
        $post->lngtd = $request->get('lngtd');
        $post->save();

        return redirect('admin/wisatas')->with('flash_message', 'wisata added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $wisata = wisata::findOrFail($id);


        return view('admin.wisatas.show', compact('wisata'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id) {
            return view('admin.wisatas.edit', ['wisata' => wisata::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {

        $image_name = $request->hidden_image;
        $image = $request->file('foto');
        if($image != '')
        {
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        else
        {
            $request->validate([
                'nama' => ['required', 'string'],
                'alamat' => ['required', 'string'],
                'keterangan' => ['required', 'string'],
                'ltd' => ['required', 'string'],
                'lngtd' => ['required', 'string'],
            ]);
        }
        
        
        $form_data = array(
            'nama'       =>   $request->nama,
            'foto'       =>   $image_name,
            'alamat'     =>   $request->alamat,
            'keterangan' => $request->keterangan,
            'ltd' => $request->ltd,
            'lngtd' => $request->lngtd,
            
        );
        wisata::where('id_wisatas',$id)->update($form_data);

        return redirect()->to('/admin')->with('flash_message', 'wisata updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        wisata::destroy($id);

        return redirect('admin/wisatas')->with('flash_message', 'wisata deleted!');
    }
}
