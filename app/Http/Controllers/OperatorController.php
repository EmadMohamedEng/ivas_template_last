<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Operator;
use App\Country;
use Validator;
class OperatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $operators = Operator::all();
        return view('operator.index',compact('operators'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countrys = Country::all();
        return view('operator.create',compact('countrys'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $validator = Validator::make($request->all(), [
                  'name' => 'required|string|unique:operators',
                  'rbt_sms_code' => 'required',
                  'rbt_ussd_code' => '',
                  'country_id' => 'required',
                  'image' => 'required'
          ]);

      if ($validator->fails()) {
          return back()->withErrors($validator)->withInput();
      }

      $operator = Operator::create($request->all());

      \Session::flash('success', 'Operator Update Successfully');
      return redirect('/operator');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $operator = Operator::findOrFail($id);
      $countrys = Country::all();
      return view('operator.edit',compact('operator','countrys'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
      $validator = Validator::make($request->all(), [
                  'name' => 'required|string|unique:operators,name,'.$id,
                  'rbt_sms_code' => 'required',
                  'rbt_ussd_code' => '',
                  'country_id' => 'required',
                  'image' => ''
          ]);

      if ($validator->fails()) {
          return back()->withErrors($validator)->withInput();
      }

      $operator = Operator::findOrFail($id);

      // if($request->operator_image){
      //   $this->delete_main_image_if_exists(base_path('/uploads/operator/'.$operator->operator_image));
      // }

      $operator->update($request->all());
      \Session::flash('success', 'Operator Update Successfully');
      return redirect('/operator');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $operator = Operator::findOrFail($id);

      $operator->delete();

      if($operator->operator_image){
        $this->delete_main_image_if_exists(base_path('/uploads/operator/'.$operator->operator_image));
      }

      \Session::flash('success', 'Operator Delete Successfully');
      return back();
    }
}
