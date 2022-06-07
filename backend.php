<?php

if(isset($_POST['btn'])){
    if(!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['second-password'])){
        if($_POST['password'] == $_POST['second-password']){
            $name = trim($_POST['name']);
            $surname = trim($_POST['surname']);
            $email = $_POST['email'];
            $valid_email = filter_var($email, FILTER_VALIDATE_EMAIL);
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

            $db_winpax = mysqli_connect("localhost", "root", "", "prueba_winpax");
            $busqueda_email = "SELECT * FROM users WHERE email = '$email'";
            $email = mysqli_real_escape_string($db_winpax, $email);
            $respuesta_email = mysqli_query($db_winpax, $busqueda_email);
            $filas = mysqli_num_rows($respuesta_email);

            if(($valid_email == true ) && (!$filas)){
                 echo "Email válido!";   
            }else{
                ?>
                    <h3>El email ingrsado no corresponde con un formato válido o ya está registrado en el sistema</h3>
                    <h3>Intenta con uno otro email!</h3>
                    <button><a href="index.php">Intentar con otro!</a></button> 
                <?php
                die();
            }

            
            $consulta = "INSERT INTO users(name, surname, email, password) VALUES ('$name', '$surname', '$email','$password')";
            $name = mysqli_real_escape_string($db_winpax, $name);
            $surname = mysqli_real_escape_string($db_winpax, $surname);
            $email = mysqli_real_escape_string($db_winpax, $email);
            $password = mysqli_real_escape_string($db_winpax, $password);
            $resultado = mysqli_query($db_winpax, $consulta);

            if($resultado){
                ?>
                <h3>¡Te has inscripto correctamente!</h3>
                <button><a href="index.php">Cargar otro usuario</a></button>
                <?php
            }else{
                ?>
                    <h3>El email ingrsado no corresponde con un formato válido o ya está registrado en el sistema</h3>
                    <button><a href="index.php">Intentar con otro!</a></button> 
                <?php
            }
        }else{
            ?>
            <h3>¡Las contraseñas no coinciden!</h3>
            <button><a href="index.php">Intentar nuevamente</a></button>
            
            <?php
        }
    }

}

