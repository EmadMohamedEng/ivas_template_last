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
        $this->validate($request,[
            'key' => 'required|unique:settings'
        ]);
        $setting = new Setting();
        $check = false ;
        if($request['myField'] == '3')
        {
           if ($request->hasFile('TxtValue3'))
            {
                $imgExtensions = array("png","jpeg","jpg");
                $destinationFolder = "settings_images/";
                $file = $request->file("TxtValue3");
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
        }
        else if($request['myField'] == '4')
        {
           if ($request->hasFile('TxtValue4'))
            {
                $vidExtensions = array("mp4","flv","3gp");
                $destinationFolder = "settings_videos/";
                $file = $request->file("TxtValue4");
                if(! in_array($file->getClientOriginalExtension(),$vidExtensions))
                {
                    \Session::flash('failed','Video must be mp4, flv, or 3gp only !! No updates takes place, try again with that extensions please..');
                    return redirect('setting');
                }
                $uniqueid = uniqid();
                $file->move($destinationFolder,$uniqueid.".".$file->getClientOriginalExtension());
                $setting->value = $destinationFolder.$uniqueid.".".$file->getClientOriginalExtension();
                $check = true ;
           } 
        }
        
        else if($request['myField'] == '5')
        {
           if ($request->hasFile('TxtValue5'))
            {
                $audExtensions = array("mp3","webm");
                $destinationFolder = "settings_sounds/";
                $file = $request->file("TxtValue5");
                if(! in_array($file->getClientOriginalExtension(),$audExtensions))
                {
                    \Session::flash('failed','Audio must be mp3, webm only !! No updates takes place, try again with that extensions please..');
                    return redirect('setting');
                }
                $uniqueid = uniqid();
                $file->move($destinationFolder,$uniqueid.".".$file->getClientOriginalExtension());
                $setting->value = $destinationFolder.$uniqueid.".".$file->getClientOriginalExtension();
                $check = true ;
           } 
        }
        $setting->key = $request->key;
        if(!$check)
        {
            if (!empty($request->TxtValue1))
                $setting->value = $request->TxtValue1;
            elseif (!empty($request->TxtValue2))
                $setting->value = $request->TxtValue2;
            else
            {
                \Session::flash('failed','Value is Required');
                return back()->withInput();
            }
        }
        $setting->type = $request->myField;
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
            'key' => 'required'
        ]);
        $setting = Setting::findOrfail($id);
        $check = false ;
        
        if($setting->type == "3")
        {
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
                    unlink($setting->value);
                }
                $setting->value = $destinationFolder.$uniqueid.".".$file->getClientOriginalExtension();
                $check = true ;
            }
        }
        else if($setting->type == "4")
        {
            if ($request->hasFile('TxtValue4'))
            {

                $vidExtensions = array("mp4","flv","3gp");
                $destinationFolder = "settings_videos/";
                $file = $request->file("TxtValue4");
                if(! in_array($file->getClientOriginalExtension(),$vidExtensions))
                {
                    \Session::flash('failed','Video must be mp4, flv, or 3gp only !! No updates takes place, try again with that extensions please..');
                    return redirect('setting');
                }
                $uniqueid = uniqid();
                $file->move($destinationFolder,$uniqueid.".".$file->getClientOriginalExtension());
                if (file_exists($setting->value))
                {
                    unlink($setting->value);
                }
                $setting->value = $destinationFolder.$uniqueid.".".$file->getClientOriginalExtension();
                $check = true ;
            }
        }
        else if($setting->type == "5")
        {
            if ($request->hasFile('TxtValue5'))
            {

                $audExtensions = array("mp3","webm");
                $destinationFolder = "settings_sounds/";
                $file = $request->file("TxtValue5");
                if(! in_array($file->getClientOriginalExtension(),$audExtensions))
                {
                    \Session::flash('failed','Audio must be mp3, webm only !! No updates takes place, try again with that extensions please..');
                    return redirect('setting');
                }
                $uniqueid = uniqid();
                $file->move($destinationFolder,$uniqueid.".".$file->getClientOriginalExtension());
                if (file_exists($setting->value))
                {
                    unlink($setting->value);
                }
                $setting->value = $destinationFolder.$uniqueid.".".$file->getClientOriginalExtension();
                $check = true ;
            }
        }
      

        
        $setting->key = $request->key;
        if (!$check)
        {
            if (!empty($request->value))
                $setting->value = $request->value;
            else{
                \Session::flash('failed','No changes takes place');
                return redirect('setting');
            }
        }

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
            unlink($setting->value);
        }
        $setting->delete();
        \Session::flash('success', 'deleted successfully');
        return back();
    }
}
