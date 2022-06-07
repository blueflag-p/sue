<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Professional;

class ProfessionalController extends Controller
{
    public function index()
    {
        $data =  Professional::orderBy('created_at', 'desc')->get();
        return view('dashboard.professional.index')->with('data', $data);;
    }

    public function create()
    {
        return view('dashboard.professional.create');
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
        
        Professional::create($request->except('picture'));
        Session::flash('success', "Successfully  Created");
        return redirect()->back();
        // return redirect()->route('professional');
    }

    public function edit($id)
    {
        $items = Professional::find($id);
        
        if (empty($items)) {
            Session::flash('error', "Item not found");
            return redirect()->back();
        }

        return view('dashboard.professional.edit')->with('item', $items);
    }

    public function update(Request $request, $id)
    {
        $id = intval($id);

        $item = Professional::find($id);

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
        return public_path(). "/storage/professional";
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
