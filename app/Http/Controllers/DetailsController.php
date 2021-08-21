<?php

namespace App\Http\Controllers;

use App\Models\Details;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $details=Details::latest()->paginate(5);
        return view ('details.index',compact('details'))
        ->with('i',(request()->input('page',1)-1)*5);
    
    }
    
    public function create()
    {
        return view('details.create');
    }
    
    
    public function store(Request $request)
    {
        $request->validate([
        'name'=>'required',
        'address'=>'required',
        'age'=>'required',
    
    ]);
    Details::create($request->all());
    
        return redirect()->route('details.index')
        ->with('success', 'Students created successfully.');
    }
    
    
    
    public function edit(Details $detail)
    {
    
        return view('details.edit',compact('detail'));
    }
    
        public function update(Request $request,Details $detail)
    {
        $request->validate([
    
    ]);
    
        $detail->update($request->all());
    
        return redirect()->route('details.index')
        ->with('success','Student updated successfully');
    
    }
    
        public function destroy(Details $detail)
    {
        $detail->delete();
    
        return redirect()->route('details.index')
        ->with('success','Student deleted successfully');
    
    }
}