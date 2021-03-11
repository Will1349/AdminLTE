<?php

class VistasModelo
{
    protected function MdlMostrarVistas($vistas)
    {
        $listaBlanca = ["calendar", "gallery", "home", "kanban", "login", "widgets", "404"];
        if (in_array($vistas, $listaBlanca)) {
            if (is_file("./vista/contenido/" . $vistas . "-view.php")) {
                $contenido = "./vista/contenido/" . $vistas . "-view.php";
            } else {
                $contenido = "login";
            }

        } elseif ($vistas == "login") {
            $contenido = "login";
        } elseif ($vistas == "index") {
            $contenido = "login";
        } else {
            $contenido = "404";
        }
        return $contenido;
    }
}
