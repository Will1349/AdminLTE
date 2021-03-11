<?php
include 'core/configGeneral.php';
require_once "controlador/vista.controlador.php";

$plantilla = new vistaControlador();
$plantilla->ctrMostrarPlantilla();
