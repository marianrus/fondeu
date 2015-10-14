<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ArticlesAdminController extends BaseController
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.articles.index',[
            'articles' =>  \DB::table('articles')
                                        ->join('category','articles.category_id', '=','category.category_id')
                                        ->get()
        ]);
    }

    public function getForm()
    {
        return view('admin.articles.addForm',[
            'category' => Category::all()
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if (Auth::user())
        {
            Article::create([
                'article_name'         => $request->input('article_name'),
                'article_description'  => $request->input('article_description'),
                'article_on_site'      => $request->input('onSite') ? 1 : 0 ,
                'article_on_facebook'  => $request->input('onFacebook') ? 1 : 0,
                'category_id'          => $request->input('category_id'),
                'created_by'           => Auth::user()['attributes']['id']
            ]);
        }
        return redirect('articles-admin')->with('message', 'Articolul a fost creat cu success !');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.articles.edit',[
            'article' =>  Article::find($id),
            'category' => Category::all()
        ]);
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
        $article = Article::find($id);
        $article->article_name         = $request->input('article_name');
        $article->article_description  = $request->input('article_description');
        $article->category_id          = $request->input('category_id');
        $article->article_on_site      = $request->input('article_on_site');
        $article->article_on_facebook  = $request->input('article_on_facebook');
        $article->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $article = Article::find($id);
       $article->delete();

       die(json_encode('success'));
    }
}
