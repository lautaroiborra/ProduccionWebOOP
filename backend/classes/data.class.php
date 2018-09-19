<?php
class JSON
{

    //Funcion para levantar y leer json
    function FetchUser($nameUser)
    {
        $file_name = "../users.json";
        $file = fopen($file_name, 'r');
        $data = json_decode(fread($file, filesize($file_name)));
        foreach ($data as $elemento) {
            if ($nameUser == $elemento->name) {
                echo 'Tengo que retornar un objeto usuario con sus atributos';
                //retornar el usuario con sus datos encapsulados
                //Si se encuentra el user, creamos un usuario
                //$user = new User($valor['username'], $valor['hash'], $valor['salt']);
                //return $user;
            }
        }
        fclose($file);
    }

    function CreateUser($user){
            $file_name = "users.json";
            $file = fopen($file_name, 'r');
            $data = json_decode(fread($file, filesize($file_name)));
            /*Hardcodeo un array de un logueo(user) que voy a recibir por parametro.
            Se testea su introduccion dentro del array data(json.decode) con exito.
            Falta agregar los \n para que se vea con orden.
            Inconveniente al intentar escribir el users.json, ya que lo escribe por fuera
            de los logueos registrados.
            */
            $usu=array(
                "UsuarioNuevo"=>
                    array(
                        "NOMBRE"=>"NICOLAS",
                        "MAIL"=>"NUEVOMAIL")
            );
            //var_dump($usu);

            $usu = 'NuevoUsuario';
            $datosUsuario = array();
            $datosUsuario['name'] = $usu ;
            $data->NuevoRegistro = $datosUsuario;
            //var_dump($data);

            $algo = json_encode($data);
            var_dump($algo);
            //fwrite($file, $salvar);

            fclose($file);
        }
}

 function fileToArray($file){
        $fileData = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES); //Lee entero el archivo y lo guarda en una variable como un array. Tiene un flag para que ignore las líneas vacías, no debería pasar pero bueno, puede pasar :P
        $logs = [];
        foreach ($fileData as $data) {
            list($username, $action, $date) = explode(":", $data); //le asigna a las variables de parámetro de list(), lo que devuelve explode(). explode() separa un string en base a un carácter
            $logs[] = [
                'name' => $username,
                'action' => $action,
                'date' => $date
            ];
        }
        return $logs; //Devolvemos el array multidimensional de los logs
    }
    function pushLog($file, $data){
        $data .= "\n";
        file_put_contents($file, $data, FILE_APPEND);
    }
    
    function isEmpty($directory){ //Esta función chequea si un directorio está vacío
 
        return (count(scandir($directory)) <= 2); //El 2 es porque puede haber un ".DSTORE" o un ".."
    }

   function fetchData($filePath){
        $file = fopen($filePath, 'r');
        $data = json_decode(fread($file, filesize($filePath)));
        fclose($file);
        return $data;
    }
    
    function fetchDataAssoc($filePath){
        $file = fopen($filePath, 'r');
        $data = json_decode(fread($file, filesize($filePath)), true);
        fclose($file);
        return $data;
    }


/*
class Data{
    private $path;

    public function __construct($path){
        $this->path = $path;
}

    public function readData($field, $value){
        $handle = fopen($this->path, 'r');
        $data = fread($handle);
        $data = json_decode($data, true);

        foreach($data as $key => $value){
            //if()
        }
    }


}
*/
