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


Route::get('/', function () {
    return view('welcome');
});

Route::get('/','FaruController@index');
Route::get('aboutus','FaruController@aboutus');
Route::get('gallery','FaruController@gallery');

Route::get('contactus','FaruController@contactus');
Route::get('admin','AdminController@index');
Route::get('goods','AdminController@goods');
Route::get('employee','AdminController@employee');
//Route::get('front','AdminController@front');
Route::get('laundry','AdminController@laundry');
Route::get('enquiry','AdminController@enquiry');
Route::get('transport','AdminController@transport');
Route::get('accounts','AdminController@accounts');
Route::get('client','AdminController@client');

Route::post('contactstore','FaruController@contactstore');


Route::get('bookingins','AdminController@adminbooking_create');

Route::post('bkstore','AdminController@bkstore');

Route::get('transports','AdminController@transport_create');
Route::post('trstore','AdminController@trstore');

//front start
Route::get('front','AdminController@front');
Route::get('fronts','AdminController@front_create');
Route::post('frnstore','AdminController@frnstore');
Route::get('frnsedit/{id}','AdminController@edit_front');
Route::post('update_front/{id}', 'AdminController@update_front')->name('front.update');
Route::get('destroy_front/{id}', 'AdminController@destroy_front')->name('front.destroy');
//front end
//food
Route::get('food','AdminController@food');
Route::get('foods','AdminController@food_create');
Route::post('fdstore','AdminController@fdstore');
Route::get('edit_food/{id}','AdminController@edit_food');
Route::post('update_food/{id}', 'AdminController@update_food')->name('food.update');
Route::get('destroy_food/{id}', 'AdminController@destroy_food')->name('food.destroy');
Route::get('food_dis','AdminController@food_distribute_create');
Route::post('fooddistributestore','AdminController@food_distribute_store');
Route::get('destroy_food_distribute/{id}', 'AdminController@destroy_food_distribute')->name('destroy_food_distribute');

Route::get('edit_food_distribute/{id}','AdminController@edit_food_distribute');
Route::post('fooddistributeupdate/{id}', 'AdminController@fooddistributeupdate')->name('fooddistributestore');

Route::get('food_distribute_invoice/{id}', 'AdminController@food_distribute_invoice');
//food end
			//booking start
Route::get('/adminbooking','AdminController@adminbooking');

Route::get('booking','FaruController@booking');
//create start
Route::get('bookingins','AdminController@adminbooking_create');

Route::post('bkstore','AdminController@bkstore');

Route::get('/destroy_book/{id}', 'AdminController@destroy_book')->name('book.destroy');

Route::get('booksedit/{id}','AdminController@edit_book');
Route::post('update_book/{id}', 'AdminController@update_book')->name('book.update');


//client
Route::get('clients','AdminController@client_create');
Route::post('clstore','AdminController@clstore');

Route::get('/destroy_client/{id}', 'AdminController@destroy_client')->name('client.destroy');

Route::get('clientedit/{id}','AdminController@edit_client');
Route::post('update_client/{id}', 'AdminController@update_client')->name('client.update');

//goods start=============
Route::get('goodss','AdminController@goods_create');
Route::post('gdstore','AdminController@gdstore');
Route::get('/destroy_goods/{id}', 'AdminController@destroy_goods')->name('goods.destroy');
Route::get('edit_goods/{id}','AdminController@edit_goods');
Route::post('update_goods/{id}', 'AdminController@update_goods')->name('goods.update');
Route::get('view_goods/{id}','AdminController@view_goods')->name('goods.view');
//goods ends=======

//laundry
Route::get('laundrys','AdminController@laundry_create');
Route::post('lystore','AdminController@lystore');
Route::get('/destroy_laundry/{id}', 'AdminController@destroy_laundry')->name('laundry.destroy');
Route::get('lyedit/{id}','AdminController@edit_laundry');
Route::post('update_laundry/{id}', 'AdminController@update_laundry')->name('laundry.update');

Route::get('laundry_invoice/{id}', 'AdminController@laundry_invoice');

//end laundry
//employee
Route::get('employees','AdminController@employee_create');
Route::post('empstore','AdminController@empstore');
Route::get('/destroy_employee/{id}', 'AdminController@destroy_employee')->name('employee.destroy');
Route::get('fdsedit/{id}','AdminController@edit_employee');
Route::post('update_employee/{id}', 'AdminController@update_employee')->name('employee.update');


//transport
Route::get('transports','AdminController@transport_create');
Route::post('trstore','AdminController@trstore');
Route::get('view_transport/{id}','AdminController@view_transport')->name('transport.view');

Route::get('edit_transport/{id}','AdminController@edit_transport');
Route::post('update_transport/{id}', 'AdminController@update_transport')->name('transport.update');
Route::get('destroy_transport/{id}', 'AdminController@destroy_transport')->name('transport.destroy');


