<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ArticleController;

class ArticleController extends Controller
{

    public function __construct(){
        $this->middleware('auth')->except('index','show');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate([
            'title'=> 'required|unique:articles|min:5',
            'subtitle'=> 'required|unique:articles|min:5',
            'body'=> 'required|min:10',
            'image'=> 'image|required',
            'category'=> 'required',

       ]);

       Article::create([
            'title'=> $request->title,
            'subtitle'=> $request->subtitle,
            'body'=> $request->body,
            'image'=> $request->file('image')->store('public/image'),
            'category_id'=> $request->category,
            'user_id'=> Auth::user()->id,
       ]);
       return redirect(route('homepage'))->with('message', 'Articolo inserito correttamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
}
