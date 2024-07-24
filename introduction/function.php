<!--
    Function: 
        + Non return function:
            - no parameter
            - has parameter
        + Renturn function :
            - no parameter
            - has parameter
-->
<?php

    // non return func no parameter
    function sayHello(){
        echo '<h1 style="color:blue">Hello sir</h1>';
    }
    sayHello();

    // non return func has parameter
    function login( $email, $password ){
        if($email=='somonorhong@gmail.com'){
            if($password==31012006){
                echo '<h1 style="color:green">Login successfully</h1>';
            }else{ // else របស់​ password
                echo '<h1 style="color:red">Wrong password</h1>';
            }
        }else{ // else របស់​ email
            echo '<h1 style="color:red">Wrong email</h1>';
        }
    }
    login('somonorhong@gmail.com',31012006);
?>