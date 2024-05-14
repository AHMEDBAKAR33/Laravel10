<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //here we will pass the all data to be show at the main page 
        $data = DB::select('SELECT * FROM users ');
        
        return view('try.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // this method when user want to see only one element from the data so
        // we use the id to fetch this specific element 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data =DB::select('SELECT * from users where id = ?', [$id]);
        return view('try.edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $userName= $request->username;
        $Email= $request->email; 
        $update_date=$request->created_at;
        $data = DB::update('UPDATE users SET username=? , email=? , created_at=? WHERE id=?',[$userName,$Email,$update_date,$id]);
        return redirect()->back()->with('message','update done ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        //
        DB::delete('DELETE FROM users WHERE id=?',[$id]);
        return back()->with('message','The Post Deleted Successfully ');
    }
}
