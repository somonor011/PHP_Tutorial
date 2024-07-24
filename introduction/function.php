<!--
    Function: 
        + Non return function:
            - no parameter
            - has parameter
        + Renturn function :
            - no parameter
            - has parameter
    * return func has param can calculate: return func no param with return func no param
                                         : return func has param with return func no param
                                         : return func has param with return func has param
        
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

    // return func no parameter
    function sum(){
        return 10+10;
    }
    echo '<h1 style="color:gray">10 + 10 = '.sum().'</h1>'; // return func យើងត្រូវប្រើ​ echo ទើបហៅវាបាន

    // return func has parameter
    function dev($num1,$num2){
        return $num1 / $num2;
    }
    echo '<h1>Num1 / Num2 = '.dev(10,5).'</h1>';

    function sumOfFunc( $num_1, $num_2 ){
        return $num_1 + $num_2;
    }
    echo '<h1 style="color:yellow">sum() + dev() = '.sumOfFunc(sum(),dev(10,5)).'</h1>';

?>