<?php

namespace App\Http\Controllers\backend;
use App\Booking;
use App\Contact;
use App\Http\Controllers\Controller;
use App\Tour;
use App\TourBooking;
use App\HotelBooking;
use App\Hotel;
use App\Trekking;
use Auth;
use Hash;
use App\User;
use travel;
use Illuminate\Support\Facades\Input;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    use AuthenticatesUsers;

    public function dashboard(){
        $tour=Tour::all();
        $hotel=Hotel::all();
        $trekking=Trekking::all();
        return view('backend.pages.mainpage',compact('tour','hotel','trekking'));
    }

    public function logout(Request $request){
        $this->guard()->logout();
        $request->session()->invalidate();
        return redirect('/@dashboard@');
    }

    public function login(){
        return view('backend.pages.login');
    }

    public function login_action(Request $request){
        $this->validate($request,['email'=>'required',
            'password'=>'required|min:6']);

        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect('/dashboard');
        }
        return redirect('/login')->with('alert','Credentials didnot match!!!');
    }

    public function register(){
        return view('backend.pages.register');
    }

    public function register_action(Request $request){
        $this->validate($request,['name'=>'required|string',
            'email'=>'required',
            'password'=>'required|min:6|confirmed']);

        $request['password']=bcrypt($request->password);
        User::create($request->all());
        return redirect('/@dashboard@')->with('alert','successfully registered!!!');
    }

    public function profile(Request $request){
        $id=(int)$request->id;
        $datas=User::find($id);
        /*$tour=Tour::all();
        $hotel=Hotel::all();
        $trekking=Trekking::all();*/
        if($datas['utype']=='user'){
            return view('backend/pages/user_profile',compact('tour','hotel','trekking'));
        }else{
            $pem=User::where('utype','user')->get();
            return view('backend/pages/admin_profile',compact('pem','tour','hotel','trekking'));
        }
    }

    public function edit_userprofile(Request $request){
        $id=(int)$request->id;
        $datas=User::find($id);
        return view('backend.pages.edit_userprofile',compact('datas'));
    }

    public function userprofile_action(Request $request){
        $this->validate($request,['name'=>'required|string',
            'email'=>'required',
            'address'=>'required|string',
            'job'=>'required|string']);

        $id = (int)$request->id;
        $datas = User::find($id);
        $datas->name=$request->name;
        $datas->email=$request->email;
        $datas->address=$request->address;
        $datas->job=$request->job;
        if(Input::hasfile('image')){
            $file=Input::file('image');
            $file->move(public_path().'/backend/images/profile_image',$file->getClientOriginalName());
            $datas->image=$file->getClientOriginalName();
        }
        $datas->save();
        return redirect()->back()->with('alert','successfully edited!!!');
    }

    public function password_action(Request $request){
        $id=(int)$request->id;
        $this->validate($request,['password'=>'required|min:6|confirmed',
            'oldpassword'=>'required']);
        $data = $request->all();
        $data['password'] = bcrypt($request->password);

        $user = User::find($id);



        if(!Hash::check($data['oldpassword'], $user->password)){

            return redirect()->back()->with('error','oopss!!! old password didnt match!!!');
        }
        else{
            $user->password = $data['password'];
            $user->save();
            return redirect()->back()->with('success','Succesfully Updated!!!');
        }
    }

    public function edit_adminprofile(Request $request){
        return view('backend.pages.edit_adminprofile');
    }

    public function adminprofile_action(Request $request){
        $this->validate($request,['name'=>'required|string',
            'email'=>'required',
            'address'=>'required|string',
            'job'=>'required|string']);
        $datas = User::find(Auth::user()->id);
        $datas->name=$request->name;
        $datas->email=$request->email;
        $datas->address=$request->address;
        $datas->job=$request->job;
        if(Input::hasfile('image')){
            $file=Input::file('image');
            $file->move(public_path().'/backend/images/profile_image',$file->getClientOriginalName());
            $datas->image=$file->getClientOriginalName();
        }
        $datas->save();
        return redirect()->back()->with('alert','successfully edited!!!');
    }

    public function profile_del(Request $request){
        $id=(int)$request->id;
        $data=User::find($id);
        $data->delete();
        return redirect()->back()->with('alert','successfully deleted!!!');

    }

    public function bookingMessages()
    {
        $notifications = Booking::where('count', 0)->limit(5)->get();
        $count = Booking::where('count', '=', '0')->count();
        $output = '';

        if ($count == 0) $output .= "<li><a href='" . route('allbooking-message') . "'><span><span>View Previous Messages</span></span>";

        foreach ($notifications as $key => $notification) {
            $output .= "<li><a href='" . route('allbooking-message') . "'><span>{$notification->first_name}</span><br>";
            $output .= "<span class='message'> {$notification->email}</span> </a> </li>";
        }
        $response = [
            'status' => true,
            'code' => 200,
            'data' => $output,
            'count' => $count
        ];
        return response()->json($response);
    }


    public function viewbookingMessages(){
        $datas = Booking::Orderby('id','desc')->get();
        return view('backend.pages.notification.all_notification', compact('datas'));
    }

    public function allbooking_view(Request $request){
        $id=(int)$request->id;
        $datas=Booking::find($id);
        $datas->count=1;
        $datas->save();
        return view('backend.pages.notification.allbooking_show',compact('datas'));
    }

    public function allbooking_delete(Request $request){
        $id=(int)$request->id;
        $datas=Booking::find($id);
        $datas->delete();
        return redirect('/dashboard/allbooking_message')->with('success','deleted successfully!!!');
    }

    /*...........hotel-booking notification.............*/
    public function hotelbookingMessages()
    {
        $notifications = HotelBooking::where('count', 0)->limit(5)->get();
        $count = HotelBooking::where('count', '=', '0')->count();
        $output = '';

        if ($count == 0) $output .= "<li><a href='" . route('hotelbooking-message') . "'><span><span>View Previous Messages</span></span>";

        foreach ($notifications as $key => $notification) {
            $output .= "<li><a href='" . route('hotelbooking-message') . "'><span>{$notification->first_name}</span><br>";
            $output .= "<span class='message'> {$notification->email}</span> </a> </li>";
        }
        $response = [
            'status' => true,
            'code' => 200,
            'data' => $output,
            'count' => $count
        ];
        return response()->json($response);
    }


    public function viewhotelbookingMessages(){
        $datas = HotelBooking::Orderby('id','desc')->get();
        return view('backend.pages.notification.hotel_notification', compact('datas'));
    }

    public function hotelbooking_view(Request $request){
        $id=(int)$request->id;
        $datas=HotelBooking::find($id);
        $datas->count=1;
        $datas->save();
        return view('backend.pages.notification.hotelbooking_show',compact('datas'));
    }

    public function hotelbooking_delete(Request $request){
        $id=(int)$request->id;
        $datas=HotelBooking::find($id);
        $datas->delete();
        return redirect('/dashboard/hotelbooking_message')->with('success','deleted successfully!!!');
    }


    /*.....................contact-notification.......................*/
    public function contactMessages()
    {
        $notifications = Contact::where('count', 0)->limit(5)->get();
        $count = Contact::where('count', '=', '0')->count();
        $output = '';

        if ($count == 0) $output .= "<li><a href='" . route('contact-message') . "'><span><span>View Previous Messages</span></span>";

        foreach ($notifications as $key => $notification) {
            $output .= "<li><a href='" . route('contact-message') . "'><span>{$notification->name}</span><br>";
            $output .= "<span class='message'> {$notification->email}</span> </a> </li>";
        }
        $response = [
            'status' => true,
            'code' => 200,
            'data' => $output,
            'count' => $count
        ];
        return response()->json($response);
    }


    public function viewcontactMessages(){
        $datas = Contact::Orderby('id','desc')->get();
        return view('backend.pages.notification.contact_notification', compact('datas'));
    }

    public function contact_view(Request $request){
        $id=(int)$request->id;
        $datas=Contact::find($id);
        $datas->count=1;
        $datas->save();
        return view('backend.pages.notification.contact_show',compact('datas'));
    }

    public function contact_delete(Request $request){
        $id=(int)$request->id;
        $datas=Contact::find($id);
        $datas->delete();
        return redirect('/dashboard/contact_message')->with('success','deleted successfully!!!');
    }
}
