<?php namespace App\Http\Controllers\Admin;


use App\Http\Requests;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\EditUserRequest;
use App\Http\Controllers\Controller;
use App\Http\Route;

use Illuminate\Support\Facades\Request;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

use App\User;

class UserController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		 $users=User::Name( request::get('name'))->paginate(5);
		 return view('admin.users.index',compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.users.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateUserRequest $request	)
	{

		$user=User::create($request->all());

		
		$redirect = redirect()->route('admin.users.index');
		return $redirect;
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
		$user=User::findOrFail($id);

		return view('admin.users.edit', compact('user'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditUserRequest $request,$id)
	{
		//
		$user=User::findOrFail($id);
		$user->fill($request->all());
		$user->save();

		$redirect = redirect()->route('admin.users.index');
		return $redirect;
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{

		//dd("Eliminado".$id);
		$user=User::findOrFail($id);

		$message=$user->fullName . ' has been delete';

		

		$user->delete();
		if(request::ajax()){
					return response()->json([
						'message'=>$message
						]);

		}
		//User::destroy($id);
		Session::flash('message', $message);
		return redirect()->route('admin.users.index');

	}

}
