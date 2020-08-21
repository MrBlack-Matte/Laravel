<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\MyModel;
class MyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new MyModel;

        $data->name = $request->name;
        $data->age = $request->age;
        $data->email = $request->email;
        $data->message = $request->message;

        $data->save();

        return redirect()->to('/contacts');
        // ->with('success','Item created successfully!')
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
        $datas = MyModel::find($id);

        return view('pages.edit-contact')->with('tbltest',$datas); 
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
    
        $data = MyModel::find($id);
        
        
        $data->name = $request->name;
        $data->age = $request->age;
        $data->email = $request->email;
        $data->message = $request->message;

        $data->save();
     
        return redirect()->to('/contacts/views');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $delte = MyModel::find($id);

    $delte->delete();
    return redirect()->to('/contacts/views');
    }
    public function views()
    {   
        // $post = DB::table('tbltest')->get();
        
        // return view('pages.table',['tbltest' => $post]);
        $post=MyModel::all();
        return view('pages.table')->with('tbltest',$post);
    }
}