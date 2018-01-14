<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
	public function getContact() {
		return view('welcome');
	}
	
	public function postContact(Request $request) {
		$this->validate($request, [
				'name' => 'required',
				'email' => 'required|email',
				'phone' => 'required',
				'subject' => 'min:3',
				'message' => 'min:10'
		]);
		
		$data = array(
				'name' => $request->name,
				'email' => $request->email,
				'phone' => $request->phone,
				'subject' => $request->subject,
				'bodyMessage' => $request->message
		);
		Mail::send('emails.contact', $data, function($message) use ($data){
			$message->from($data['email']);
			$message->to('hjmarshall18@gmail.com');
			$message->subject($data['subject']);
		});
			
			Session::flash('success', "Your Email was Sent!");
			
			return redirect('welcome');
	}
}
