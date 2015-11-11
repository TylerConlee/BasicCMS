<?php

namespace SummitCMS\Http\Controllers\Api;

use Illuminate\Http\Request;
use SummitCMS\Page;
use SummitCMS\Http\Requests;
use SummitCMS\Http\Controllers\Api\ApiController;
use SummitCMS\Http\Controllers\Controller;
use View;

class PageController extends ApiController
{
    /**
     * Display a listing of all pages, similar to the overview page of a blog, or a sitemap.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::all();
        return view('page.index', ['page' => $pages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('page.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $page = new Page;
        $page->title = $request->title;
        $page->slug = str_slug($request->title, "-");
        $page->accesslevel = $request->accesslevel;
        $page->body = $request->body;
        $page->save();
        return redirect('page/'.$page->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $page = Page::where('slug', $slug)->first();
        return view('page.show', ['page' => $page]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = Page::findOrFail($id);
        return view('page.edit', ['page' => $page]);
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
        $page = Page::find($id);
        $page->title = $request->title;
        $page->slug = str_slug($request->title, "-");
        $page->accesslevel = $request->accesslevel;
        $page->body = $request->body;
        $page->updated_at = date("Y-m-d H:i:s");
        $page->save();
        return redirect('page/'.$page->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page = Page::find($id);
        $page->delete();
        return redirect('page');
    }
}
