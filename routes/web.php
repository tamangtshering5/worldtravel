<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['namespace'=>'frontend'],function(){
    Route::get('/','pagesController@index')->name('index');
    Route::get('/about','pagesController@about')->name('about');
    Route::get('/hotel','pagesController@hotel')->name('hotel');
    Route::get('/tour','pagesController@tour')->name('tour');
    Route::get('/trekking','pagesController@trekking')->name('trekking');
    Route::get('/explore','pagesController@explore')->name('explore');
    Route::get('/ticketing','pagesController@ticketing')->name('ticketing');
    Route::get('/remittance','pagesController@remittance')->name('remittance');
    Route::get('/contact','pagesController@contact')->name('contact');
    Route::get('/booking','pagesController@booking')->name('booking');
    Route::get('/hotel_details','pagesController@hotel_details')->name('hotel_details');
    Route::get('Tour-details','pagesController@tour_details')->name('tour_details');
    Route::get('/trekking_details','pagesController@trekking_details')->name('trekking_details');
    Route::get('/mdmessage','pagesController@mdmessage')->name('mdmessage');
    Route::get('/payment','pagesController@payment')->name('payment');

});




Route::group(['namespace'=>'backend'],function() {
    Route::get('/homepage','pagesController@homepage')->name('homepage');
    Route::post('/logout','adminController@logout')->name('logout');
    Route::get('/@dashboard@','adminController@login')->name('login');
    Route::post('login','adminController@login_action')->name('login_action');
    Route::get('/slider','pagesController@slider')->name('slider');
    Route::post('/slider','pagesController@slider_action')->name('slider_action');
    Route::get('slider_edit','pagesController@slider_edit')->name('slider_edit');
    Route::post('slider_edit','pagesController@slideredit_action')->name('slideredit_action');
    Route::post('/slider_del','pagesController@slider_del')->name('slider_del');
    Route::get('/hotels','pagesController@hotel')->name('backend_hotel');
    Route::post('/hotels','pagesController@hotel_action')->name('hotel_action');
    Route::get('/hotel_edit','pagesController@hotel_edit')->name('hotel_edit');
    Route::post('/hotel_edit','pagesController@hoteledit_action')->name('hoteledit_action');
    Route::post('/hotel_del','pagesController@hotel_del')->name('hotel_del');
    Route::get('/tours','pagesController@tour')->name('backend_tour');
    Route::post('/tours','pagesController@tour_action')->name('tour_action');
    Route::get('/tour_edit','pagesController@tour_edit')->name('tour_edit');
    Route::post('/tour_edit','pagesController@touredit_action')->name('touredit_action');
    Route::post('/tour_del','pagesController@tour_del')->name('tour_del');
    Route::get('/trekkings','pagesController@trekking')->name('backend_trekking');
    Route::post('/trekkings','pagesController@trekking_action')->name('trekking_action');
    Route::get('/trekking_edit','pagesController@trekking_edit')->name('trekking_edit');
    Route::post('/trekking_edit','pagesController@trekkingedit_action')->name('trekkingedit_action');
    Route::post('/trekking_del','pagesController@trekking_del')->name('trekking_del');
    Route::get('/explore_nepal','pagesController@explore')->name('explore_nepal');
    Route::get('/explore_edit','pagesController@explore_edit')->name('explore_edit');
    Route::post('/explore_edit','pagesController@exploreedit_action')->name('exploreedit_action');

    Route::get('mainpage','pagesController@mainpage')->name('mainpage');

    /*............ticketing.......................*/
    Route::get('/ticketings','pagesController@ticketing')->name('backend_ticketing');
    Route::post('/ticketings','pagesController@ticketing_action')->name('ticketing_action');
    Route::get('/ticketing_edit','pagesController@ticketing_edit')->name('ticketing_edit');
    Route::post('/ticketing_edit','pagesController@ticketingedit_action')->name('ticketingedit_action');
    Route::post('/ticket_book','pagesController@ticket_book')->name('ticket_book');

/*....................remittance..........................*/
    Route::get('/remittances','pagesController@remittance')->name('backend_remittance');
    Route::get('/remittance_edit','pagesController@remittance_edit')->name('remittance_edit');
    Route::post('/remittance_edit','pagesController@remittanceedit_action')->name('remittanceedit_action');
    Route::get('/remittance_company','pagesController@remittance_company')->name('remittance_company');
    Route::post('/remittance_company','pagesController@remittancecomp_action')->name('remittancecomp_action');
    Route::post('/remittane_del','pagesController@remittance_del')->name('remittance_del');

    /*.................about..............................*/
    Route::get('/backend_about','pagesController@about')->name('backend_about');
    Route::get('/about_edit','pagesController@about_edit')->name('about_edit');
    Route::post('/about_edit','pagesController@aboutedit_action')->name('aboutedit_action');

    /*..................associates company.....................*/
    Route::get('/associates_company','pagesController@associate')->name('associates_company');
    Route::get('/associates_edit','pagesController@associates_edit')->name('associates_edit');
    Route::post('/associates_edit','pagesController@associatesedit_action')->name('associatesedit_action');



    Route::get('/progress_bar','pagesController@progress_bar')->name('progress_bar');
    Route::get('/progress_edit','pagesController@progress_edit')->name('progress_edit');
    Route::post('/progress_edit','pagesController@progressedit_action')->name('progressedit_action');

    /*...............tour details.........................*/
    Route::get('/image_scroll','pagesController@tourimg_scroll')->name('tourimg_scroll');
    Route::post('/image_scroll','pagesController@tourscroll_action')->name('tourscroll_action');
    Route::post('/tourscroll_del','pagesController@tourscroll_del')->name('tourscroll_del');
    Route::get('/tour_tabs','pagesController@tour_tabs')->name('tour_tabs');
    Route::get('/tourtab_edit','pagesController@tourtab_edit')->name('tourtab_edit');
    Route::post('/tourtab_edit','pagesController@tourtabedit_action')->name('tourtabedit_action');

    /*..................hotel detail....................*/
    Route::get('/hotelimg_scroll','pagesController@hotelimg_scroll')->name('hotelimg_scroll');
    Route::post('/hotelimg_scroll','pagesController@hotelscroll_action')->name('hotelscroll_action');
    Route::post('/hotelscroll_del','pagesController@hotelscroll_del')->name('hotelscroll_del');
    Route::get('/hotel_tabs','pagesController@hotel_tabs')->name('hotel_tabs');
    Route::get('/hoteltab_edit','pagesController@hoteltab_edit')->name('hoteltab_edit');
    Route::post('/hoteltab_edit','pagesController@hoteltabedit_action')->name('hoteltabedit_action');

    /*....................trekking details.....................*/
    Route::get('/trekkingimg_scroll','pagesController@trekkingimg_scroll')->name('trekkingimg_scroll');
    Route::post('/trekkingimg_scroll','pagesController@trekkingscroll_action')->name('trekkingscroll_action');
    Route::post('/trekkingscroll_del','pagesController@trekkingscroll_del')->name('trekkingscroll_del');
    Route::get('/trekking_tabs','pagesController@trekking_tabs')->name('trekking_tabs');
    Route::get('/trekkingtab_edit','pagesController@trekkingtab_edit')->name('trekkingtab_edit');
    Route::post('/trekkingtab_edit','pagesController@trekkingtabedit_action')->name('trekkingtabedit_action');


    /*..................logo...........................*/
    Route::get('/logo','pagesController@logo')->name('logo');
    Route::post('/logo','pagesController@logo_action')->name('logo_action');
    Route::post('/logo_del','pagesController@logo_del')->name('logo_del');

    /*..............message from MD....................*/
    Route::get('/messagemd','pagesController@messagemd')->name('messagemd');
    Route::get('/messagemd_edit','pagesController@messagemd_edit')->name('messagemd_edit');
    Route::post('/messagemd_edit','pagesController@messagemdedit_action')->name('messagemdedit_action');

    /*...........tour-booking............................*/
    Route::post('/tour_booking','pagesController@tour_booking')->name('tour_booking');

    /*...........hotel-booking...........................*/
    Route::post('/hotel_booking','pagesController@hotel_booking')->name('hotel_booking');

    /*.............contact............................*/
    Route::post('contact_action','pagesController@contact_action')->name('contact_action');

    /*............backend-contact.......................*/
    Route::get('/dynamic_contact','pagesController@dynamic_contact')->name('dynamic_contact');
    Route::get('/contact_edit','pagesController@contact_edit')->name('contact_edit');
    Route::post('/contactedit_action','pagesController@contactedit_action')->name('contactedit_action');

    /*................catagory.............................*/
    Route::get('/catagory','pagesController@catagory')->name('catagory');
    Route::post('/catagory','pagesController@cata_action')->name('cata_action');
    Route::post('/cata_del','pagesController@cata_del')->name('cata_del');
    Route::post('/sub_cata','pagesController@subcata_action')->name('subcata_action');
    Route::post('/subcata_del','pagesController@subcata_del')->name('subcata_del');

    Route::get('/cata_find','pagesController@cata_find')->name('cata_find');

    /*..............booking.........................*/
    Route::post('/book','pagesController@book_action')->name('booking_action');

    /*....................seo.................................*/
    Route::get('/seo','pagesController@seo')->name('seo');
    Route::get('/seo-edit','pagesController@seo_edit')->name('seo_edit');
    Route::post('/seo-edit','pagesController@seoedit_action')->name('seoedit_action');

    /*..................settings........................*/
    Route::get('/settings','pagesController@settings')->name('settings');
    Route::get('/settings_edit','pagesController@settings_edit')->name('settings_edit');
    Route::post('/settings_edit','pagesController@settingsedit_action')->name('settingsedit_action');


});




