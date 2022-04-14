<?php

include("conection.php");

if (isset($_POST['registrationForm'])){
    
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $secondSurname = $_POST['secondSurname'];
    $groupNumber = $_POST['groupNumber'];

    $query = "INSERT INTO students(name, surname, secondSurname, groupNumber) VALUES ('$name', '$surname','$secondSurname', '$groupNumber')";

        $result = mysqli_query($con, $query);

        if (!$result){
            die("Ha ocurrido un error al guardar los datos. Redirigiendo...");
        }
     
        echo "Registro guardado con éxito. Redirigiendo...";

       header("location: ./index.php");

}else{
    echo "Error al procesar el formulario...";
}

?>