//enquiry start==========================
Route::get('enquiry','AdminController@enquiry');
Route::get('enquirys','AdminController@enquiry_create');
Route::post('enstore','AdminController@enstore');
Route::get('edit_enquiry/{id}','AdminController@edit_enquiry');
Route::post('update_enquiry/{id}', 'AdminController@update_enquiry')->name('enquiry.update');
Route::get('destroy_enquiry/{id}', 'AdminController@destroy_enquiry')->name('enquiry.destroy');
Route::get('view_enquiry/{id}','AdminController@view_enquiry')->name('enquiry.view');
//enquiry end==============================
//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//accounts start////////////////////////////////

Route::get('accounts','AdminController@account');
Route::get('account_print','AdminController@account_print');

Route::get('accountss','AdminController@account_create');
Route::post('accstore','AdminController@accstore');

Route::get('view_account/{id}','AdminController@view_account')->name('account.view');

Route::get('edit_account/{id}','AdminController@edit_account');
Route::post('update_account/{id}', 'AdminController@update_account')->name('account.update');

Route::get('destroy_account/{id}', 'AdminController@destroy_account')->name('account.destroy');

//end accounts
    Route::get('login',array('as'=>'login',function(){
    return view('login');
}));



//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::post('paystore','AdminController@paystore');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::get('/grocery', 'AdminController@adminbooking');
Route::get('/grocery/post', 'AdminController@ajaxRequestPost');
Route::get('/grocery/post1', 'AdminController@ajaxRequestPost1');

//payment destroy start
Route::get('/destroy_payment/{id}', 'AdminController@destroy_payment')->name('pay.destroy');

//payment destroy end


//start frontend insert===
Route::post('bookingstore','FaruController@bookingstore');
//end frontend insert===

//dis start=============
Route::get('dis','AdminController@dis');
Route::get('diss','AdminController@dis_create');
Route::post('disstore','AdminController@disstore');
Route::get('/destroy_dis/{id}', 'AdminController@destroy_dis')->name('dis.destroy');
Route::get('edit_dis/{id}','AdminController@edit_dis');
Route::post('update_dis/{id}', 'AdminController@update_dis')->name('dis.update');
Route::get('view_dis/{id}','AdminController@view_dis')->name('dis.view');

//dis ends=======

//search start
Route::get('/search','AdminController@search');
Route::get('/search_cindate','AdminController@search_cindate');
Route::get('/search_con','AdminController@search_con');
Route::get('/search_due','AdminController@search_due');
Route::get('/search_outdate','AdminController@search_outdate');
Route::get('/search_goods','AdminController@search_goods');
Route::get('/search_total','AdminController@search_total');
Route::get('/search_trans','AdminController@search_trans');
Route::get('/search_rs','AdminController@search_rs');
Route::get('/search_rc','AdminController@search_rc');
Route::get('/search_food1','AdminController@search_food1');
Route::get('/search_odr','AdminController@search_odr');
Route::get('/search_dlv','AdminController@search_dlv');
Route::get('/search_fd','AdminController@search_fd');
Route::get('/search_date','AdminController@search_date');

//search end

//offer start
Route::get('offer','AdminController@offer');
Route::get('offers','AdminController@offer_create');
Route::post('offerstore','AdminController@offerstore');
Route::get('offeredit/{id}','AdminController@edit_offer');
Route::post('update_offer/{id}', 'AdminController@update_offer')->name('offer.update');
Route::get('destroy_offer/{id}', 'AdminController@destroy_offer')->name('offer.destroy');
//offer end

//room sstart

Route::get('room_info','AdminController@room_info');
Route::get('room_info_create','AdminController@room_info_create')->name('room_info_create');
Route::post('roomstore','AdminController@roomstore');
//booking start
Route::get('guest_entry_create','AdminController@guest_entry_create')->name('guest_entry_create');
Route::post('bkkstore','AdminController@bkkstore');

//booking End
Route::get('destroy_room/{id}', 'AdminController@destroy_room')->name('destroy_room');
Route::get('edit_room/{id}','AdminController@edit_room')->name('edit_room');
Route::post('room_update/{id}', 'AdminController@room_update')->name('room_update');

//room end

//about us start===================
Route::get('edit_about/{id}','AdminController@edit_about');
Route::post('update_about/{id}', 'AdminController@update_about')->name('about.update');
//about us end===================

//Gallery start===================
Route::get('edit_gallery/{id}','AdminController@edit_gallery');
Route::post('update_gallery/{id}', 'AdminController@update_gallery')->name('gallery.update');
//Gallery end=================

//hire transport start=============
Route::get('hire_trans','AdminController@hire_trans');
Route::get('hire_transs','AdminController@hire_trans_create');
Route::post('hire_transstore','AdminController@hire_transstore');
Route::get('/destroy_hire_trans/{id}', 'AdminController@destroy_hire_trans')->name('hire_trans.destroy');
Route::get('edit_hire_trans/{id}','AdminController@edit_hire_trans');
Route::post('update_hire_trans/{id}', 'AdminController@update_hire_trans')->name('hire_trans.update');
Route::get('view_hire_trans/{id}','AdminController@view_hire_trans')->name('hire_trans.view');
Route::get('invoice_hire_trans/{id}','AdminController@invoice_hire_trans');
//hire transport ends=======

//====invoice start===== 
Route::get('view_invoice/{id}','AdminController@view_invoice');


//=====invoice end======