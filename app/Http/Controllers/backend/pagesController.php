<?php

namespace App\Http\Controllers\backend;
use App\About;
use App\Associate;
use App\Booking;
use App\Catogary;
use App\Contact;
use App\DynamicContact;
use App\ExploreNepal;
use App\Hotel;
use App\HotelBooking;
use App\HotelTab;
use App\Seo;
use App\SocialLinks;
use App\SubCatagory;
use App\TrekkingTab;
use App\Http\Controllers\Controller;

use App\logo;
use App\MD;
use App\Messagemd;
use App\ProgressBar;
use App\Remittance;
use App\RemittanceCompany;
use App\Slider;
use App\Ticketing;
use App\Tour;
use App\TourBooking;
use App\TourimgScroll;
use App\HotelimgScroll;
use App\TourTab;
use App\Trekking;
use App\TicketBook;
use App\TrekkingimgScroll;
use Mail;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function homepage(){

        return view('backend.pages.mainpage');
    }

    public function mainpage(){
        $tour=Tour::all();
        $hotel=Hotel::all();
        $trekking=Trekking::all();
        return view('backend.pages.mainpage',compact('tour','hotel','trekking'));
    }

    public function slider(){
        $datas=Slider::all();

        return view('backend.pages.slider',compact('datas'));
    }

    public function slider_action(Request $request){
        $this->validate($request,['image'=>'required',
        'title'=>'required',
        'sub_title'=>'required']);
        $datas=new Slider;
        if(Input::hasFile('image')){
            $file=input::file('image');
            $file->move(public_path().'/backend/images/slider',$file->getClientOriginalName());
            $datas->image=$file->getClientOriginalName();
        }
        $datas->title=$request->title;
        $datas->sub_title=$request->sub_title;
        $datas->save();
        return redirect()->back()->with('alert','added successfully!!!');
    }

    public function slider_edit(Request $request){
        $id=(int)$request->id;
        $datas=Slider::find($id);
        return view('backend/pages/slider_edit',compact('datas'));
    }

    public function slideredit_action(Request $request){
        $id=(int)$request->id;
        $datas=Slider::find($id);
        if(Input::hasFile('image')){
            $file=input::file('image');
            $file->move(public_path().'/backend/images/slider',$file->getClientOriginalName());
            $datas->image=$file->getClientOriginalName();
        }
        $datas->title=$request->title;
        $datas->sub_title=$request->sub_title;
        $datas->save();

        return redirect()->back()->with('success','editted successfully!!!');
    }

    public function slider_del(Request $request){
        $id=(int)$request->id;
        $data=Slider::find($id);
        $data->delete();
        return redirect()->back()->with('success','deleted successfully!!!');
    }

    public function hotel(){
        $datas=Hotel::all();
        return view('backend.pages.hotel',compact('datas'));
    }

    public function hotel_action(Request $request){
        $this->validate($request,['image'=>'required',
        'price'=>'required',
        'package'=>'required',
        'name'=>'required',
        'address'=>'required',
        'details'=>'required',
        'rating'=>'required']);

        $datas=new Hotel;
        if(Input::hasFile('image')){
            $file=input::file('image');
            $file->move(public_path().'/backend/images/hotel/',$file->getClientOriginalName());
            $datas->image=$file->getClientOriginalName();
        }
        $datas->price=$request->price;
        $datas->package=$request->package;
        $datas->hotel_name=$request->name;
        $datas->hotel_address=$request->address;
        $datas->rating=$request->rating;
        $datas->detail=$request->details;
        $datas->slug=$request->slug;
        $datas->save();

        $hotelid=$datas['id'];
        if ($request->hasFile('scroll_image')) {

            foreach ($request->scroll_image as $file) {

                $filename = $file->getClientOriginalName();
                $file -> storeAs('public/backend/images/hotel_scroll/',$filename);
                $file -> move(public_path().'/backend/images/hotel_scroll/',$file->getClientOriginalName());
                $data = new HotelimgScroll;
                $data->image = $filename;
                $data->Hotel_id=$hotelid;
                $data->save();

            }
        }


        $dat=new HotelTab;
        $dat->Hotel_id=$hotelid;
        $dat->special=$request->special;
        $dat->save();

        return redirect()->back()->with('alert','added successfully!!!');
    }

    public function hotel_edit(Request $request){
        $id=(int)$request->id;
        $datas=Hotel::where('id',$id)->first();
        return view('backend.pages.hotel_edit',compact('datas'));
    }

    public function hoteledit_action(Request $request){
       /* $this->validate($request,['image'=>'required',
            'price'=>'required',
            'package'=>'required',
            'name'=>'required',
            'address'=>'required',
            'details'=>'required',
            'rating'=>'required']);
        $id=(int)$request->id;
        $datas=Hotel::find($id);
        if(Input::hasFile('image')){
            $file=input::file('image');
            $file->move(public_path().'/backend/images/hotel/',$file->getClientOriginalName());
            $datas->image=$file->getClientOriginalName();
        }
        $datas->price=$request->price;
        $datas->package=$request->package;
        $datas->hotel_name=$request->name;
        $datas->hotel_address=$request->address;
        $datas->rating=$request->rating;
        $datas->detail=$request->details;
        $datas->save();*/
        $this->validate($request,[
            'price'=>'required',
            'package'=>'required',
            'name'=>'required',
            'address'=>'required',
            'details'=>'required',
            'rating'=>'required']);
        $id=(int)$request->id;
        $datas=Hotel::find($id);
        if(Input::hasFile('image')){
            $file=input::file('image');
            $file->move(public_path().'/backend/images/hotel/',$file->getClientOriginalName());
            $datas->image=$file->getClientOriginalName();
        }
        $datas->price=$request->price;
        $datas->package=$request->package;
        $datas->hotel_name=$request->name;
        $datas->hotel_address=$request->address;
        $datas->rating=$request->rating;
        $datas->detail=$request->details;
        $datas->slug=$request->slug;
        $datas->status=$request->status;
        $datas->save();

        $hotelid=$datas['id'];
        if ($request->hasFile('scroll_image')) {

            foreach ($request->scroll_image as $file) {

                $filename = $file->getClientOriginalName();
                $file -> storeAs('public/backend/images/hotel_scroll/',$filename);
                $file -> move(public_path().'/backend/images/hotel_scroll/',$file->getClientOriginalName());
                $data = new HotelimgScroll;
                $data->image = $filename;
                $data->Hotel_id=$hotelid;
                $data->save();

            }
        }


        $dat=HotelTab::find($hotelid);
        $dat->Hotel_id=$hotelid;
        $dat->special=$request->special;
        $dat->save();

        return redirect()->back()->with('success','edited successfully!!!');
    }

    public function hotel_del(Request $request){
        $id=(int)$request->id;
        $data=Hotel::find($id);
        $data->delete();
        return redirect()->back()->with('success','deleted successfully!!!');

    }

    public function tour(){
        $tour=Tour::all();
        return view('backend.pages.tour',compact('tour'));
    }

    public function tour_action(Request $request){
        $this->validate($request,['image'=>'required',
            'price'=>'required',
            'package'=>'required',
            'place_name'=>'required',
            'details'=>'required',
            'rating'=>'required']);

        $datas=new Tour;
        if(Input::hasFile('image')){
            $file=input::file('image');
            $filename=time().'.'.$file->getClientOriginalName();
            $file->move(public_path().'/backend/images/tour',$filename);
            $datas->image=$filename;
        }

        $datas->price=$request->price;
        $datas->package=$request->package;
        $datas->place_name=$request->place_name;
        $datas->slug=$request->slug;
        $datas->rating=$request->rating;
        $datas->detail=$request->details;
        $datas->save();


        $tourid = $datas['id'];

        if ($request->hasFile('scroll_image')) {

            foreach ($request->scroll_image as $file) {

                $filename = $file->getClientOriginalName();
                $file -> storeAs('public/backend/images/tour_scroll/',$filename);
                $file -> move(public_path().'/backend/images/tour_scroll/',$file->getClientOriginalName());
                $data = new TourimgScroll;
                $data->image = $filename;
                $data->Tour_id=$tourid;
                $data->save();

            }
        }

       $dat=new TourTab;
        $dat->itenerary=$request->itenerary;
        $dat->Tour_id=$tourid;
        $dat->save();
        return redirect()->back()->with('success','added successfully!!!');

    }

    public function tour_edit(Request $request){
        $id=(int)$request->id;
        $datas=Tour::where('id',$id)->first();
        return view('backend.pages.tour_edit',compact('datas'));
    }

    public function touredit_action(Request $request){
        $this->validate($request,['price'=>'required',
            'package'=>'required',
            'place_name'=>'required',
            'details'=>'required',
            'rating'=>'required']);
        $id=(int)$request->id;
        $datas=Tour::find($id);
        if(Input::hasFile('image')){
            $file=input::file('image');
            $filename=time().'.'.$file->getClientOriginalName();
            $file->move(public_path().'/backend/images/tour',$filename);
            $datas->image=$filename;
        }

        $datas->price=$request->price;
        $datas->package=$request->package;
        $datas->place_name=$request->place_name;
        $datas->slug=$request->slug;
        $datas->rating=$request->rating;
        $datas->detail=$request->details;
        $datas->status=$request->status;
        $datas->save();

        $tourid = $datas['id'];

        if ($request->hasFile('scroll_image')) {
            foreach ($request->scroll_image as $file) {
                $filename = $file->getClientOriginalName();
                $file->storeAs('public/backend/images/tour_scroll/', $filename);
                $file->move(public_path() . '/backend/images/tour_scroll/', $file->getClientOriginalName());
                $data = new TourimgScroll;
                $data->image = $filename;
                $data->Tour_id = $tourid;
                $data->save();

            }

        }

        $dat=TourTab::find($tourid);
        $dat->itenerary=$request->itenerary;
        $dat->Tour_id=$tourid;
        $dat->save();
        return redirect()->back()->with('success', 'edited successfully!!!');
    }

    public function tour_del(Request $request){
        $id=(int)$request->id;
        $datas=Tour::find($id);
        if ($datas['id']){
            $datas->delete();
            return redirect()->back()->with('alert','deleted successfully!!!');
       }
        else{
            return redirect()->back()->with('alert','sorry file is already deleted!!!');
        }
    }

    public function trekking(){
        $trekking=Trekking::all();
        return view('backend.pages.trekking',compact('trekking'));
    }

    public function trekking_action(Request $request){
        $this->validate($request,['image'=>'required',
            'price'=>'required',
            'package'=>'required',
            'place_name'=>'required',
            'details'=>'required',
            'rating'=>'required']);
        $datas=new Trekking;
        if(Input::hasFile('image')){
            $file=input::file('image');
            $filename=time().'.'.$file->getClientOriginalName();
            $file->move(public_path().'/backend/images/trekking',$filename);
            $datas->image=$filename;
        }
        $datas->price=$request->price;
        $datas->package=$request->package;
        $datas->place_name=$request->place_name;
        $datas->rating=$request->rating;
        $datas->detail=$request->details;
        $datas->slug=$request->slug;
        $datas->save();

        $trekid=$datas['id'];
        if ($request->hasFile('scroll_image')){
            foreach ($request->scroll_image as $file){
                $filename=$file->getClientOriginalName();
                $file->storeAs('public/backend/images/trekking_scroll/',$filename);
                $file->move(public_path().'/backend/images/trekking_scroll/',$file->getClientOriginalName());
                $data=new TrekkingimgScroll;
                $data->image=$filename;
                $data->Trekking_id=$trekid;
                $data->save();
            }

        }

        $dat=new TrekkingTab;
        $dat->Trekking_id=$trekid;
        $dat->itenerary=$request->itenerary;
        $dat->save();

        return redirect()->back()->with('success','added successfully!!!');
    }

    public function trekking_edit(Request $request){
        $id=(int)$request->id;
        $datas=Trekking::where('id',$id)->first();

        return view('backend.pages.trekking_edit',compact('datas'));
    }

    public function trekkingedit_action(Request $request){
        /*$this->validate($request,[
            'price'=>'required',
            'package'=>'required',
            'place_name'=>'required',
            'details'=>'required',
            'rating'=>'required']);
        $id=(int)$request->id;
        $datas=Trekking::find($id);
        if(Input::hasFile('image')){
            $file=input::file('image');
            $file->move(public_path().'/backend/images/trekking/',$file->getClientOriginalName());
            $datas->image=$file->getClientOriginalName();
        }
        $datas->price=$request->price;
        $datas->package=$request->package;
        $datas->place_name=$request->place_name;
        $datas->rating=$request->rating;
        $datas->detail=$request->details;
        $datas->save();

        return redirect()->back()->with('success','edited successfully!!!');*/

        $this->validate($request,[
            'price'=>'required',
            'package'=>'required',
            'place_name'=>'required',
            'details'=>'required',
            'rating'=>'required']);
        $id=(int)$request->id;
        $datas=Trekking::find($id);
        if(Input::hasFile('image')){
            $file=input::file('image');
            $filename=time().'.'.$file->getClientOriginalName();
            $file->move(public_path().'/backend/images/trekking',$filename);
            $datas->image=$filename;
        }
        $datas->price=$request->price;
        $datas->package=$request->package;
        $datas->place_name=$request->place_name;
        $datas->rating=$request->rating;
        $datas->detail=$request->details;
        $datas->slug=$request->slug;
        $datas->status=$request->status;
        $datas->save();

        $trekid=$datas['id'];
        if ($request->hasFile('scroll_image')){
            foreach ($request->scroll_image as $file){
                $filename=$file->getClientOriginalName();
                $file->storeAs('public/backend/images/trekking_scroll/',$filename);
                $file->move(public_path().'/backend/images/trekking_scroll/',$file->getClientOriginalName());
                /*$data=TrekkingimgScroll::find($trekid);*/
                $data=new TrekkingimgScroll;
                $data->image=$filename;
                $data->Trekking_id=$trekid;
                $data->save();
            }

        }

        $dat=TrekkingTab::find($trekid);
        $dat->Trekking_id=$trekid;
        $dat->itenerary=$request->itenerary;
        $dat->save();

        return redirect()->back()->with('success','edited successfully!!!');
    }

    public function trekking_del(Request $request){
        $id=(int)$request->id;
        $data=Trekking::find($id);
        if ($data['id']){
            $data->delete();
            return redirect()->back()->with('alert','deleted successfully!!!');
        }
        else{
            return redirect()->back()->with('alert','sorry file is already deleted!!!');
        }
    }

    public function explore(){
        $explore=ExploreNepal::all();
        return view('backend.pages.explore',compact('explore'));
    }

    public function exploreedit_action(Request $request){
        $this->validate($request,['image'=>'required',
            'details'=>'required']);
        $id=(int)$request->id;
        $data=ExploreNepal::find($id);
        if(Input::hasFile('image')){
            $file=input::file('image');
            $file->move(public_path().'/backend/images/explore/',$file->getClientOriginalName());
            $data->image=$file->getClientOriginalName();
        }
        $data->detail=$request->details;
        $data->save();

        return redirect()->back()->with('success','editted successfully!!!');
    }

    public function explore_edit(Request $request){

        $id=(int)$request->id;
        $data=ExploreNepal::find($id);
        return view('backend.pages.explore_edit',compact('data'));
    }

    public function ticketing(){
        $ticketing=Ticketing::all();
        return view('backend.pages.ticketing',compact('ticketing'));
    }

    public function ticketingedit_action(Request $request){
        $id=(int)$request->id;
        $datas=Ticketing::find($id);
        if(Input::hasFile('main_image')){
            $file=input::file('main_image');
            $file->move(public_path().'/backend/images/ticketing/',$file->getClientOriginalName());
            $datas->main_image=$file->getClientOriginalName();
        }
        if(Input::hasFile('international_image')){
            $file=input::file('international_image');
            $file->move(public_path().'/backend/images/ticketing/',$file->getClientOriginalName());
            $datas->international_image=$file->getClientOriginalName();
        }
        $datas->international_detail=$request->international_detail;
        if(Input::hasFile('domestic_image')){
            $file=input::file('domestic_image');
            $file->move(public_path().'/backend/images/ticketing/',$file->getClientOriginalName());
            $datas->domestic_image=$file->getClientOriginalName();
        }
        $datas->domestic_detail=$request->domestic_detail;
        $datas->save();
        return redirect()->back()->with('success','edited successfully!!!');
    }

    public function ticketing_edit(Request $request){
        $id=(int)$request->id;
        $datas=Ticketing::find($id);
        return view('backend.pages.ticketing_edit',compact('datas'));
    }

    public function ticket_book(Request $request){
        $datas=new TicketBook;
        $datas->first_name=$request->first_name;
        $datas->last_name=$request->last_name;
        $datas->email=$request->email;
        $datas->phone=$request->phone;
        $datas->citizenship=$request->citizenship;
        $datas->flight_from=$request->from;
        $datas->flight_to=$request->to;
        $datas->save();
        return redirect()->back()->with('success','Booked Successfully!!!');
    }

    public function remittance(){
        $remittance=Remittance::all();
        return view('backend.pages.remittance',compact('remittance'));
    }

    public function remittance_edit(Request $request){
        $id=(int)$request->id;
        $datas=Remittance::find($id);
        return view('backend.pages.remittance_edit',compact('datas'));
    }

    public function remittanceedit_action(Request $request){
        $id=(int)$request->id;
        $datas=Remittance::find($id);
        if(Input::hasFile('image')){
            $file=input::file('image');
            $filename=time().'.'.$file->getClientOriginalName();
            $file->move(public_path().'/backend/images/remittance',$filename);
            $datas->image=$filename;
        }
        $datas->detail=$request->details;
        $datas->save();

        return redirect()->back()->with('success','editted successfully!!!');
    }

    public function remittance_company(){
        $datas=RemittanceCompany::all();
        return view('backend.pages.remittance_company',compact('datas'));
    }

    public function remittancecomp_action(Request $request){
        $datas=new RemittanceCompany;
        if(Input::hasFile('image')){
            $file=input::file('image');
            $filename=time().'.'.$file->getClientOriginalName();
            $file->move(public_path().'/backend/images/remittance',$filename);
            $datas->image=$filename;
        }
        $datas->save();
        return redirect()->back()->with('success','added successfully!!!');
    }

    public function remittance_del(Request $request){
        $id=(int)$request->id;
        $data=RemittanceCompany::find($id);
        if($data['id']){
            $data->delete();
            return redirect()->back()->with('alert','deleted successfully!!!');
        }
        else{
            return redirect()->back()->with('alert','sorry file is already deleted!!!');
        }
    }

    public function about(){
        $datas=About::all();
        return view('backend.pages.about',compact('datas'));
    }

    public function about_edit(Request $request){
        $id=(int)$request->id;
        $datas=About::find($id);
        return view('backend.pages.about_edit',compact('datas'));
    }

    public function aboutedit_action(Request $request){
        $id=(int)$request->id;
        $datas=About::find($id);
        if(Input::hasFile('image')){
            $file=input::file('image');
            $filename=time().'.'.$file->getClientOriginalName();
            $file->move(public_path().'/backend/images/about',$filename);
            $datas->image=$filename;
        }
        $datas->detail=$request->details;
        $datas->objectives=$request->objectives;
        $datas->vision=$request->vision;
        $datas->goals=$request->goals;
        $datas->save();
        return redirect()->back()->with('success','edited successfully!!!');
    }

    public function associate(){
        $datas=Associate::all();
        return view('backend.pages.associates',compact('datas'));
    }

    public function associatesedit_action(Request $request){
        $id=(int)$request->id;
        $datas=Associate::find($id);
        if(Input::hasFile('image')){
            $file=input::file('image');
            $filename=time().'.'.$file->getClientOriginalName();
            $file->move(public_path().'/backend/images/about/associates',$filename);
            $datas->image=$filename;
        }
        $datas->name=$request->name;
        $datas->address=$request->address;
        $datas->phone=$request->phone;
        $datas->email=$request->email;
        $datas->site=$request->site;
        $datas->save();
        return redirect()->back()->with('success','edited successfully!!!');
    }

    public function associates_edit(Request $request){
        $id=(int)$request->id;
        $datas=Associate::find($id);
        return view('backend.pages.associates_edit',compact('datas'));
    }

    public function associate_del(Request $request){
        $id=(int)$request->id;
        $data=Associate::find($id);
        if($data['id']){
            $data->delete();
            return redirect()->back()->with('alert','deleted successfully!!!');
        }
        else{
            return redirect()->back()->with('alert','sorry file is already deleted!!!');
        }
    }

    public function progress_bar(){
        $datas=ProgressBar::all();
        return view('backend.pages.progress_bar',compact('datas'));
    }

    public function progress_edit(Request $request){
        $id=(int)$request->id;
        $datas=ProgressBar::find($id);
        return view('backend.pages.progress_edit',compact('datas'));
    }

    public function progressedit_action(Request $request){
        $id=(int)$request->id;
        $datas=ProgressBar::find($id);
        $datas->title=$request->title;
        $datas->percentage=$request->percentage;
        $datas->save();
        return redirect()->back()->with('success','edited successfully!!!');
    }

    public function tourimg_scroll(){
        $datas=TourimgScroll::all();
        return view('backend.pages.tourimg_scroll',compact('datas'));
    }

    public function tourscroll_action(Request $request){
        $datas=new TourimgScroll;
        if(Input::hasFile('image')){
            $file=input::file('image');
            $filename=time().'.'.$file->getClientOriginalName();
            $file->move(public_path().'/backend/images/tour_scroll',$filename);
            $datas->image=$filename;
        }
        $datas->save();
        return redirect()->back()->with('success','added successfully!!!');
    }

    public function tourscroll_del(Request $request){
        $id=(int)$request->id;
        $data=TourimgScroll::find($id);
        $data->delete();
        return redirect()->back()->with('success','deleted successfully!!!');
    }

    public function tour_tabs(){
        $datas=TourTab::all();
        return view('backend.pages.tour_tabs',compact('datas'));
    }

    public function tourtab_edit(Request $request){
        $id=(int)$request->id;
        $datas=TourTab::find($id);
        return view('backend.pages.tourtab_edit',compact('datas'));
    }

    public function tourtabedit_action(Request $request){
       /* $id=(int)$request->id;
        $datas=TourTab::find($id);
        $datas->itenerary=$request->itenerary;
        $datas->save();
        return redirect()->back()->with('success','edited successfully!!!');*/

        $this->validate($request,['image'=>'required',
            'price'=>'required',
            'package'=>'required',
            'place_name'=>'required',
            'details'=>'required',
            'rating'=>'required']);

        $datas=new Tour;
        if(Input::hasFile('image')){
            $file=input::file('image');
            $filename=time().'.'.$file->getClientOriginalName();
            $file->move(public_path().'/backend/images/tour',$filename);
            $datas->image=$filename;
        }

        $datas->price=$request->price;
        $datas->package=$request->package;
        $datas->place_name=$request->place_name;
        $datas->slug=$request->slug;
        $datas->rating=$request->rating;
        $datas->detail=$request->details;
        $datas->save();


        $tourid = $datas['id'];

        if ($request->hasFile('scroll_image')) {

            foreach ($request->scroll_image as $file) {

                $filename = $file->getClientOriginalName();
                $file -> storeAs('public/backend/images/tour_scroll/',$filename);
                $file -> move(public_path().'/backend/images/tour_scroll/',$file->getClientOriginalName());
                $data = new TourimgScroll;
                $data->image = $filename;
                $data->Tour_id=$tourid;
                $data->save();

            }
        }

        $dat=new TourTab;
        $dat->itenerary=$request->itenerary;
        $dat->Tour_id=$tourid;
        $dat->save();
        return redirect()->back()->with('success','edited successfully!!!');
    }

    /*.............hotel-details..................*/
    public function hotelimg_scroll(){
        $datas=HotelimgScroll::all();
        return view('backend.pages.hotelimg_scroll',compact('datas'));
    }

    public function hotelscroll_action(Request $request){
        $datas=new HotelimgScroll;
        if(Input::hasFile('image')){
            $file=input::file('image');
            $filename=time().'.'.$file->getClientOriginalName();
            $file->move(public_path().'/backend/images/hotel_scroll',$filename);
            $datas->image=$filename;
            $datas->save();
            return redirect()->back()->with('success','added successfully!!!');
        }
    }

    public function hotelscroll_del(Request $request){
        $id=(int)$request->id;
        $data=HotelimgScroll::find($id);
        $data->delete();
        return redirect()->back()->with('success','deleted successfully!!!');
    }

    public function hotel_tabs(){
        $datas=HotelTab::all();
        return view('backend.pages.hotel_tabs',compact('datas'));
    }

    public function hoteltab_edit(Request $request){
        $id=(int)$request->id;
        $datas=HotelTab::find($id);
        return view('backend.pages.hoteltab_edit',compact('datas'));
    }

    public function hoteltabedit_action(Request $request){
        $id=(int)$request->id;
        $datas=HotelTab::find($id);
        $datas->special=$request->special;
        $datas->save();
        return redirect()->back()->with('success','edited successfully!!!');
    }

    /*..............trekking-details...................*/
    public function trekkingimg_scroll(){
        $datas=TrekkingimgScroll::all();
        return view('backend.pages.trekkingimg_scroll',compact('datas'));
    }

    public function trekkingscroll_action(Request $request){
        $this->validate($request,['image'=>'required']);
        $datas=new TrekkingimgScroll;
        if(Input::hasFile('image')){
            $file=input::file('image');
            $filename=time().'.'.$file->getClientOriginalName();
            $file->move(public_path().'/backend/images/trekking_scroll',$filename);
            $datas->image=$filename;
            $datas->save();
            return redirect()->back()->with('success','added successfully!!!');
        }
    }

    public function trekkingscroll_del(Request $request){
        $id=(int)$request->id;
        $data=TrekkingimgScroll::find($id);
        $data->delete();
        return redirect()->back()->with('success','deleted successfully!!!');
    }


    public function trekking_tabs(){
        $datas=TrekkingTab::all();
        return view('backend.pages.trekking_tabs',compact('datas'));
    }

    public function trekkingtab_edit(Request $request){
        $id=(int)$request->id;
        $datas=TrekkingTab::find($id);
        return view('backend.pages.trekkingtab_edit',compact('datas'));
    }

    public function trekkingtabedit_action(Request $request){
        $id=(int)$request->id;
        $datas=TrekkingTab::find($id);
        $datas->itenerary=$request->itenerary;
        $datas->save();
        return redirect()->back()->with('success','edited successfully!!!');
    }

    /*.............logo.................................*/
    public function logo(){
        $datas=logo::all();
        return view('backend.pages.logo',compact('datas'));
    }

    public function logo_action(Request $request){
        $data=new logo;
        if(Input::hasFile('image')){
            $file=input::file('image');
            $filename=time().'.'.$file->getClientOriginalName();
            $file->move(public_path().'/backend/images/logo',$filename);
            $data->image=$filename;
        }
        $data->save();
        return redirect()->back()->with('success','added successfully!!!');
    }

    public function logo_del(Request $request){
        $id=(int)$request->id;
        $data=logo::find($id);
        $data->delete();
        return redirect()->back()->with('success','deleted successfully!!!');
    }

    public function messagemd(){
        $datas=Messagemd::all();
        return view('backend.pages.messagemd',compact('datas'));
    }

    public function messagemd_edit(Request $request){
        $id=(int)$request->id;
        $datas=Messagemd::find($id);
        return view('backend.pages.messagemd_edit',compact('datas'));
    }

    public function messagemdedit_action(Request $request){
        $id=(int)$request->id;
        $datas=Messagemd::find($id);
        if(Input::hasFile('image')){
            $file=input::file('image');
            $filename=time().'.'.$file->getClientOriginalName();
            $file->move(public_path().'/backend/images/about/md/',$filename);
            $datas->image=$filename;
        }
        $datas->detail=$request->details;
        $datas->save();
        return redirect()->back()->with('success','edited successfully!!!');
}

