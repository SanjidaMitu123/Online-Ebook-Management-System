<?php

use Illuminate\Support\Facades\Route;

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

//backend

Route::get('/home','backend\HomeController@index')-> name('dashboard.admin')-> middleware('auth','isAdmin') ;

//backend dashboard
Route::group(['prefix'=>'/home/dashboard' ,'middleware'=>['auth','isAdmin']],function(){
Route::get('/','backend\HomeController@indexdashboard')-> name('admin.dashboard');
//backend dashboard-author-author request

Route::get('/authorrequest','frontend\AuthorController@authorrequestlistshow')-> name('dashboard.authorrequest');
Route::get('/authorrequest/approved/{id}','backend\AuthorController@author_approved')->name('authorrequest.approved');
Route::get('/authorrequest/delete/{id}','backend\AuthorController@authordelete')->name('authorrequest.delete');

//backend dashboard-author-author list
Route::get('/authorlist','backend\AuthorController@listshow')-> name('dashboard.authorlist');

//backend dashboard-reader-all reader list
Route::get('/rederlist','backend\ReaderController@readerlistshow')-> name('dashboard.readerlist');
Route::get('/rederlist','frontend\ReaderController@allreaderlistshow')-> name('dashboard.readerlist');

//backend ebook add
Route::get('/addebook','backend\EbookController@addebookshow')-> name('dashboard.addebook');
Route::post('/addebook','backend\EbookController@createebook')-> name('dashboard.createbook');
Route::get('/addebookcat','backend\EbookController@catlist')-> name('dashboard.showcat');

//category
Route::post('/addebook/cat','backend\EbookController@categoryinsert')-> name('category.insert');

//backend dashboard-reader- subscribed reader list
Route::get('/subscribed-readerlist','backend\ReaderController@subscribedreaderlistshow')-> name('dashboard.subscribed-readerlist');

//backend dashboard-ebook- all ebook list
Route::get('/ebook-list','backend\EbookController@ebooklistshow')-> name('dashboard.ebook-list');
Route::get('/ebook-list/delete/{id}','backend\EbookController@ebookdelete')->name('ebook.delete');




//backend dashboard-ebook- all ebook list inserted
Route::get('/ebook-list-inserted','backend\EbookController@ebooklistinsertedshow')-> name('dashboard.ebook-list.inserted');

//backend dashboard-ebook- all ebook list author
Route::get('/ebook-list-author','backend\EbookController@ebooklistauthorshow')-> name('dashboard.ebook-list.author');

//backend dashboard-subscription info
Route::get('/subscription','backend\SubscriptionController@subscriptionshow')-> name('dashboard.subscription.info');
Route::post('/subscription/create','backend\SubscriptionController@createsubscription')->name('dashboard.subscription.create');
Route::get('/subscription','backend\SubscriptionController@allsubscriptionlist')->name('dashboard.subscription.info');
Route::get('/subscription/delete/{id}','backend\SubscriptionController@subdelete')->name('subscription.delete');



//backend dashboard admin info
Route::get('/admininfo','backend\HomeController@adminshow')->name('dashboard.admininfo');
Route::get('/admininfo','backend\HomeController@adminlist')->name('dashboard.admininfo');






//Author panel

//profile
Route::get('/authorprofile','backend\AuthorController@authorprofileshow')->name('dashboard.author-profile');

//write book
Route::get('/author-writebook','backend\AuthorController@writebooksshow')->name('dashboard.write-book');
Route::post('/write-book','backend\AuthorController@writebook')->name('write-book');
Route::get('/author-writebook/allpage','backend\AuthorController@all_written_page_show')->name('dashboard.write-book.allpage');
Route::get('/author-writebook/allpage/delete/{id}','backend\AuthorController@writepagedelete')->name('page.delete');
Route::get('/author-writebook/allpage/view/{id}','backend\AuthorController@viewpage')->name('page.view');


//publish book
Route::get('/author-publish-book','backend\AuthorController@publishbookshow')->name('dashboard.publish-book');


//add book
Route::get('/author-add-book','backend\AuthorController@authoraddbookshow')->name('dashboard.author-add-book');
Route::post('/add-book','backend\AuthorController@addbook')->name('add-book');



//my library
Route::get('/authorlibrary','backend\AuthorController@mylibraryshow')->name('dashboard.authorlibrary');
Route::get('/authorlibrary','backend\AuthorController@mylibrarylist')->name('dashboard.authorlibrary');

Route::get('/authorlibrary/readbook/{id}','frontend\MylibraryController@viewbook')->name('readbook.view');
Route::get('/authorlibrary/edit/{id}','frontend\MylibraryController@editmylibrary')->name('mybook.edit');


});





//admin panel login
Route::get('/login','UserController@login')->name('login');
Route::post('/login','UserController@logindo')->name('login.do');
//admin panel logout
Route::get('/logout','UserController@logout')->name('logout');



//frontend login
Route::get('user/login','frontend\UserController@loginshow')->name('loginshow');
Route::post('user/login','frontend\UserController@login')->name('userlogin');
//frontend logout
Route::get('user/logout','frontend\UserController@userlogout')->name('userlogout');





//frontend

Route::get('/homef','frontend\HomeController@index')-> name('dashboard') ;



//registration
Route::post('reader/registration','frontend\ReaderController@readercreate')->name('reader.registration');
Route::post('author/registration','frontend\AuthorController@authorcreate')->name('author.registration');
Route::group(['middleware'=>'auth'],function(){
//profile
Route::get('/homef/profile','frontend\ReaderController@profileshow')-> name('reader.profile') ;

//my library
Route::get('/homef/mylibrary','frontend\MylibraryController@readermylibraryshow')-> name('reader.mylibrary') ;
Route::post('/homef/mylibrary/addbook','frontend\MylibraryController@readeraddbook')->name('readeradd-book');

Route::get('/mylibrary/delete/{id}','frontend\MylibraryController@mylibrarydelete')->name('mylibrary.delete');
Route::get('/authorlibrary/edit/{id}','frontend\MylibraryController@editreaderlibrary')->name('readermybook.edit');

Route::put('/authorlibrary/update/{id}','frontend\MylibraryController@updatemylibrary')->name('mybook.update');


//message

Route::post('/homef/message','frontend\HomeController@messagecreate')->name('message.create');

});