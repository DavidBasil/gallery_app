<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use App\Album;

class ImageController extends Controller
{
	public function index(){
		$images = Image::get();
		return view('home', compact('images'));
	}

	public function store(Request $request){
		if($request->hasFile('image')){
			Image::create([
				'name' => $request->file('image')->store('uploads', 'public'),
				'album_id' => 1
			]);
		}
	}
}
