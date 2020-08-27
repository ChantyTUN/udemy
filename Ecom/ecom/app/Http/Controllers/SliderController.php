<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
class SliderController extends Controller
{

	public function index(){
		$sliders = Slider::get();
		return view('admin.slider.index',compact('sliders'));
	}
    public function create(){
    	return view('admin.slider.create');
    }

    public function store(Request $request){
    	$this->validate($request,[
    		'image'=>'required|image|mimes:jpeg,png,jpg,bmp,gif,svg|max:2048'
		]);
		$image = time().'.'.$request->image->getClientOriginalExtension();
		$request->image->move(public_path('slider'), $image);
    	// $image = $request->file('image')->store('public/slider');
    	Slider::create([

    		'image'=>$image
    	]);
    	notify()->success('Image uploaded successfully!');
        return redirect()->back();
    }

    public function destroy($id){
    	Slider::find($id)->delete();
    	notify()->success('Image deleted successfully!');
        return redirect()->back();
    }
}
