<?php
Route::get('/search', function () {
    return view('healthflex.search');
});

Route::get('/about-us', function () {
    return view('healthflex.aboutus');
});
Route::get('/our-staff', function () {
    return view('healthflex.staff');
});
Route::get('/careers', function () {
    return view('healthflex.careers');
});
Route::get('/departments', function () {
    return view('healthflex.departments');
});
Route::get('/services', function () {
    return view('healthflex.services');
});
Route::get('/visit-guide ', function () {
    return view('healthflex.visitguide');
});
Route::get('/appointment-booking', function () {
    return view('healthflex.booking');
});
Route::get('/health-plans', function () {
    return view('healthflex.healthplans');
});
Route::get('/health-library', function () {
    return view('healthflex.healthlibrary');
});
Route::get('/fees-insurance', function () {
    return view('healthflex.feesinsurance');
});
Route::get('/faq', function () {
    return view('healthflex.faq');
});
Route::get('/blog', function () {
    return view('healthflex.blog');
});
Route::get('/contact', function () {
    return view('healthflex.contact');
});
Route::get('/shop', function () {
    return view('healthflex.shop');
});
Route::get('/free-checkup-offer', function () {
    return view('healthflex.freecheckuporder');
});
Route::get('/alzheimers-disease', function () {
    return view('healthflex.alzheimersdisease');
});
Route::get('/shortcodes', function () {
    return view('healthflex.shortcodes');
});
Route::get('/all-demos', function () {
    return view('healthflex.alldemos');
});
Route::get('/healthflex-admin', function () {
    return view('healthflex.healthflexadmin');
});
Route::get('/cosmetic-surgery', function () {
    return view('healthflex.cosmeticsurgery');
});
Route::get('/elias-carson', function () {
    return view('healthflex.blog_profile_elias_carson');
});
Route::get('/404', function () {
    return view('healthflex.404');
});
Route::get('/404', function () {
    return view('healthflex.404');
});
Route::get('/blank', function () {
    return view('healthflex.blank');
});
Route::get('/sherzod', 'PublicController@sherzod');
Route::get('/khursan', 'PublicController@khursan');

