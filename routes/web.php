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

// Route::get('/', function () {
//     return view('welcome');
// });
//     });
/**
* Main page route 'middleware' => 'web'
*/
Route::group([], function (){
	//pages menu
	Route::match(['get','post'],'/',['uses'=>'IndexController@execute','as'=>'home']);
	//Route::match(['get','post'],'/home',['uses'=>'IndexController@execute','as'=>'home']);
    //"readMore"button
     Route::get('/page/{alias}',['uses'=>'PageController@execute','as'=>'page']);
     //admin
     Route::auth();
	});


    


/**
* AdminPanel page route
*/
// Route::group(['prefix'=>'admin', 'namespace'=>'Admin', 'middleware' => ['auth']], function (){
/**
* Admin_Main page route
// */  
//     Route::get('/', 'AdminController@admin')->name('admin.index');

/**
* Admin page route
*/

 Route::group(['prefix' => 'admin','middleware' => 'auth'], function (){

	//Route::group(['prefix'=>'admin', 'namespace'=>'Admin', 'middleware' => ['auth']], function (){
    //admin
  //    	Route::get('/', function (){
  //    		if(view()->exists('home')){
    		
  //   		$data = [
  //   			'title' => 'Administrator Panel'

  //   		];
  //   		return  view('home', $data);
  //   		}
		// }); nige cherez controler
 	Route::get('/', ['uses'=>'HomeController@index','as'=>'admin'])->name('home');
/**
* WITH RESOURCE
*/
Route::resource('pages', 'PagesController');
//Route::resource('pages', 'PagesController', ['as'=>'admin']);
Route::resource('portfolios', 'PortfoliosController');	
Route::resource('services', 'ServicesController');
Route::resource('peoples', 'PeoplesController');	    	 
//      //admin/pages
     // 	Route::group(['prefix' => 'pages'],function (){
     // 		//main page of pages which was add
     // 		Route::get('/',['uses' => 'PagesController@execute', 'as'=>'pages']);
     // 		//form add = admin/pagesAdd
     // 		Route::match(['get','post'],'/add',['uses'=>'PagesAddController@execute','as'=>'pagesAdd']);
    	
    	// //form add = admin/pages/edit/2
     // 		Route::match(['get','post','delete'],'/edit{page}',['uses'=>'PagesEditController@execute','as'=>'pagesEdit']);
    	// }); 


//     	//admin portfolio
//      	Route::group(['prefix' => 'portfolios'],function (){
//      		//main page of pages which was add
//      		Route::get('/',['uses' => 'PortfolioController@execute', 'as'=>'portfolios']);
//      		//form add = admin/pages/add
//      		Route::match(['get','post'],'/add',['uses'=>'PortfolioAddController@execute','as'=>'portfolioAdd']);
    	
//     	//form add = admin/pages/edit/2
//      		Route::match(['get','post','delete'],'/edit{page}',['uses'=>'PortfolioEditController@execute','as'=>'portfolioEdit']);
//     	}); 

// 	//admin services
//      	Route::group(['prefix' => 'services'],function (){
//      		//main page of pages which was add
//      		Route::get('/',['uses' => 'ServiceController@execute', 'as'=>'services']);
//      		//form add = admin/pages/add
//      		Route::match(['get','post'],'/add',['uses'=>'ServiceAddController@execute','as'=>'serviceAdd']);
    	 
//     	//form add = admin/pages/edit/2
//      		Route::match(['get','post','delete'],'/edit{page}',['uses'=>'ServiceEditController@execute','as'=>'serviceEdit']);
//     	}); 
// 	//admin people
//      	Route::group(['prefix' => 'peoples'],function (){
//      		//main page of pages which was add
//      		Route::get('/',['uses' => 'PortfolioController@execute', 'as'=>'peoples']);
//      		//form add = admin/pages/add
//      		Route::match(['get','post'],'/add',['uses'=>'PortfolioAddController@execute','as'=>'peopleAdd']);
    	 
//     	//form add = admin/pages/edit/2
//      		Route::match(['get','post','delete'],'/edit{page}',['uses'=>'PortfolioEditController@execute','as'=>'peopleEdit']);
//     	}); 
    
 });


