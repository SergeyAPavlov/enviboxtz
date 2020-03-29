<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\ConcreteFeedback;

class FeedbackAjaxController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param ConcreteFeedback $feedback
     * @return \Illuminate\Http\Response
     */
    public function index(ConcreteFeedback $feedback)
    {
        $all = $feedback->getAllFeedbacks()->all();
        return json_encode($all);
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
     * @param ConcreteFeedback $feedback
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, ConcreteFeedback $feedback)
    {
        $this->validate($request, [
            'name' => 'required',
            'phone'=> 'required|digits:10',
            'text' => 'required'
        ]);
        $input = $request->all();
        $save = $feedback->saveFeedback($input);
        return response(json_encode($input), 200);
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
