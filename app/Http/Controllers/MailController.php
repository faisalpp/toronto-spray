<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public function SubmitMsg(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'message'=>'required',
          ]);
          $data = array('name'=>$request['name'],'email'=>$request['email'],'phone'=>$request['phone'],'msg'=>$request['message']);
          try{
              Mail::send('mailsView.quote', $data, function($message) use ($data) {
                  $message->to('marjoaliutfsi@gmail.com')->subject('Quote');
                  $message->from($data['email'],$data['name']);
                });
                session()->flash('success',"Message Submit Successfully!");
                return redirect()->back();
            }catch(Exception $e){
                session()->flash('error',"Something Went Wrong!");
                return redirect()->back();
            }
    }
}
