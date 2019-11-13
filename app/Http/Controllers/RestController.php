<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestController extends Controller
{
    //参照：https://readouble.com/laravel/5.5/ja/controllers.html
    public function index()
    {
        //GET /rest
        return 'これはGetです';
    }
    public function create()
    {
        //GET /rest/create
        return 'これはcreateです';
    }
    public function store()
    {
        //POST /rest
        return 'これはPostです';
    }
    public function show($id)
    {
        //GET /rest/{id}
        return 'これはshowです。引数は' . $id . 'です。';
    }
    public function edit($id)
    {
        //GET /rest/{id}/edit
        return 'これはeditです。引数は' . $id . 'です。';
    }
    public function update($id)
    {
        //PUTorPATCH /rest/{id}/
        return 'これはupdateです。引数は' . $id . 'です。';
    }
    public function destroy($id)
    {
        //DELETE /rest/{id}/
        return 'これはdestroyです。引数は' . $id . 'です。';
    }
}
