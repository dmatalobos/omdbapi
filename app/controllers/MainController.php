<?php
namespace app\controllers;

use app\helpers\Omdb;

/**
 * Controlador.
 * 
 * @author Daniel Matalobos
 */
class MainController
{
    /**
     * Acción por defecto.
     */
    private $defaultAction = "index";
    
    /**
     * Devuelve la acción por defecto.
     */
    public function getDefaultAction()
    {
        return $this->defaultAction;
    }
    /**
     * Rederizar la vista.
     */
    protected function renderView( $partial, $data )
    {
        include( __DIR__."/../views/index.php" );
    }
    /**
     * Página principal.
     */
    public function index()
    {
        $this->renderView('start', "¡Empieza a buscar!");
    }
    /**
     * Resultado de la busca.
     */
    public function search(){
        $Omdb = Omdb::getFilms($_GET[ "search" ]);
        if(property_exists($Omdb, 'Search')){
            $this->renderView( 'list', (object) $Omdb->Search ); 
        }else{
            $this->renderView( 'error', $Omdb );
        }
    }
}