<?php namespace App\Models;

use CodeIgniter\Database\seeder;

class Usuario extends seeder
{
public function obtenerUsuario($datos)
{
    $usuario = $this->db->table('t_usuario');
    $usuario->where($datos);
    return $usuario->get()->getResultArray();
}
}