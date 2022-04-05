<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BeritaController extends Controller
{
    public function index()
    { 
        $title ='';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' Kategori : ' . $category->name;
        }
        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $title = ' By : ' . $author->name;
        }

        return view('berita', [
            "title" => "Berita KISB" . $title,
            "active" => "berita",
            "berita" => Berita::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString() //eager loading solving problem for n+1 problem
        ]);
    }
    public function show(Berita $berita)
    {
        return view('beritafull',[
            'title' =>  $berita->title,
            "active" => "berita",
            "berita" => $berita,
            "another" =>Berita::all()->random(3)
        ]);
    }
}
