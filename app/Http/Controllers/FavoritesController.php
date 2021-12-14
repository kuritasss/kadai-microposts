<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    //
    //ユーザが特定の投稿内容をお気に入りに追加する機能
    public function store($micropostId)
    {
        \Auth::user()->favorite($micropostId);
        return back();
    }
    
    //ユーザがお気に入りを削除する機能
    public function destroy($micropostId)
    {
        \Auth::user()->unfavorite($micropostId);
        return back();
    }
}
