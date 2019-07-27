<?php
    
    function valid_username($_username)
    {
        if(!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*[5-9]).+$/i', $_username)){
            echo '<br> -is_username_valid('.$_username.') <br>';
            echo 'return false <br>';
        }else{
            echo '<br> -is_username_valid('.$_username.') <br>';
            echo 'return true <br>';
        }
    }

    function valid_password($_password)
    {
        if(!preg_match('/^[a-zA-Z0-9@=]{8,}$/i', $_password)){
            echo '<br> -is_password_valid('.$_password.') <br>';
            echo 'return false <br>';
        }else{
            echo '<br> -is_password_valid('.$_password.') <br>';
            echo 'return true <br>';
        }
    }



    echo valid_username('Xrutaf888’');

    echo valid_username('1Diana');

    echo valid_password('passW0rd=');

    echo valid_password('C0d3YourFuture!#');


?>