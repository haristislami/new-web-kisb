<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardberitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.berita.index',[
            'beritas'=>Berita::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.berita.create',[
            'categories'=>Category::all()
        ]);
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
            'title'=>'required|max:255',
            'slug'=>'required|unique:beritas',
            'category_id'=>'required',
            'image'=>'image|file|max:1024',
            'body'=>'required'
        ]);

        if($request->file('image')){
            $validatedData['image']=$request->file('image')->store('berita-images');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body),200);

        Berita::create($validatedData);

        return redirect('/dashboard/berita')->with('success', 'Post berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $beritum)
    {
        return view('dashboard.berita.show',[
            'berita' => $beritum
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit(Berita $beritum)
    {
        return view('dashboard.berita.edit',[
            'berita'=>$beritum,
            'categories'=>Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Berita $beritum)
    {
        $rules =[
            'title'=>'required|max:255',
            'category_id'=>'required',
            'image'=>'image|file|max:1024',
            'body'=>'required'
        ];
        
        if($request->slug != $beritum->slug){
            $rules['slug'] = 'required|unique:beritas';
        }

        $validatedData = $request->validate($rules);

        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }

            $validatedData['image']=$request->file('image')->store('berita-images');
        }
        
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body),200);

        Berita::where('id', $beritum->id)->update($validatedData);

        return redirect('/dashboard/berita')->with('success', 'Post berhasil diedit');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Berita $beritum)
    {
        if($beritum->image){
            Storage::delete($beritum->image);
        }
        Berita::destroy($beritum->id);

        return redirect('/dashboard/berita')->with('success', 'Post berhasil dihapus');
    }
    public function checkSlug(Request $request)
    {
       $slug =  SlugService::createSlug(Berita::class, 'slug', $request->title);
       return response()->json(['slug' => $slug]);
    }
}
