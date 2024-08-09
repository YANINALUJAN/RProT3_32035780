<?php
namespace App\Controllers;
Use App\Models\usuario_model;
Use CodeIgniter\Controller;

class Usuario_controller extends Controller{
    public function _construct(){
        helper(["form", "url"]);
    }

    public function listado() {
        $session = session();
        $model_user = new usuario_model();
        $data['usuarios'] = $model_user->obtener_usuarios();
        $data[ "titulo"]="listado";
        echo view("front/head",$data);
        echo view('front/navbar');
        echo view('back/usuario/listado', $data);
    }

    public function create() {
        /* $data[ "titulo"]="registro";
        echo view("Front/head",$data); */
        echo view("back/usuario/Registro");
    }

    public function create_usuario()
    {
        $session = session();
        $userModel = new usuario_model();
        $user = $userModel->find(session()->get('user_id'));
        echo view("front/navbar");
        return view('back/usuario/crearusuario', ['user' => $user]);
    }

    public function edit_profile()
    {
        $userModel = new usuario_model();
        $user = $userModel->find(session()->get('user_id'));

        return view('back/usuario/EditarPerfil', ['user' => $user]);
    }

    public function formValidation() {

        $input = $this->validate([ 
            "nombreyapellido" => "required|min_length[3]|max_length[100]",
            "cuit" => "required|min_length[3]|max_length[25]",
            "usuario" => "required|min_length[3]",
            "email" => "required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]",
            "pass" => "required|min_length[3]|max_length[10]",
        ],
    );
         $formModel = new usuario_model();

         if (!$input) {
            /* $data[ "titulo"]="registro";
            echo view("Front/head",$data); */
            return view('back/usuario/Registro', ["validation" => $this->validator]);

         } else {
           $formModel->save([
                'nombreyapellido' => $this->request->getVar('nombreyapellido'),
                'cuit' => $this->request->getVar('cuit'),
                'usuario' => $this->request->getVar('usuario'),
                'email' => $this->request->getVar('email'),
                'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT)
            ]);

            // Flashdata funciona solo en redirigir la función en el controlador en vista de carga.
    session()->setFlashdata('success', 'Usuario registrado con éxito');
    if(!empty(session()))
       return $this->response->redirect('crearusuario');

    return $this->response->redirect('login');
}

    }

    public function ver_usuario($id_usuario){
        $model_user = new usuario_model();
        $data['usuario'] = $model_user->buscar_usuario($id_usuario);
        $dato['titulo'] = 'Editar Usuario'; 
            $session = session();
            $nombre = $session->get('usuarios'); 
            $perfil = $session->get('perfil_id');
            $data['perfil_id'] = $perfil;
            echo view("front/head",$dato);
            echo view('front/navbar');
            echo view('back/usuario/ver_usuario',$data); 
            echo view('front/footer');
        }

        public function editar($id_usuario)
        {
        /*     echo($id_usuario);
            exit("stop"); */
            $model = new usuario_model();
            $data['usuario'] = $model->buscar_usuario($id_usuario);
            $dato['titulo'] = 'Editar Usuario'; 
            $session = session();
            $nombre = $session->get('usuarios'); 
            $perfil = $session->get('perfil_id');
            $data['perfil_id'] = $perfil;
            echo view("front/head",$dato);
            echo view('front/navbar');
            echo view('back/usuario/editar',$data);
            echo view('front/footer');

            //echo view('ruta de la vista',$variableAUsarEnLaVista);

        }

        public function modificar_usuario() {
            $validacion = $this->validate([
                'nombreyapellido' => 'required',
                'cuit' => 'required',
                'usuario' => 'required',
                // 'email' => 'required',
                // 'password' => 'required'
            ]);
            
        
            if ($validacion) {
                $datos = [
                    'id_usuario' => $this->request->getPost('id_usuario'),
                    'nombreyapellido' => $this->request->getPost('nombreyapellido'),
                    'cuit' => $this->request->getPost('cuit'),
                    'usuario' => $this->request->getPost('usuario'),
                    // 'email' => $this->request->getPost('email'),
                    // 'pass' => $this->request->getPost('password')
                ];
        
                $id_usuario = $this->request->getPost('id_usuario');
                $model = new \App\Models\usuario_model();  // Asegúrate de que el namespace sea correcto
                $model->modificar_usuario($id_usuario, $datos);
                
        
                session()->setFlashdata('mensaje', 'Registro modificado satisfactoriamente');
                return redirect()->to('listado_usuario');
        
            } else {
                $error = $this->validator->listErrors();
                session()->setFlashdata('mensaje', $error);
                return redirect()->to('listado_usuario');
            }
        }
        public function borrar_usuario($idUsuario)
        {
            $model = new usuario_model();
            
            // Llamar al método deleteUsuario del modelo
            if ($model->borrar_usuario($idUsuario)) {
                session()->setFlashdata('mensaje', 'Usuario borrado satisfactoriamente');
            } else {
                session()->setFlashdata('mensaje', 'No se pudo borrar el usuario');
            }
    
            return redirect()->to("listado_usuario");
        }

}   

