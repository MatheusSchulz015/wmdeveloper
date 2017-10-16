<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Validator;
use Session;
use Redirect;
class SendEmailController extends Controller
{

	public function sendEmail(Request $request)
	{
		
    	$messages = [
    'nome.required' => 'Por favor informe seu :attribute',
    'email.required' => 'Por favor informe seu :attribute',
    'email.email' => 'Por favor informe um endereço de email valido',
    'tel.required' => 'Por favor informe seu telefone',
    'msg.required' => 'Por favor digite sua mensagem',
    ];
      $validator = Validator::make($request->all(), [
            'nome' => 'required',
            'email' => 'required|email',
            

        ],$messages);

    	  if ($validator->fails()) {
            return redirect('/#contact')
                        ->withErrors($validator)
                        ->withInput();
        }

        config(['mail.from.name' => $request->nome]);
        config(['mail.from.address' => $request->email]);
     
    	Mail::send('email',$request->all(),function($msg){
    		$msg->subject('Contato');
    		$msg->from(config('mail.from.address'));

    		$msg->to('wmdeveloper8@gmail.com');
    	});

    	Session::flash('msg','Obrigado por entrar entrar em contato, aguarde o nosso retorno!');
    	return Redirect::to('/#contact');
	}
}
