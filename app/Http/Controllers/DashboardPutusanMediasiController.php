<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PutusanMediasi;
use Illuminate\Support\Facades\Storage;

class DashboardPutusanMediasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.mediasi.index',[
            'mediasi'=>PutusanMediasi::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.mediasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nomor_putusan'=>'required|max:255',
            'tanggal'=>'required',
            'registrasi_sengketa'=>'required',
            'pemohon'=>'required',
            'termohon'=>'required',
            'file'=>'file|max:10240',
        ]);

        if($request->file('file')){
            $name = $request->file('file')->getClientOriginalName();
            
            $validatedData['file']=Storage::putFileAs('mediasi-files', $request->file('file'), $name);
                                    // $request->file('file')->store('ajudikasi-files');
        }

        PutusanMediasi::create($validatedData);

        return redirect('/dashboard/mediasi')->with('success', 'Putusan berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PutusanMediasi  $putusanMediasi
     * @return \Illuminate\Http\Response
     */
    public function show(PutusanMediasi $putusanMediasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PutusanMediasi  $putusanMediasi
     * @return \Illuminate\Http\Response
     */
    public function edit(PutusanMediasi $mediasi)
    {
        return view('dashboard.mediasi.edit',[
            'putusan'=>$mediasi,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PutusanMediasi  $putusanMediasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PutusanMediasi $mediasi)
    {
        $rules =[
            'nomor_putusan'=>'required|max:255',
            'tanggal'=>'required',
            'registrasi_sengketa'=>'required',
            'pemohon'=>'required',
            'termohon'=>'required',
            'file'=>'file|max:10240',
        ];

        $validatedData = $request->validate($rules);

        if($request->file('file')){
            if($request->oldFile){
                Storage::delete($request->oldFile);
            }
            $name = $request->file('file')->getClientOriginalName();
            
            $validatedData['file']=Storage::putFileAs('mediasi-files', $request->file('file'), $name);
        }

        PutusanMediasi::where('id', $mediasi->id)->update($validatedData);

        return redirect('/dashboard/mediasi')->with('success', 'Putusan berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PutusanMediasi  $putusanMediasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(PutusanMediasi $mediasi)
    {
        {
            if($mediasi->file){
                Storage::delete($mediasi->file);
            }
            PutusanMediasi::destroy($mediasi->id);
    
            return redirect('/dashboard/mediasi')->with('success', 'Putusan berhasil dihapus');
        }
    }
}
