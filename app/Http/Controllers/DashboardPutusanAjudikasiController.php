<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PutusanAjudikasi;
use Illuminate\Support\Facades\Storage;

class DashboardPutusanAjudikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.ajudikasi.index',[
            'ajudikasi'=>PutusanAjudikasi::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.ajudikasi.create');
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
            
            $validatedData['file']=Storage::putFileAs('ajudikasi-files', $request->file('file'), $name);
                                    // $request->file('file')->store('ajudikasi-files');
        }

        PutusanAjudikasi::create($validatedData);

        return redirect('/dashboard/ajudikasi')->with('success', 'Putusan berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PutusanAjudikasi  $putusanAjudikasi
     * @return \Illuminate\Http\Response
     */
    public function show(PutusanAjudikasi $ajudikasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PutusanAjudikasi  $putusanAjudikasi
     * @return \Illuminate\Http\Response
     */
    public function edit(PutusanAjudikasi $ajudikasi)
    {
        return view('dashboard.ajudikasi.edit',[
            'putusan'=>$ajudikasi,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PutusanAjudikasi  $putusanAjudikasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PutusanAjudikasi $ajudikasi)
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
            
            $validatedData['file']=Storage::putFileAs('ajudikasi-files', $request->file('file'), $name);
        }

        PutusanAjudikasi::where('id', $ajudikasi->id)->update($validatedData);

        return redirect('/dashboard/ajudikasi')->with('success', 'Putusan berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PutusanAjudikasi  $putusanAjudikasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(PutusanAjudikasi $ajudikasi)
    {
        {
            if($ajudikasi->file){
                Storage::delete($ajudikasi->file);
            }
            PutusanAjudikasi::destroy($ajudikasi->id);
    
            return redirect('/dashboard/ajudikasi')->with('success', 'Putusan berhasil dihapus');
        }
    }
}
