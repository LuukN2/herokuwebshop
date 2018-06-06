<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Navigation;

class NavigationController extends Controller
{
    public function newNavigation(){
        return view('admin.navigations.new');
    }
    
     public function add(Request $request) {
        $input = $request->all();

        $navigation = Navigation::create($input);
        
        return redirect('/admin/navigations');
    }
    
    public function edit($id){
        $navigation = Navigation::find($id);
        return view('admin.navigations.edit', ['navigation' => $navigation]);
    }
    
    public function destroy($id){
        Navigation::destroy($id);
        return redirect('/admin/navigations');
    }
    
    public function save(Request $request) {
        $input = $request->except(['_token','submit']);
        $request->input
        Navigation::find($request->id)->update($input);
        
        return redirect('/admin/navigations');
    }
    
    public function index(){
        $navigations = Navigation::all();
        return view('admin.navigations.index',['navigations' => $navigations]);
    }
}
