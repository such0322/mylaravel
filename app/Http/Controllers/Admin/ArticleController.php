<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use DB;
use Illuminate\Pagination\BootstrapThreePresenter;

use Illuminate\Http\Request;

//use Illuminate\Support\Facades\DB;

class ArticleController extends AdminController {

    public function __construct() {
        parent::__construct();
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $Article = new Article();
        $rslist=$Article->paginate(10);
        $rslist->setPath("article");
        $pages=new BootstrapThreePresenter($rslist);
        return view("Admin/article/list")->with(["pages"=>$pages,"rslist"=>$rslist->toArray()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request) {
        //
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        //
    }

}
