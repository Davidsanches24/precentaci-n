<?php
    /**
     * Autor: Camilo Figueroa.
     * Esta clase es parete del controlador.
     * 
     */

    class Csesiones
    {
        public static function iniciar_sesion()
        {
            if( !isset( $_SESSION ) ) session_start();
        } 

        public static function verificar_sesion()
        {
            self::iniciar_sesion();

            if( isset( $_SESSION[ 'usuario' ] ) )
            {
                if( TRIM( $_SESSION[ 'usuario' ] ) == "" )
                {
                    header( "location: controladores/c-iniciar_seccion.php " );
                }

            }else{
                    header( "location: controladores/c-iniciar_seccion.php" );
                }
        }
    }