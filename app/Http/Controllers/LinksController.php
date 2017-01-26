<?php

namespace App\Http\Controllers;
use App\Link;

use Illuminate\Http\Request;

class LinksController extends Controller
{
    
     public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $links = Link::all();
        
        return view('links.index', compact('links'));
    }
    
    public function create()
    {
        // form
        return view('links.add-link');
    }
    
    public function addLink(Request $request)
    {
        //add a link to DB
        $link = new Link;
        $link->url = $request->url;
        $link->description = $request->description;
        $link->save();
        
        return redirect('/links');
    }
}
