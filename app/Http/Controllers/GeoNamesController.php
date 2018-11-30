<?php

namespace App\Http\Controllers;

use App\GeoNames;
use Chumper\Zipper\Facades\Zipper;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GeoNamesController extends Controller
{

    public function getHomePage ()
    {
        return view('home');
    }

    public function getTwentyCities (Request $request)
    {
        dd($request->all());
        return view('home');
    }

    public function getAndUpdateGeoNames()
    {
        ini_set('max_execution_time', 60);

        $zipFilePath = '/files/geo_names.zip';
        $textFilePath = '/files/geo_names.txt';
        $uri = 'http://download.geonames.org/export/dump/RU.zip';

        $client = new Client();
        $res = $client->request('GET', $uri);
        Storage::put($zipFilePath, $res->getBody());

        $zip = new \ZipArchive();
        $zip->open($zipFilePath);

        $content = $zip->getFromName('RU.txt');
        Storage::put($textFilePath, $content);

        $lines = file(url($textFilePath));

        for ($i = 0; $i < sizeof($lines); $i++){
            $result = explode( "\t",  $lines[$i]);
            GeoNames::saveGeoNamesData($result);
        }
        echo "<h3>Updated Geo Names</h3>";
    }
}
