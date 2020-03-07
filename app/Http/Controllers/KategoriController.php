<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;

class KategoriController extends Controller
{

    //buat login

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = Kategori::paginate(5);

        return view('kategori.index')->with(['model' => $model
        
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $request->validate([
                'nama' => 'required|max:100',
                'deskripsi' => 'required|string',
                'coba' => 'required|string',
            ]);

        $model = new Kategori;
        $model->nama = $request->input('nama');
        $model->deskripsi = $request->input('deskripsi');
        $model->coba = $request->input('coba');
        $model->save();

        return redirect()->route('kategori.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Kategori::findOrFail($id);
        return view('kategori.update')->with(['model' => $model]);
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
            $model = Kategori::findOrfail($id);
            $model->nama = $request->input('nama');
            $model->deskripsi = $request->input('deskripsi');
            $model->coba = $request->input('coba');
            $model->save();
    
            return redirect()->route('kategori.index');
        }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Kategori::find($id);
        $model->delete();

        return redirect()->route('kategori.index');
    }
}
