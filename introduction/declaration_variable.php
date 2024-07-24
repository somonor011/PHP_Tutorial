<!--
    Declaration variable in php
    - ប្រកាស variable in php គេសរសេរ $variable 
        ex: $name = "Broo"
    - ហៅមកប្រើក្នុងករណីប្រើ single qoute '.$variableName.'
    - ហៅមកប្រើក្នុងករណីប្រើ double qoute $variableName
    - បើយើងប្រើ single qoute styleនៅក្នុងtag ត្រូវប្រើ double qoute 
        ex: echo '<h1 style=""></h1>'
    - បើយើងប្រើ double qoute styleនៅក្នុងtag ត្រូវប្រើ single qoute 
        ex: echo "<h1 style=''></h1>"
-->

<?php
    echo '<h1 style="color:red">Declaration Variable in PHP</h1>';
    $name = 'Somonor';
    $age = 18;
    // ករណី ''
    echo '<h2 style="color:blue">My name is '.$name.'</h2>';
    // ករណី ""
    echo "<h2 style='color:green'>I'm $age years old</h2>";
?>