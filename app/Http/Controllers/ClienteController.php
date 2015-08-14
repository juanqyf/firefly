<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Route;


use App\Http\Controllers\Controller;

use App\Cliente;

class ClienteController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//$result=\DB::table('clientes')->get();
		 //$clientes=Clientes::Name( request::get('name'))->paginate(5);
		
		  //$clientes = \DB::table('clientes')->paginate(15);
		  $clientes=Cliente::paginate(5); 
    //dd($clientes);
		// return view('clientes.index',compact('clientes'));
		return view('clientes.index',compact('clientes'));
		//return dd($result);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		$cliente=Cliente::find($id);
		//print_r( $cliente);
		return view('clientes.edit', compact('cliente'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
