<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleRequest;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class ArticlesController extends Controller
{


    /**
     * ArticlesController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth', ['only' => 'create']);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {
        $articles = Article::latest('published_at')->published()->get();
        return view('articles.index', compact('articles'));
    }

    /**
     * @param Article $article
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @internal param $id
     */
    public function show(Article $article) {
        return view('articles.show', compact('article'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create() {
        return view('articles.create');
    }

    /**
     *  stores a new Article in the database
     *
     * @param ArticleRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(ArticleRequest $request) {

        $article = new Article($request->all());

        Auth::user()->articles()->save($article);

        return redirect('articles');
    }

    /**
     * @param Article $article
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @internal param $id
     */
    public function edit(Article $article) {
        return view('articles.edit', compact('article'));
    }

    /**
     * @param Article $article
     * @param ArticleRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @internal param $id
     */
    public function update(Article $article, ArticleRequest $request) {
        $article->update($request->all());
        return redirect('articles');
    }
}
