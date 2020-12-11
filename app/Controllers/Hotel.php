<?php namespace App\Controllers;

use App\Models\db_hotel;
use App\Models\db_reser;

class Hotel extends BaseController
{
	public function main()
	{
		$request = \Config\Services::request();
        $nombreU = $request -> getPost('fn');
        $apellidoU = $request -> getPost('ln');
        $email = $request -> getPost('email');
        $password = $request -> getPost('password');
        $dato = [
            'nombreU' => $nombreU,
            'apellidoU' => $apellidoU,
            'email' => $email,
            'password' => $password
        ];
        $hotelito = new db_hotel($db);
        $hotelito -> insert($dato);
		return view('main').view('footer');
	}

	public function habitaciones()
	{

		return view('habitaciones').view('footer');
	}

	public function calendario()
	{
		return view('calendario').view('footer');
	}

	public function index()
	{
		return view('indexx').view('footer');
	}

	public function pagar()
	{
		return view('pagar').view('footer');
	}

	public function Admin()
	{	
		return view('Admin').view('footer');
	}

	public function AdminP()
	{
		return view('AdminP').view('footer');
	}

	public function adminConsul()
	{
		$hotelito = new db_reser($db);
        $dato['usuarios'] = $hotelito -> findAll();
        return view('AdminConsul', $dato).view('footer');
	}
	public function adminCancelar()
	{
		$request= \Config\Services::request();
        $idRes = $request->getPost('idRes');
		$hotelito = new db_reser($db);
		$dato['usuarios'] = $hotelito -> findAll();
		if($idRes != NULL){
			$hotelito -> delete($idRes);
		}
		return view('AdminCancelar', $dato).view('footer');
	}

	public function sal()
	{	
		$request= \Config\Services::request();
		$idRes = $request->getPost('idRes');
		$hotelito = new db_reser($db);
		if($idRes != NULL){
			$hotelito -> delete($idRes);
		}
		return view('object').view('footer');
	}
}