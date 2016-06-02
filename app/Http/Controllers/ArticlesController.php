<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateArticleRequest;


class ArticlesController extends Controller
{
	public function index()
	{
		// render in descending order
		$articles = Article::latest('published_at')->get();
		return view('articles.index',compact('articles'));
	}

	public function show( $id )
	{
		$articles = Article::findorfail($id);

		return view('articles.show',compact('articles'));
	}

	public function create()
	{
		return view('articles.create');
	}

	/**
	 * Save a new article
	 * @param \App\Http\Requests\CreateArticleRequest $request
	 *
	 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 */
	public function store(CreateArticleRequest $request)
	{
		Article::create($request->all());
		return redirect('articles');
	}

	public function edit( $id ) {
		$article = Article::findOrFail($id);

		return view('articles.edit', compact('article'));
	}

	public function update( $id,  CreateArticleRequest $request )
	{
		$article = Article::findOrFail($id);
		$article ->update($request->all());

		return redirect('articles');

	}
}
