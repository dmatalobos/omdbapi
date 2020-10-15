<?php
namespace app\helpers;

/**
 * Controlador.
 * 
 * @author Daniel Matalobos
 */
class Omdb
{
    /**
     * Devuelve un objeto con el listado de películas.
     * @param string $query texto a buscar
     * @return object Resultado de la busca.
     */
    public static function getFilms($query)
    {
        $client = new \GuzzleHttp\Client();
        try {
            $response = $client->get( $_ENV['OMDB_ENDPOINT'] . '/?apikey=' . $_ENV['OMDB_API_KEY'] . '&s=' . $query);
            $list = json_decode($response->getBody()->getContents());
            return $list;
        } catch (\Throwable $th) {
            return $th;
        }
        
    }
}