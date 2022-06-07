<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Location;

class LocationController extends Controller
{
    public function index()
    {
        $data =  Location::orderBy('created_at', 'desc')->get();
        return view('dashboard.location.index')->with('data', $data);;
    }

    public function create()
    {
        return view('dashboard.location.create');
    }
    public function store(Request $request)
    {
        if($request->hasFile('picture')){
            $image = $request->file('picture');
            $name = $this->getFileName($image);
            $path = $this->getProfilePicPath();
            $image->move($path, $name);
            $request->merge(['image' => $name]);
        }

        Location::create($request->except('picture'));
        Session::flash('success', "Successfully  Created");
        return redirect()->route('location');
    }

    
    public function edit($id)
    {
        $items = Location::find($id);
        
        if (empty($items)) {
            Session::flash('error', "Item not found");
            return redirect()->back();
        }

        return view('dashboard.location.edit')->with('item', $items);
    }

    public function update(Request $request, $id)
    {
        $id = intval($id);

        $item = Location::find($id);

        $profile = $item->image;

        if( $request->hasFile('picture') ) {

            $image = $request->file('picture');
            $name = $this->getFileName($image);
            $path = $this->getProfilePicPath();
            $image->move($path, $name);
            $request->merge(['image' => $name]);

            $this->unlinkProfilePic($item->image);
        }

        $item->update($request->except('picture'));

        Session::flash('success', "Successfully  Updated");
        return redirect()->back();

    }

    private function getFileName($image){
        return time().'.'.str_replace(' ','_',strtolower($image->getClientOriginalName()) );
    }
 
 
    private function getProfilePicPath(){
        return public_path(). "/storage/location/";
    }

    private function unlinkProfilePic($file){
        
        $file_path = $this->getProfilePicPath();
        $file = $file_path.$file;
        
        if(file_exists($file) ){
           @unlink($file);
           return true;
        }

        return false;

     }
 

}
