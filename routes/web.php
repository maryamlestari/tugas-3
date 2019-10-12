  <?php
Route::get('/', function () {
    return view('welcome');
});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/kategori_artikel','KategoriArtikelController');
Route::resource('/kategori_berita','KategoriBeritaController');
Route::resource('/kategori_galeri','KategoriGaleriController');
Route::resource('/kategori_pengumuman','KategoriPengumumanController');
Route::resource('/artikel','ArtikelController');
Route::resource('/berita','BeritaController');
Route::resource('/galeri','GaleriController');
Route::resource('/pengumuman','PengumumanController');

