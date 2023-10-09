<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cast;

class CastController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $casts = Cast::orderBy('id','asc')->paginate(5);
        return view('cast.index',compact('casts'))
                ->with('i',(request()->input('page',1) -1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cast.create');
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
            'nama'=>'required',
            'umur' => 'required',
            'bio'=>'required',
            
        ]);
 
        Cast::create($request->all());
        return redirect()->route('cast.index')
                         ->with('success','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cast = Cast::find($id);
        return view('cast.detail', compact('cast'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cast = Cast::find($id);
        return view('cast.edit', compact('cast'));
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
        $request->validate([
            'nama'=>'required',
            'umur' => 'required',
            'bio'=>'required',
            
        ]);
        $cast = Cast::find($id);
        $cast->nama = $request->get('nama');
        $cast->umur = $request->get('umur');
        $cast->bio = $request->get('bio');
        
        $cast->save();
        return redirect()->route('cast.index')
                         ->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cast = Cast::find($id);
        $cast->delete();
        return redirect()->route('cast.index')
                         ->with('success', 'Data Alumni berhasil dihapus');
    }
}
