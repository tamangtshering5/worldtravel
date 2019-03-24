<?php

namespace App\Http\Controllers\frontend;
use App\About;
use App\Associate;
use App\Catogary;
use App\DynamicContact;
use App\ExploreNepal;
use App\Hotel;
use App\HotelimgScroll;
use App\HotelTab;
use App\Http\Controllers\Controller;
use App\Messagemd;
use App\ProgressBar;
use App\Remittance;
use App\RemittanceCompany;
use App\Seo;
use App\Slider;
use App\SocialLinks;
use App\Ticketing;
use App\Tour;
use App\TourimgScroll;
use App\TourTab;
use App\Trekking;
use App\logo;
use App\TrekkingimgScroll;
use App\TrekkingTab;
use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function index(){
        $slider=Slider::all();
        $hotel=Hotel::all();
        $logo=logo::all();
        $tour=Tour::all();
        $trekking=Trekking::take(4)->get();
        $contact=DynamicContact::all();
        $associates=Associate::all();
        $seo=Seo::all();
        $social=SocialLinks::all();
        return view('frontend.index',compact('slider','hotel','logo','associates','tour','trekking','contact','seo','social'));
    }

    public function about(){
        $about=About::all();
        $associate=Associate::all();
        $progress=ProgressBar::all();
        $logo=logo::all();
        $associates=Associate::all();
        $contact=DynamicContact::all();
        $seo=Seo::all();
        $social=SocialLinks::all();
        return view('frontend.about',compact('about','associate','progress','logo','associates','contact','seo','social'));
    }

    public function hotel(){
       /* $hotel=Hotel::all();*/
       $hotel=Hotel::paginate(4);
        $logo=logo::all();
        $associates=Associate::all();
        $contact=DynamicContact::all();
        $seo=Seo::all();
        $social=SocialLinks::all();
        return view('frontend.hotels',compact('hotel','logo','associates','contact','seo','social'));
    }

    public function tour(){
       /* $tour=Tour::all();*/
        $tour=Tour::paginate(8);
        $logo=logo::all();
        $associates=Associate::all();
        $contact=DynamicContact::all();
        $seo=Seo::all();
        $social=SocialLinks::all();
        return view('frontend.tours',compact('tour','logo','associates','contact','seo','social'));
    }

    public function trekking(){
        $trekking=Trekking::all();
        $logo=logo::all();
        $associates=Associate::all();
        $contact=DynamicContact::all();
        $seo=Seo::all();
        $social=SocialLinks::all();
        return view('frontend.trekking',compact('trekking','logo','associates','contact','seo','social'));
    }

    public function explore(){
        $explore=ExploreNepal::all();
        $logo=logo::all();
        $associates=Associate::all();
        $contact=DynamicContact::all();
        $seo=Seo::all();
        $social=SocialLinks::all();
        return view('frontend.explore',compact('explore','logo','associates','contact','seo','social'));
    }

    public function ticketing(){
        $ticketing=Ticketing::all();
        $logo=logo::all();
        $associates=Associate::all();
        $contact=DynamicContact::all();
        $seo=Seo::all();
        $social=SocialLinks::all();
        return view('frontend.ticketing',compact('ticketing','logo','associates','contact','seo','social'));
    }

    public function remittance(){
        $remittance=Remittance::all();
        $remit=RemittanceCompany::all();
        $logo=logo::all();
        $associates=Associate::all();
        $contact=DynamicContact::all();
        $seo=Seo::all();
        $social=SocialLinks::all();
        return view('frontend.remittance',compact('remittance','remit','logo','associates','contact','seo','social'));
    }

    public function contact(){
        $logo=logo::all();
        $associates=Associate::all();
        $contact=DynamicContact::all();
        $seo=Seo::all();
        $social=SocialLinks::all();
        return view('frontend.contact',compact('logo','associates','contact','seo','social'));
    }

    public function booking(Request $request){
        $logo=logo::all();
        $associates=Associate::all();
        $first_name=$request->first_name;
        $last_name=$request->last_name;
        $email=$request->email;
        $phone=$request->phone;
        $booking_date=$request->date;
        $country=$request->country;
        $people=$request->people;
        $catagory=Catogary::all();
        $contact=DynamicContact::all();
        $seo=Seo::all();
        $social=SocialLinks::all();
        return view('frontend.booking',compact('logo','associates','contact','first_name','last_name','email','phone','booking_date','country','catagory','people','seo','social'));

    }

    public function hotel_details(Request $request){
        $logo=logo::all();
        $datas=HotelimgScroll::all();
        $associates=Associate::all();
        $contact=DynamicContact::all();
        $hotelall=Hotel::all();
        $hotel=Hotel::where('slug',$request->slug)->first();
        $seo=Seo::all();
        $social=SocialLinks::all();
        return view('frontend.hotel-details',compact('datas','logo','associates','contact','hotel','hotelall','seo','social'));
    }

    public function tour_details(Request $request){


        $logo=logo::all();
        $datas=TourimgScroll::all();
        $associates=Associate::all();
        $contact=DynamicContact::all();
        $tour=Tour::all();
        $seo=Seo::all();
        $social=SocialLinks::all();
        $slugs = Tour::where('slug',$request->slug)->first();

        return view('frontend.tour-details',compact('datas','logo','associates','contact','tour','slugs','seo','social'));
    }

    public function trekking_details(Request $request){
        $logo=logo::all();
        $associates=Associate::all();
        $contact=DynamicContact::all();
        $trekkingall=Trekking::all();
        $trekking=Trekking::where('slug',$request->slug)->first();
        $tour=Tour::all();
        $datas=TrekkingimgScroll::all();
        $tab=TrekkingTab::all();
        $seo=Seo::all();
        $social=SocialLinks::all();
        return view('frontend.trekking-details',compact('logo','associates','contact','trekking','tour','datas','trekkingall','tab','seo','social'));
    }

    public function mdmessage(){
        $logo=logo::all();
        $associates=Associate::all();
        $message=Messagemd::all();
        $contact=DynamicContact::all();
        $seo=Seo::all();
        $social=SocialLinks::all();
        return view('frontend.mdmessage',compact('logo','associates','message','contact','seo','social'));
    }

    public function payment(){
        $logo=logo::all();
        $contact=DynamicContact::all();
        $associates=Associate::all();
        $seo=Seo::all();
        $social=SocialLinks::all();
        return view('frontend.payment',compact('logo','contact','associates','seo','social'));
    }


}
