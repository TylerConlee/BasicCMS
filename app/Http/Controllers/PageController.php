<?php

namespace SummitCMS\Http\Controllers;

use Illuminate\Http\Request;
use SummitCMS\Page;
use SummitCMS\Http\Requests;
use SummitCMS\Http\Controllers\Api\ApiController;
use SummitCMS\Http\Controllers\Controller;
use View;

class PageController extends ApiController
{
    protected function getSkin(){
        return \Config::get('app.skin');
    }

    /**
     * Display a listing of all pages, similar to the overview page of a blog, or a sitemap.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::all();
        $skin = $this->getSkin();
        return view($skin.'.index', ['page' => $pages]);
    }
    /**
     * Display a listing of all pages, similar to the overview page of a blog, or a sitemap.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin()
    {
        $pages = Page::all();
        $skin = $this->getSkin();
        return view($skin.'.admin', ['page' => $pages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $skin = $this->getSkin();
        return View::make($skin.'.create');
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
        $page->author = $request->author;
        $page->accesslevel = $request->accesslevel;
        $page->body = $request->body;
        $page->save();
        return redirect($page->slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();
        $skin = $this->getSkin();
        return view($skin.'.show', ['page' => $page]);
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
        $skin = $this->getSkin();
        return view($skin.'.edit', ['page' => $page]);
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
        $page->author = $request->author;
        $page->accesslevel = $request->accesslevel;
        $page->body = $request->body;
        $page->save();
        return redirect($page->slug);
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
        $skin = $this->getSkin();
        return redirect('admin');
    }


    /**
     * Displays the page for trashed items
     * @return View
     */
    public function trash() {
        $page = Page::onlyTrashed()
                ->get();
        $skin = $this->getSkin();
        return view($skin.'.trash', ['page' => $page]);
    }


    /**
     * Permanently removes the selected resource from storage
     * @param  int $id ID of item being deleted
     * @return Redirect
     */
    public function delete($id) {
        Page::withTrashed()
        ->where('id', $id)
        ->forceDelete();
        return redirect('admin');
    }

    /**
     * Restires resource and removes it from the trash
     * @param  int $id ID of the item being restored
     * @return Redirect
     */
    public function restore($id) {
        Page::withTrashed()
        ->where('id', $id)
        ->restore();
        return redirect('admin');
    }
}
