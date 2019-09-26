  <?php
Route::get('/', function () {
    return view('welcome');
});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/kategori_artikel','KategoriArtikelController@index');
Route::get('/kategori_berita','KategoriBeritaController@index');
Route::get('/kategori_galeri','KategoriGaleriController@index');
Route::get('/kategori_pengumuman','KategoriPengumumanController@index');
Route::get('/artikel','ArtikelController@index');
Route::get('/berita','BeritaController@index');
Route::get('/galeri','GaleriController@index');
Route::get('/pengumuman','PengumumanController@index');