Route::group(['namespace'=>'backend','middleware'=>'auth'],function() {
    Route::get('register','adminController@register')->name('register');
    Route::post('register','adminController@register_action')->name('register_action');
});


Route::group(['namespace'=>'backend','middleware'=>'auth','prefix'=>'dashboard'],function() {
    Route::get('/','adminController@dashboard')->name('dashboard');
    Route::get('profile','adminController@profile')->name('profile');
    Route::get('edit_userprofile','adminController@edit_userprofile')->name('edit_userprofile');
    Route::post('edit_userprofile','adminController@userprofile_action')->name('userprofile_action');
    Route::get('edit_adminprofile','adminController@edit_adminprofile')->name('edit_adminprofile');
    Route::post('edit_adminprofile','adminController@adminprofile_action')->name('adminprofile_action');
    Route::post('profile_del','adminController@profile_del')->name('profile_del');
    Route::post('password','adminController@password_action')->name('password_action');

    /*................tour-booking notification...................*/
    Route::post('tourbooking-message', 'adminController@bookingMessages');
    Route::get('/tourbooking_message','adminController@viewbookingMessages')->name('tourbooking-message');
    Route::get('tourbooking-view','adminController@tourbooking_view')->name('tourbooking-view');
    Route::post('/tourbooking-delete','adminController@tourbooking_delete')->name('tourbooking-delete');

    /*.............booking notification...............*/
    Route::post('allbooking-message', 'adminController@bookingMessages');
    Route::get('/allbooking_message','adminController@viewbookingMessages')->name('allbooking-message');
    Route::get('allbooking-view','adminController@allbooking_view')->name('allbooking-view');
    Route::post('/allbooking-delete','adminController@allbooking_delete')->name('allbooking-delete');

    /*.....................hotel-booking notification....................*/
    Route::post('hotelbooking-message', 'adminController@hotelbookingMessages');
    Route::get('/hotelbooking_message','adminController@viewhotelbookingMessages')->name('hotelbooking-message');
    Route::get('hotelbooking-view','adminController@hotelbooking_view')->name('hotelbooking-view');
    Route::post('/hotelbooking-delete','adminController@hotelbooking_delete')->name('hotelbooking-delete');

    /*......................contact-notification........................*/
    Route::post('contact-message', 'adminController@contactMessages');
    Route::get('/contact_message','adminController@viewcontactMessages')->name('contact-message');
    Route::get('contact-view','adminController@contact_view')->name('contact-view');
    Route::post('/contact-delete','adminController@contact_delete')->name('contact-delete');



});
