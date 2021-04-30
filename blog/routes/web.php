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

Route::get('/','HomeController@index');
Route::get('/useDB','HomeController@useDB');
Route::get('/useModel','HomeController@useModel');



Route::get('/anasayfa',function(){
    echo "Anasayfa";
});

Route::get('/category','CategoryController@index');

Route::get('/php-temel', function () {
	echo "<h1>Değişkenler</h1>";
	//Tipden bağımsız olarakdeğişken ataması yapabilmekteyiz
    $degisken = "laravel";
    //Ekrana yazdıma için echo kullanılır
    echo $degisken."<br>";
    $degisken = 1;
    // çift tırnak içinde php değişkeni tanımlanabilir.
    echo "$degisken<br>";
    //Tek tırnakta string gibi işlem yapar
    echo '$degisken<br>';


	echo "<h1>Koşullar(if/else)</h1>";
    //Koşullar syntax aşağıdaki gibidir
    $deger1 = 10;
    $deger2 = 20;
    $deger3 = 10;

    if($deger1 > $deger2){
    	echo "deger1 değişkeni değer2 değişkeninden <b>büyüktür</b><br>";
    }else if($deger1 < $deger2 && $deger1 == $deger3){
    	echo "deger1 değişkeni değer2 değişkeninden <b>küçüktür</b> ve deger1 ile deger3 birbirine <b>eşittir</b>";
    }else{
    	echo "deger1 değişkeni değer2 değişkeninden <b>küçüktür</b><br>";
    }


    echo "<h1>Koşullar (switch)</h1>";

    $durum = "ok";
    $durum = "asdasd";
    $durum = "no";
    switch ($durum) {
    	case 'ok':
    		echo "Durum ok <br>";
    		break;
    	case 'no':
    		echo "Durum no <br>";
    		break;
    	default:
    		echo "Durum tanımlı değil<br>";
    		break;
    }

    echo "<h1>Döngüler (for)</h1>";

    $array = array("Laravel","Docker","Nginx");

    for($i = 0 ; $i < count($array) ; $i++){
    	echo "array[$i] = $array[$i] <br>";
    }

    echo "<h1>Döngüler (foreach)</h1>";

    foreach($array as $key => $value){
    	echo "array[$key] = $value<br>";
    }

  	echo "<h1>Döngüler (while)</h1>";
  	$i = 0;
  	while($i < count($array)){
  		echo "array[$i] = $array[$i]<br>";
  		$i++;// $i = $i + 1;
  	}

  	echo "<h1>Döngüler (do-while)</h1>";
  	$i = 0;
  	do{
  		echo "array[$i] = $array[$i]<br>";
  		$i++;
  	}while($i < count($array));




});
