<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Contact;

class ContactController extends Controller
{
    public function AddContact(){
    	return view('add_contact');
    }
    public function AllContact(){
    	/*$contacts = DB::table('contacts')->get();*/

    	$contacts = Contact::all();

    	return view('all_contact')->with('all_contacts',$contacts);
    }
    public function InsertContact(Request $request){
        /*$data = array();
        $data['name']  = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;

        $ct = DB::table('contacts')->insert($data);

        if ($ct) {
        	$notification=array(
        	  'messege'=>'Contact Added Successfully!',
        	  'alert-type'=>'success'
        	);
         return Redirect()->back()->with($notification);
        }else{
        	echo "error";
        }*/

        $contact = new Contact();
        $contact->name=$request->name;
        $contact->email=$request->email;
        $contact->phone=$request->phone;
        /*$contact=$request->all();*/
        $contact->save();

        if ($contact->save()) {
        	$notification=array(
        	  'messege'=>'Contact Added Successfully!',
        	  'alert-type'=>'success'
        	);
         return Redirect()->back()->with($notification);
        }else{
        	echo "error";
        }
    }
    public function DeleteContact($id){
    	//$dlt = DB::table('contacts')->where('id',$id)->delete();

    	$dlt = Contact::find($id)->delete();

    	if ($dlt) {
        	$notification=array(
        	  'messege'=>'Contact ID Deleted!',
        	  'alert-type'=>'success'
        	);
         return Redirect()->back()->with($notification);
         // return route('all.contact')->with($notification);
        }else{
        	echo "error";
        }
    }
    public function ShowContact($id){

    	/*$con = DB::table('contacts')
    	->where('id',$id)
    	->first();*/
    	$con = Contact::find($id)->first();

    	return view('show_contact')->with('sngl_con', $con);
    }
    public function EditContact($id){

    	$des=DB::table('contacts')->where('id',$id)->first();

    	return view('edit_contact')->with('edit_contact_id',$des);
    }
    public function UpdateContact(Request $request,$id){
                
                /*$data = array();
                $data['name']=$request->name;
                $data['email']=$request->email;
                $data['phone']=$request->phone;*/
                $contact=Contact::find($id);
                $contact->name=$request->name;
                $contact->email=$request->email;
                $contact->phone=$request->phone;
                $contact->save();

                /*$upd = DB::table('contacts')->where('id',$id)->update($data);*/

          if ($contact->save()) {
        	$notification=array(
        	  'messege'=>'Contact Update Successfully!',
        	  'alert-type'=>'success'
        	);
         //return Redirect()->back()->with($notification);
         return Redirect()->route('all.contact')->with($notification);
        }else{
        	echo "error";
        }
    }
}
