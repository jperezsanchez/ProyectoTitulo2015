<?php

class UsuarioController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$usuarios = User::all();
		return View::make('usuario/index')->with('usuarios', $usuarios);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('usuario/create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
            'username'       => 'required',
            'password'      => 'required',
            'name'      => 'required',
            'email' => 'required|email'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('usuario/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $usuario = new User;
            $usuario->username       = Input::get('username');
            $usuario->password      = Hash::make(Input::get('password'));
            $usuario->name      = Input::get('name');
            $usuario->email = Input::get('email');
            $usuario->save();

            // redirect
            Session::flash('message', 'Usuario creado exitosamente');
            return Redirect::to('usuario');
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
		$usuario = User::find($id);
		return View::make('usuario/show')->with('usuario', $usuario);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$usuario = User::find($id);
		return View::make('usuario/edit')->with('usuario', $usuario);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$rules = array(
            'username'       => 'required',
            'password'      => 'required',
            'name'      => 'required',
            'email' => 'required|email'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('usuario/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $usuario = User::find($id);
            $usuario->username       = Input::get('username');
            $usuario->password      = Hash::make(Input::get('password'));
            $usuario->name      = Input::get('name');
            $usuario->email = Input::get('email');
            $usuario->save();

            // redirect
            Session::flash('message', 'Usuario editado exitosamente');
            return Redirect::to('usuario');
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
		$usuario = User::find($id);
        $usuario->delete();

        // redirect
        Session::flash('message', 'Usuario eliminado correctamente!');
        return Redirect::to('usuario');
	}


}