<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
        public function obtenerGeneros()
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://api.deezer.com/genre",
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

            foreach($objeto->data as $genero){

                //echo json_encode($genero);

                $verificar = Genre::where('name',$genero->name)->first();

               //echo $genero->name;
                if(!$verificar){
                    $nuevoGenero = new Genre();
                    $nuevoGenero->name = $genero->name;
                    $nuevoGenero->picture=$genero->picture;
                    $nuevoGenero->picture_small= $genero->picture_small;
                    $nuevoGenero->picture_medium= $genero->picture_medium;
                    $nuevoGenero->picture_big= $genero->picture_big;
                    $nuevoGenero->picture_xl= $genero->picture_xl;
                //$nuevoGenero->name = $genero->name;
                $nuevoGenero->save();
                }


                 if(isset($genero->picture))
                echo "<img src='$genero->picture' alt=''>";

                if(isset($genero->picture_small))
                echo "<img src='$genero->picture_small' alt=''>";

                if(isset($genero->picture_medium))
                echo "<img src='$genero->picture_medium' alt=''>";

                if(isset($genero->picture_big))
                echo "<img src='$genero->picture_big' alt=''>";

                if(isset($genero->picture_xl))
                echo "<img src='$genero->picture_xl' alt=''>";

            echo "<hr>";

                //echo $genero->name;
            }
        }

    }

    public function encontrarGenero($id)
    {
        $generoDetalle = Genre::find($id);

        if(isset($generoDetalle->name))
        echo "<h3> $generoDetalle->name </h3>";

        if(isset($generoDetalle->picture))
        echo "<img src='$generoDetalle->picture' alt=''>";

        if(isset($generoDetalle->picture_small))
        echo "<img src='$generoDetalle->picture_small' alt=''>";

        if(isset($generoDetalle->picture_medium))
        echo "<img src='$generoDetalle->picture_medium' alt=''>";

        if(isset($generoDetalle->picture_big))
        echo "<img src='$generoDetalle->picture_big' alt=''>";

        if(isset($generoDetalle->picture_xl))
        echo "<img src='$generoDetalle->picture_xl' alt=''>";

        echo "
        <hr>";
    }

    public function encontrarTodos()
    {
        $generos=Genre::all();
        foreach($generos as $genero)
        {
            if(isset($genero->name))
            echo "<h3> $genero->name </h3>";

            if(isset($genero->picture))
            echo "<img src='$genero->picture' alt=''>";

            if(isset($genero->picture_small))
            echo "<img src='$genero->picture_small' alt=''>";

            if(isset($genero->picture_medium))
            echo "<img src='$genero->picture_medium' alt=''>";

            if(isset($genero->picture_big))
            echo "<img src='$genero->picture_big' alt=''>";

            if(isset($genero->picture_xl))
            echo "<img src='$genero->picture_xl' alt=''>";

            echo "<hr>";

        }
    }
}
