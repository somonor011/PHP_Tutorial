<!--
    - បើយើងចង់​​ opostrophe ក្នុងករណី echo ប្រើ single qoute
    យើងត្រូវសរសេរ \' 
    example: number\'s = number's
-->

<?php
    $num = 10;

    if($num > 10)
        echo '<h1>Number bigger than 10</h1>';
    else if($num==10)
        echo '<h1>The number\'s 10</h1>';
    else
        echo '<h1>The number smaller than 10</h1>';

?>