public function tour_booking(Request $request){
        $datas=new TourBooking;
        $datas->first_name=$request->first_name;
        $datas->last_name=$request->last_name;
        $datas->phone=$request->phone;
        $datas->email=$request->email;
        $datas->booking_date=$request->booking_date;
        $datas->adults=$request->adults;
        $datas->children=$request->children;
        $datas->save();

        $data=array(
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'email'=>$request->email
        );

Mail::send('backend.pages.tour_booking',$data,function($message) use ($data){
        $message->from($data['email']);
        $message->to('tamangtshering5@gmail.com');
        $message->subject($data['first_name']);
});
return redirect()->back()->with('success','sent successfully!!!');
}

public function hotel_booking(Request $request){
        $datas=new HotelBooking;
    $datas->first_name=$request->first_name;
    $datas->last_name=$request->last_name;
    $datas->phone=$request->phone;
    $datas->email=$request->email;
    $datas->booking_date=$request->booking_date;
    $datas->adults=$request->adults;
    $datas->children=$request->children;
    $datas->save();

    $data=array(
        'first_name'=>$request->first_name,
        'last_name'=>$request->last_name,
        'email'=>$request->email
    );

    Mail::send('backend.pages.hotel_booking',$data,function($message) use ($data){
        $message->from($data['email']);
        $message->to('tamangtshering5@gmail.com');
        $message->subject($data['first_name']);
    });
    return redirect()->back()->with('success','sent successfully!!!');

}

