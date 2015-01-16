<?php

class WishController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$wishs = Wish::orderBy('id', 'DESC')->where('user_id', Auth::user()->id)->get();		
		return View::make('wish.index',compact('wishs'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('wish.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{			
		$validator = Validator::make(Input::all(), Wish::$rules);		
		if ($validator->passes()) {
            $wish = new Wish;
            $wish->wish = Input::get('wish');
            $wish->user_id = Auth::user()->id;
            $wish->save();

            return Redirect::to('wish')->with('flash_notice', 'Wish added successfully.');
        }        
        else{
            return Redirect::back()->withInput()->withErrors($validator);
        }        
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{		
		$wish = Wish::find($id);
		$wish->status = 'done';
		$wish->save();
        return Redirect::to('wish')->with('flash_notice', 'Wish fulfilled.');
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$wish = Wish::find($id);		
		return View::make('wish.edit',compact('wish'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$validator = Validator::make(Input::all(), Wish::$rules);		
		if ($validator->passes()) {
    	    $wish = Wish::find($id);
			$wish->wish = Input::get('wish');
			$wish->save();
            return Redirect::to('wish')->with('flash_notice', 'Wish updated successfully.');
        }        
        else{
            return Redirect::back()->withInput()->withErrors($validator);
        }
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$wish = Wish::find($id);
		$wish->delete();
		return Redirect::to('wish')->with('flash_notice', 'Wish deleted successfully.');
	}

}
