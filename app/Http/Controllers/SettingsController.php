<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SettingsController extends Controller {
	public function __construct() {
		$this->middleware ( 'auth' );
	}
	public function index(Request $request) {
		return view ( 'settings.index' );
	}
	public function addres(Request $request) {
		return view ('settings.addres');
	}
	public function store(Request $request) {
		$this->validate ( $request, [ 
				'name' => 'required|max:255' 
		] );
		
		$task = Auth::user ();
		$task->first_name = $request->name;
		$task->update ();
		
		return redirect ( '/settings' );
	}
	public function address(Request $request) {
		$this->validate ( $request, [
				'country' => 'required|max:255'
		] );
		$request->user()->addresses()->create([
				'country' => $request->country,
		]);
		
		return redirect('settings');
	}
}
