<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\usuario_model;
use App\Controllers\BaseController;

class Login_controller extends BaseController
{
    public function index()
    {
        helper(['form', 'url']);

        /* $dato['titulo'] = 'Login';
        echo view('front/head', $dato); */
        echo view('back/usuario/Login');
    }

    public function auth()
    {
        $session = session();
        $model = new usuario_model();

        // traemos los datos del formulario
        $usuario = $this->request->getVar('usuario');
        $password = $this->request->getVar('pass');
        $data = $model->where('usuario', $usuario)->first();
        if($data){
            $pass = $data['pass'];
            $ba = $data['baja'];
            if ($ba == 'SI') {
                $session->setFlashdata('msg', 'usuario dado de baja');
                return redirect()->to('/login');
            }
    
            // Se verifican los datos ingresados para iniciar, si cumple verificación inicia la sesion
            $verify_pass = password_verify($password, $pass);
            // password_verify determina los requisitos de configuración de la contraseña
            if($verify_pass){
                $ses_data = [
                    'id_usuario' => $data['id_usuario'],
                    'nombreyapellido' => $data['nombreyapellido'],
                    'cuit' => $data['cuit'],
                    'email' => $data['email'],
                    'usuario' => $data['usuario'],
                    "perfil_id"=>$data['perfil_id'],
                    "logged_in" => TRUE
                ];
            // Se se cumple la verificación inicia la sesion
            $session->set($ses_data);
            $session->setFlashdata('msg', 'Bienvenido se ha logueado con exito!!');
            return redirect()->to('/panel');
            // return redirect()->to('/prueba'); // pagina principal
        }else{
            // no paso la validación de la password
            $session->setFlashdata('msg', 'Password Incorrecta');
            return redirect()->to('/Login');
        }
    }else{
        $session->setFlashdata('msg', 'No Existe el usuario es Incorrecto');
        return redirect()->to('/Login');
    }
}

  public function logout()
  {
    $session = session();
    $session->destroy();
    return redirect()->to('/');
   } 
}
