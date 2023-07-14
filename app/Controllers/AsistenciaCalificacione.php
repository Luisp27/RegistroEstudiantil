<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AsistenciaCalificaciones;

class AsistenciaCalificacione extends Controller{

    public function index() {
        return view('Registro/AsistenciaCalificaciones');
    }

}