<?php

namespace App\Http\Controllers;

use Hamcrest\Core\Set;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Setting;
use Amranidev\Ajaxis\Ajaxis;
use Illuminate\Support\Facades\Storage;
use URL;

use Validator;
/**
 * Class SettingController.
 *
 * @author  The scaffold-interface created at 2017-04-02 02:44:30pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - setting';
        $settings = Setting::all();
        return view('setting.index',compact('settings','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - setting';
        
        return view('setting.create',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $request['TxtValue'];
        $this->validate($request,[
            'key' => 'required|unique:settings',
            'TxtValue' => 'required',
        ]);
        $setting = new Setting();
        $check = false ;
        if ($request->hasFile('TxtValue'))
        {
            $imgExtensions = array("png","jpeg","jpg");
            $destinationFolder = "settings_images/";
            $file = $request->file("TxtValue");
            if(! in_array($file->getClientOriginalExtension(),$imgExtensions))
            {
                \Session::flash('failed','Image must be jpg, png, or jpeg only !! No updates takes place, try again with that extensions please..');
                return redirect('setting');
            }
            $uniqueid = uniqid();
            $file->move($destinationFolder,$uniqueid.".".$file->getClientOriginalExtension());
            $setting->value = $destinationFolder.$uniqueid.".".$file->getClientOriginalExtension();
            $check = true ;
        }

        $setting->key = $request->key;
        if(!$check)
            $setting->value = $request->TxtValue;
        $setting->save();        
        $request->session()->flash('success', 'Setting created successfull');

        return redirect('setting');
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Edit - setting';
        
        $setting = Setting::findOrfail($id);
        return view('setting.edit',compact('title','setting'  ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $this->validate($request,[
            'key' => 'required',
            'value' => 'required',
        ]);
        $setting = Setting::findOrfail($id);
        $check = false ;
        if ($request->hasFile('value'))
        {

            $imgExtensions = array("png","jpeg","jpg");
            $destinationFolder = "settings_images/";
            $file = $request->file("value");
            if(! in_array($file->getClientOriginalExtension(),$imgExtensions))
            {
                \Session::flash('failed','Image must be jpg, png, or jpeg only !! No updates takes place, try again with that extensions please..');
                return redirect('setting');
            }
            $uniqueid = uniqid();
            $file->move($destinationFolder,$uniqueid.".".$file->getClientOriginalExtension());
            if (file_exists($setting->value))
            {
                Storage::delete($setting->value);
            }
            $setting->value = $destinationFolder.$uniqueid.".".$file->getClientOriginalExtension();
            $check = true ;
        }

        
        $setting->key = $request->key;
        if (!$check)
            $setting->value = $request->value;
        
        $setting->save();
        $request->session()->flash('success', 'updated successfully');

        return redirect('setting');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param    int $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $setting = Setting::findOrfail($id);
        if (file_exists($setting->value))
        {
            Storage::delete($setting->value);
        }
        $setting->delete();
        return back();
    }
}
