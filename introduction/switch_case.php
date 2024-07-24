

<?php
    $day = 'friday';
    switch ($day){
        case 'Monday':{
            echo '<h1>Wear uniform</h1>';
        }break;
        case 'Saturday':{
            echo '<h1>Wear T-shirt</h1>';
        }break;
        case 'Sunday':{
            echo '<h1>Wear simple</h1>';
        }break;
        default:{
            echo '<h1>Out of case</h1>';
        }
    }
?>