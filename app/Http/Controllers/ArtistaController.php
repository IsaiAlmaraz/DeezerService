<?php

namespace App\Http\Controllers;

use App\Models\Artista;
use Illuminate\Http\Request;

class ArtistaController extends Controller
{
        public function ObtenerArtista($id)
    {

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://api.deezer.com/artist/{$id}",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT =>30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "x-rapidapi-host: deezerdevs-deezer.p.rapidapi.com",
                "x-rapidapi-key: SIGN-UP-FOR-KEY"
            ],

        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if($err){
            echo "cURL Error #:". $err;
        }else{
            $objeto = json_decode($response);

            if(isset($objeto->name))
                echo "<h3>$objeto->name </h3>"."<br/>";

            if(isset($objeto->link))
                echo "<h3>$objeto->link </h3>"."<br/>";

            if(isset($objeto->share))
                echo "<h3>$objeto->share </h3>"."<br/>";

            if(isset($objeto->picture))
                echo "<img src='$objeto->picture' alt=''>"."<br/>";

            if(isset($objeto->picture_small))
                echo "<img src='$objeto->picture_small' alt=''>"."<br/>";

            if(isset($objeto->picture_medium))
                echo "<img src='$objeto->picture_medium' alt=''>"."<br/>";

            if(isset($objeto->picture_big))
                echo "<img src='$objeto->picture_big' alt=''>"."<br/>";

            if(isset($objeto->nb_album))
                echo "<h3>$objeto->nb_album </h3>"."<br/>";

            if(isset($objeto->nb_fan))
                echo "<h3>$objeto->nb_fan </h3>"."<br/>";

            if(isset($objeto->radio))
                echo "<h3>$objeto->radio </h3>"."<br/>";

            if(isset($objeto->tracklist))
                echo "<h3>$objeto->tracklist </h3>"."<br/>";

            echo "<hr>";

        }

    }
}
