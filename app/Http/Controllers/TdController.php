<?php

namespace App\Http\Controllers;

use App\Models\Td;
use Illuminate\Http\Request;

class TdController extends Controller
{
  
    public function index()
    {
        //
    }

   
    public function create()
    {
        return view('td_create')->with('tdArr',Td::all());
    }

  
    public function store(Request $request)
    {
		$res=new Td;
		$res->name=$request->input('name');
		$res->save();
		return redirect('td_show');
    }

  
    public function show(Td $td)
    {
        return view('td_show')->with('tdArr',Td::all());
    }

   
    public function edit(Td $td,$id)
    {		 
         return view('td_edit')->with('tdArr',Td::find($id));
    }

  
    public function update(Request $request, Td $td)
    {
    
		$res=Td::find($request->id);
		$res->name=$request->input('name');
		$res->save();
		return redirect('td_show');
    }

    
    public function destroy(Td $td, $id)
    {    
		Td::destroy(array('id',$id));
		return redirect('td_show');
    }

    
}