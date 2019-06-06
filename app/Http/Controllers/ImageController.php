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

	public function album(){
		$albums = Album::with('images')->get();
		return view('welcome', compact('albums'));
	}

	public function show($id){
		$album = Album::findOrFail($id);
		return $album;
	}

	public function store(Request $request){
		$this->validate($request, [
			'album' => 'required|min:3|max:15',
			'image' => 'required'
		]);
		$album = Album::create(['name' => $request->get('album')]);
		if($request->hasFile('image')){
			foreach($request->file('image') as $image){
				$path = $image->store('uploads', 'public');
				Image::create([
					'name' => $path,
					'album_id' => $album->id
				]);
			}
		}
		return "<div class='alert alert-success'>
			Album created!
		</div>";
	}
}
