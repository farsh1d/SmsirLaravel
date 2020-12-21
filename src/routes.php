<?php

/*
------------------ This Project forked for Mobisoft ---------------------
                 __  __       _     _  _____        __ _   
                |  \/  |     | |   (_)/ ____|      / _| |  
                | \  / | ___ | |__  _| (___   ___ | |_| |_ 
                | |\/| |/ _ \| '_ \| |\___ \ / _ \|  _| __|
                | |  | | (_) | |_) | |____) | (_) | | | |_ 
                |_|  |_|\___/|_.__/|_|_____/ \___/|_|  \__|

-------------------------------------------------------------------------
*/

Route::group(['namespace'=>'Ipecompany\Smsirlaravel\Controllers','middleware'=>config('smsirlaravel.middlewares')], function (){
	Route::get(config('smsirlaravel.route'),'SmsirlaravelController@index')->name('sms-admin');
	Route::get('sms-admin/{log}/delete','SmsirlaravelController@delete')->name('deleteLog');
});
