<?php namespace App\Controllers; 
use App\Models\Usuarios;
class Home extends BaseController
{
    public function index()
    {
        $mensaje = session('mensaje');
       return view('login',["mensaje"=>$mensaje]);
   }

public function inicio(){
    return view('inicio');
}

public function login(){
    
    $usuario = $this->request->getpost('usuario');
    $password = $this->request->getpost('password');
    $Usuario = new Usuarios();

    $datosUsuario = $Usuario->obtenerUsuario(['usuario' => $usuario]);

    if (count($datosUsuario) > 0 && $datosUsuario[0]['password']==$password) {
        
        
        $data = [
            "usuario" => $datosUsuario[0]['usuario'],
            // "type" => $datosUsuario[0]['type']
        ];
            
            $session = session();
            $session->set($data);

            return redirect()->to(base_url('/inicio'))->with('mensaje','1');

    }else {
        return redirect()->to(base_url('/'))->with('mensaje','0');
    }

} 
public  function salir(){
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('/'));
    }
}
//     public function about()
//     {
//         return view('about');
//     }


//     public function appointment () {
//         return view("appointment");
//     }


//  public function cita()
//     {
//        $database = "barberia";
//         $servername = "localhost";
//         $username = "root";
//         $password = "";

//         $conn = MySQLi_connect($servername, $username, $password);

//         mysqli_select_db($conn, $database) or die ("Ninguna base de datos");
        
//         if (isset($_POST["first_name"]) == TRUE) {
//             $nombre = $_POST["first_name"];
//             $apellido= $_POST["last_name"];
//             $correo = $_POST["email"];
//             $telefono = $_POST["phone"];
//             $hora = $_POST["tiempo"];
           

//             $accion = "INSERT INTO cita (nombre,apellido,correo,telefono,hora) values ('$nombre','$apellido','$correo',' $telefono','$hora')";
//             MySQLi_query($conn, $accion) or die(mysql_error());

//             return redirect()->to(base_url().route_to('appointment'));
//         }

//     }


// public function barbers()
//     {
//         return view('barbers');
//     }

//     public function entrar()
//     {
//         $database = "barberia";
//         $servername = "localhost";
//         $username = "root";
//         $password = "";

//         $conn = MySQLi_connect($servername, $username, $password);

//         mysqli_select_db($conn, $database) or die ("Ninguna base de datos");
        
//         if (isset($_POST["first_name"]) == TRUE) {
//             $nombre = $_POST["first_name"];
//             $apellido= $_POST["last_name"];
//             $correo = $_POST["email"];
//             $telefono = $_POST["phone"];
            


//             $accion = "INSERT INTO contacto (nombre,apellido,correo,telefono) values ('$nombre','$apellido','$correo',' $telefono' )";
//             MySQLi_query($conn, $accion) or die(mysql_error());

//             return redirect()->to(base_url().route_to('contact'));
//         }

        
//     }

//     public function services()
//     {
//         return view('services');
//     }
  
//  public function contact()
//     {
//         return view('contact');
//     }
