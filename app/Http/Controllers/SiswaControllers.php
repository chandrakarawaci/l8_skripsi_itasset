<?php

namespace App\Http\Controllers;

use App\Models\SiswaModel;
use Illuminate\Http\Request;

class SiswaControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sisw = SiswaModel::latest()->paginate(5);
        return view ('sisw.index',compact('sisw'))->with('i', (request()->input('page', 1) -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('sisw.create');
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
        $request->validate([
            'NIS' => 'required',
            'NamaSiswa' => 'required',
            'Alamat' => 'required',
        ]);
        SiswaModel::create($request->all());

        return redirect()->route('sisw.index')->with('succes','Data Berhasil di Input');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(SiswaModel $sisw)
    {
        //
        return view('sisw.show',compact('sisw'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(SiswaModel $sisw)
    {
        //
        return view('sisw.edit', compact('sisw'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SiswaModel $sisw)
    {
        //
        $request->validate([
            'NIS' => 'required',
            'NamaSiswa' => 'required',
            'Alamat' => 'required',
        ]);

        $sisw->update($request->all());

        return redirect()->route('sisw.index')->with('succes','Siswa Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SiswaModel $sisw)
    {
        //
        $sisw->delete();

        return redirect()->route('sisw.index')->with('succes','Siswa Berhasil di Hapus');
    }
}
