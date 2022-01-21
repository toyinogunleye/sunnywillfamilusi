<?php

namespace App\Http\Controllers;

use App\Models\image;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Property::all();
        return view('property.all-property')->with("properties",$properties);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('property.add-property');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile("cover_image")){
            $file=$request->file("cover_image");
            $imageName=time().'_'.$file->getClientOriginalName();
            $file->move(\public_path("cover/"),$imageName);

            $property = new Property([
                "name" => $request->name,
                "type" => $request->type,
                "purpose" => $request->purpose,
                "price" => $request->price,
                "bedroom" => $request->bedroom,
                "bathroom" => $request->bathroom,
                "area" => $request->area,
                "city" => $request->city,
                "state" =>$request->state,
                "address" =>$request->address,
                "description" =>$request->description,
                "cover_image" =>$imageName,
            ]);
            $property->save();
        }

            if($request->hasFile("images")){
                $files=$request->file("images");
                foreach($files as $file){
                    $imageName=time().'_'.$file->getClientOriginalName();
                    $request['property_id']=$property->id;
                    $request['image']=$imageName;
                    $file->move(\public_path("/images"),$imageName);
                    image::create($request->all());
                }
            }
            return redirect("/property");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $properties = Property::findOrFail($id);
        return view("property.edit-property")->with("properties",$properties);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $property = Property::findOrFail($id);
        if($request->hasFile("cover_image")){
            if(File::exists("cover/".$property->cover_image)){
                File::delete("cover/".$property->cover_image);
            }
            $file = $request->file("cover_image");
            $property->cover_image=time().'_'.$file->getClientOriginalName();
            $file->move(\public_path("/cover"),$property->cover_image);
            $request['cover_image'] = $property->cover_image;
        }

        $property->update([
            "name" => $request->name,
             "type" => $request->type,
            "purpose" => $request->purpose,
            "price" => $request->price,
            "bedroom" => $request->bedroom,
            "bathroom" => $request->bathroom,
            "area" => $request->area,
            "city" => $request->city,
            "state" =>$request->state,
            "address" =>$request->address,
            "description" =>$request->description,
            "cover_image" =>$property->cover_image,

        ]);

        if($request->hasFile("images")){
            $files = $request->file("images");
            foreach($files as $file){
                $imageName = time().'_'.$file->getClientOriginalName();
                $request["property_id"]=$id;
                $request["image"] = $imageName;
                $file->move(\public_path("images"),$imageName);
                image::create($request->all());
            }
        }

        return redirect("/property");


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $properties = Property::findOrFail($id);

        if(File::exists("cover/",$properties->cover_image)){
            File::delete("cover/".$properties->cover_image);
        }
        $images = image::where("property_id",$properties->id)->get();
        foreach($images as $image){
            if(File::exists("images/".$image->image)){
                File::delete("images/".$image->image);
            }
        }
        $properties->delete();
        return back();

    }

    public function deleteimage($id)
    {
        $images = image::findOrFail($id);
        if(File::exists("images/".$images->image)){
            File::delete("images/".$images->image);
        }

        image::find($id)->delete();
        return back();
    }

    public function deletecoverimage($id)
    {
        $cover_image = Property::findOrFail($id)->cover_image;
        if(File::exists("cover/".$cover_image)){
            File::delete("cover/".$cover_image);
        }

        Property::find($id)->delete();
        return back();
    }
}