public function contact_action(Request $request){
    $datas=new Contact;
    $datas->name=$request->name;
    $datas->email=$request->email;
    $datas->subject=$request->subject;
    $datas->message=$request->message;
    $datas->save();

    $data=array(
        'name'=>$request->name,
        'email'=>$request->email,
        'subject'=>$request->subject,
        'bodymessage'=>$request->message
    );

    Mail::send('backend.pages.contact_mail',$data,function($message) use ($data){
        $message->from($data['email']);
        $message->to('tamangtshering5@gmail.com');
        $message->subject($data['subject']);
    });
    return redirect()->back()->with('success','sent successfully!!!');
}

/*..................dynamic-contact......................*/
    public function dynamic_contact(){
        $datas=DynamicContact::all();
        return view('backend.pages.dynamic_contact',compact('datas'));
    }

    public function contact_edit(Request $request){
        $id=(int)$request->id;
        $datas=DynamicContact::find($id);
        return view('backend.pages.contact_edit',compact('datas'));
    }

    public function contactedit_action(Request $request){
        $id=(int)$request->id;
        $datas=DynamicContact::find($id);
        $datas->address=$request->address;
        $datas->phone=$request->phone;
        $datas->email=$request->email;
        $datas->save();
        return redirect()->back()->with('success','edited successfully!!!');
    }

    /*................catagory.............................*/
    public function catagory(){
        $datas=Catogary::all();
        $sub_cata=SubCatagory::all();
        return view ('backend.pages.catagory',compact('datas','sub_cata'));
    }

    public function cata_action(Request $request){
        $data=new Catogary;
        $data->catogary=$request->catagory;
        $data->save();
        return redirect()->back()->with('success','added successfully!!!');

    }

    public function cata_del(Request $request){
        $id=(int)$request->id;
        $data=Catogary::find($id);
        $data->delete();
        return redirect()->back()->with('success','deleted successfully!!!');

    }

    public function subcata_action(Request $request){
        $data=new SubCatagory;
        $data->Catogary_id=$request->cata_id;
        $data->sub_catagory=$request->sub_catagory;
        $data->save();
        return redirect()->back()->with('success','added successfully!!!');
    }

    public function subcata_del(Request $request){
        $id=(int)$request->id;
        $data=SubCatagory::find($id);
        $data->delete();
        return redirect()->back()->with('success','deleted successfully!!!');
    }

    public function cata_find(Request $request){

        $id = (int)$request->id;
        $datas = SubCatagory::where('Catogary_id',$id)->get();
        return response()->json($datas);


    }

    public function book_action(Request $request){
        $cata=(int)$request->cata;
        $sub_cata=(int)$request->sub_cata;
        $service=Catogary::find($cata);
        $sub_service=SubCatagory::find($sub_cata);
        $datas=new Booking;
        $datas->first_name=$request->first_name;
        $datas->last_name=$request->last_name;
        $datas->email=$request->last_name;
        $datas->phone=$request->phone;
        $datas->country=$request->country;
        $datas->booking_date=$request->date;
        $datas->service=$service->catogary;
        $datas->sub_service=$sub_service->sub_catagory;
        $datas->sector=$request->sector_name;
        $datas->people=$request->people;
        $datas->save();
        /*return redirect()->back()->with('success','sent successfully!!!');*/

       /* $data=array(
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'email'=>$request->email
        );

        Mail::send('backend.pages.booking_notify',$data,function($message) use ($data){
            $message->from($data['email']);
            $message->to('tamangtshering5@gmail.com');
            $message->subject($data['first_name']);
        });*/

        return redirect('/payment');


    }

