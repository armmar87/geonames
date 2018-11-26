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

//        $files = glob('files/geo_names.zip');
//        Zipper::make('files/test.zip')->add($files)->close();

        $za = new \ZipArchive();

        $za->open('files/geo_names.zip');


        for( $i = 0; $i < $za->numFiles; $i++ ){
            $stat = $za->statIndex( $i );
            dd($stat );

            print_r( basename( $stat['name'] ) . PHP_EOL );
        }






    }
}
