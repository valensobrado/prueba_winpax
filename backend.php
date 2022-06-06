<?php

if(isset($_POST['btn'])){
    if(!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['second-password'])){
        if($_POST['password'] == $_POST['second-password']){
            $name = trim($_POST['name']);
            $surname = trim($_POST['surname']);
            $email = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

            $db_winpx = mysqli_connect("localhost", "root", "", "prueba_winpax");
            $consulta = "INSERT INTO users(name, surname, email, password) VALUES ('$name', '$surname', '$email','$password')";
            $resultado = mysqli_query($db_winpx, $consulta);

            if($resultado){
                ?>
                <h3>¡Te has inscripto correctamente!</h3>
                <button><a href="index.php">Cargar otro usuario</a></button>
                <?php
            }else{
                ?>
            <h3>El email ingresado ya está registrado en nuestro sistema
                <button><a href="index.php">Intentar con otro!</a></button>
                
            </h3>
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

