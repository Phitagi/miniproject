<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;

class transactionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
        $this->validate($request,

            [	'amount' => 'required | numeric |gte:0',
                'from_wallet' => 'required | string ',
                'to_user' => 'required | numeric ',
                'to_wallet' => 'required | string '
            ]
        );

        auth()->user()->wallet()->decrement($request->from_wallet,$request->amount);
        User::find($to_user)->wallet()->increment($request->to_wallet,$request->amount);

        return response()->json(['message'=>'The transaction was successful'],200);
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
