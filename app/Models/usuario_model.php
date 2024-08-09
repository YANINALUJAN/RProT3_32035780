<?php
namespace App\Models;
use CodeIgniter\Model;

class usuario_model extends Model
{
    protected $table = "usuarios";
    protected $primaryKey = "id_usuario";
    protected $allowedFields = [ "nombreyapellido", "cuit", "usuario", "email", "pass", "perfil_id", "baja", "created_at" ];

    public function obtener_usuarios(){
        return $this->where('baja','NO')->findAll();
    }
    public function buscar_usuario($idUsuario){
        return $this->where('id_usuario',$idUsuario)->first();
    }

    public function modificar_usuario($id_usuario, $datos)
    {
        // Aquí actualizamos el registro del usuario en la base de datos
        return $this->Update($id_usuario, $datos);
    }

    
    // Borrar un usuario
    public function borrar_usuario($idUsuario) {
    return $this->Update($idUsuario,['baja'=>'SI']); 
  }
}





