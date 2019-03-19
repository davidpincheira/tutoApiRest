<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return response()->json(["hola" => "mundo"]);
        /* $contents = View::make('embedded')->with('foo', $foo);
        $response = Response::make($contents, $statusCode);
        $response->header('Content-Type', 'application/javascript');
        return $response; */
        //$user = User::select('email')->get();        devuelve solo los email

        $user = User::all();
        
        return response()->json($user->toArray());
        
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

        // dd($request->all());
        //option 1
        $user = new User();
        $user->full_name = $request->full_name;
        $user->email = $request->email;
        $user->save();

        //option 2
        /* $user = new User;
        $user->setName($request->name);
        $user->save(); */

        //option 3
        /* $user = User::create($request->all());
        return response()->json(["estado" => "saved!"]); */

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Solicitamos al modelo el User con el id solicitado por GET.
        return User::where('id', $id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
