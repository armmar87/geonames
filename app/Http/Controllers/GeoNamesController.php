<?php

namespace App\Http\Controllers;

use Chumper\Zipper\Facades\Zipper;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GeoNamesController extends Controller
{
    public function getGeoNamesFile()
    {
//        $uri = 'http://download.geonames.org/export/dump/RU.zip';
//        $client = new Client();
//        $res = $client->request('GET', $uri);
//        Storage::put('files/geo_names.zip', $res->getBody());


        $zip = new \ZipArchive();
        $zip->open('files/geo_names.zip');

        $content = $zip->getFromName('RU.txt');

        $str = preg_split("/\d{6,}/", $content);

        for ($i = 0; $i < sizeof($str); $i++){
            $result = explode( ' ',  $str[$i]);
            var_dump($result);

        }
//        $result = preg_split("/ \d{4}\-\d{1,2}\-\d{1,2} /i", $content);
//
//        for( $i = 0; $i < $zip->numFiles; $i++ ){
//            $stat = $zip->statIndex( $i );
//
//            print_r( basename( $stat['name'] ) . PHP_EOL );
//        }






    }
}
