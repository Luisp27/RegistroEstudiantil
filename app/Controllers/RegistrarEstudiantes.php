<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\registarEstudiante;

class RegistrarEstudiantes extends Controller{

    public function index()
    {
        return view('Registro/registrarEstudiante');
    }
}