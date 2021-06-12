<?php

use Illuminate\Support\Facades\Route;
use App\Models\page;

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
Route::group(['prefix'=>'{language?}',
            //   'where'=>['locale'=>'[a-zA-Z]{2}?'],
                'middleware'=>'setlocale'],function (){
                  if(! Session::has('id')){
                    Session::put('id',  rand());
                }
                
               
//  Route::get('/', 'App\Http\Controllers\careerController@indexlaunch')->name('launch');
Route::get('/', 'App\Http\Controllers\careerController@indexhome')->name('home');
Route::get('Description/{Product_id}','App\Http\Controllers\productExtraController@index')->name('Product.description');
Route::view('download','download');
Route::view('Dealers','Dealers')->name('Dealers');
Route::view('exhibit','exhibit')->name('Exhibits');
Route::view('brands','brands')->name('Brands');
Route::view('dummy','dummy')->name('dummy');
Route::view('careerview','career')->name('careers');
Route::view('product1','productDescription');
Route::view('product','product.productExplore');
Route::view('Team','Team')->name('Team');
Route::view('globalpresence','globalPresence');
Route::view('index','index');
Route::view('/test', 'test-index');
Route::view('/AR', 'ARPage')->name('AR');

// Route::view('productEntry', 'Admin.productEntry')->name('ProductEntryPage');


Route::view('CartDisplay','cart.ShopList');
Route::view('privacy-policy','privacypolicy')->name('privacy');
Route::view('cookies-policy','cookies-policy')->name('cookies');
Route::view('tabTesting','tabtesting')->name('tab');
Route::view('product.Description' , 'product.Description');
Route::view('product.Explore' , 'product.Explore');
Route::view('notification' , 'product.notification');
// Route::view('Product-Description' , 'product.Description')->name('Descriptionview');
// Route::view('Product/Explore','product.Explore');''

Route::get('catalogue','App\Http\Controllers\CatalogueController@index')->name('catalogue');
 Route::get('download/{filename}','App\Http\Controllers\CatalogueController@downloadpdf')->name('catalogue.download');


Route::post('Description/Option','App\Http\Controllers\filterController@ProductFetchBasedOnOption')->name('Product.description.option');
Route::get('Product/Explore','App\Http\Controllers\ProductController@indexExplore')->name('Explore');
Route::get('Product/Explore/MobileFilter','App\Http\Controllers\ProductController@CategoryDetailsFetch')->name('Categories.Fetch');
// Route::post('Product/Explore/SubCategory','App\Http\Controllers\ProductController@ProductFectchBasedOnSubCategory')->name('Product.Fetch');
// Route::post('Product/Explore/SubSubCategory','App\Http\Controllers\ProductController@ProductFectchBasedOnSubSubCategory')->name('Product.ProductFetch');
// Route::post('Product/Explore/Price','App\Http\Controllers\ProductController@ProductFectchBasedOnFilters')->name('Product.Fetch.Price');
// Route::post('Product/Explore/Filter','App\Http\Controllers\ProductController@ProductFetchBasedOnFilters')->name('Product.Fetch');
Route::post('Product/Explore/Filter','App\Http\Controllers\filterController@ProductFetchBasedOnFilters')->name('Product.Fetch');



//ajax route
// Route::post('/cart/{Product_id}','App\Http\Controllers\cartController@add')->name('Cart.add'); 
// Route::post('Description/{Product_id}/cart','App\Http\Controllers\cartController@add')->name('Cart.add');
  // Route::post('cart','App\Http\Controllers\cartController@add')->name('Cart.Add');

//Cart Related Routes
Route::post('AddToCart','App\Http\Controllers\ABCCartController@add')->name('Cart.Add');
Route::get('CartView','App\Http\Controllers\ABCCartController@index')->name('Cart.View');
Route::post('Cart/Update','App\Http\Controllers\ABCCartController@cartUpdate')->name('Cart.Update');
Route::post('Cart/Remove','App\Http\Controllers\ABCCartController@cartRemove')->name('Cart.Remove');
Route::post('Cart/Multiple','App\Http\Controllers\ABCCartController@AddingMultipleItemsToCart')->name('Cart.Add.Multiple');
Route::post('Enquire','App\Http\Controllers\ABCCartController@ContactUs')->name('shoplist.enquire');
Route::get('CartView/order','App\Http\Controllers\ABCCartController@indextoorder')->name('Cart.order');



//FavouriteList Related Routes
Route::post('AddToWishList','App\Http\Controllers\WishListController@addToWhishList')->name('Favourite.Add');
Route::post('WishList/Update','App\Http\Controllers\WishListController@wishListUpdate')->name('Favourite.Update');
Route::post('WishList/Remove','App\Http\Controllers\WishListController@cartRemove')->name('Favourite.Remove');

//Route::view('product.Description','product.Description');

Route::post('file_upload','App\Http\Controllers\careerController@file_upload');
Route::post('newsLetter','App\Http\Controllers\careerController@subscribeNewsLetter')->name('Subscribe.newsLetter');
Route::post('contactus','App\Http\Controllers\careerController@ContactUs')->name('Dealers.contactus');
Route::get('/autosearch','App\Http\Controllers\careerController@autosearch')->name('autocomplete');
Route::get('/career','App\Http\Controllers\careerController@index')->name('indexCareer');
Route::get('/filter','App\Http\Controllers\careerController@SearchFilter')->name('Search.filter');
Route::get('/Category/filter','App\Http\Controllers\careerController@HomeSearchFilter')->name('Search.Home.filter');



// google map API
 Route::get('location','App\Http\Controllers\locationController@locations')->name('location');
 Route::get('locationfilter','App\Http\Controllers\locationController@locationfilter')->name('locationfilter');
 Route::get('Presence','App\Http\Controllers\locationController@showrooms')->name('OurPresence');
 Route::post('whatsappcount','App\Http\Controllers\careerController@setWhatsAppClickcount')->name('whatsapp.count');

// Route::resource('/category' , 'App\Http\Controllers\categoryController');



Route::view('accordian','accordian');


/// uploading images to amazon s3 and retreiving from s3
Route::get('/productimages', 'App\Http\Controllers\Imagecontroller@create');
Route::post('/productimages', 'App\Http\Controllers\Imagecontroller@store');
Route::get('/productimages/{image}', 'App\Http\Controllers\Imagecontroller@show')->name('image.show');



// Admin Panel
Route::view('AdminLogin', 'Admin.login')->name('AdminLoginView');
Route::view('productEntry', 'Admin.productEntry')->name('ProductEntryPage');
Route::view('producty', 'Admin.Entrytestlayout')->name('ProductPage');
Route::get('/Admin/login', 'App\Http\Controllers\userIndexController@indexlogin')->name('AdminLogin');
Route::get('/Admin/Product/Entry', 'App\Http\Controllers\AdminProductController@indexlogin')->name('ProductEntry');
Route::get('/Admin/getSubCategories', 'App\Http\Controllers\AdminProductController@getSubCategoryDetails')->name('SubCategoryFetch');
Route::get('/Admin/getSubSubCategories', 'App\Http\Controllers\AdminProductController@getSubSubCategoryDetails')->name('SubSubCategoryFetch');
Route::post('/Admin/Product/Entry/submit', 'App\Http\Controllers\AdminProductController@SaveProduct')->name('EntryFormSubmit');
});