/*..................seo........................*/
    public function seo(){
        $seo=Seo::all();
        return view('backend.pages.seo',compact('seo'));
    }

    public function seo_edit(Request $request){
        $id=(int)$request->id;
        $datas=Seo::find($id);
        return view('backend.pages.seo_edit',compact('datas'));
    }

    public function seoedit_action(Request $request){
        $id=(int)$request->id;
        $datas=Seo::find($id);
        $datas->title=$request->title;
        $datas->keywords=$request->keywords;
        $datas->description=$request->description;
        $datas->author=$request->author;
        $datas->save();
        return redirect()->back()->with('alert','edited successfully!!!');
    }

    /*.....................settings...........................*/
    public function settings(){
        $datas=SocialLinks::all();
        return view('backend.pages.settings',compact('datas'));
    }

    public function settings_edit(Request $request){
        $id=(int)$request->id;
        $datas=SocialLinks::find($id);
        return view('backend.pages.settings_edit',compact('datas'));
    }

    public function settingsedit_action(Request $request){
        $id=(int)$request->id;
        $datas=SocialLinks::find($id);
        $datas->facebook=$request->facebook;
        $datas->twitter=$request->twitter;
        $datas->instagram=$request->instagram;
        $datas->linkedin=$request->linkedin;
        $datas->google=$request->google;
        $datas->save();
        return redirect()->back()->with('alert','edited successfully!!!');
    }
}
