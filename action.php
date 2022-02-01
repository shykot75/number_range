

<?php
require_once('vendor/autoload.php');

use App\classes\NumberRange;

if( isset($_POST['submit']) ){
    $range = new NumberRange($_POST);
    $output = $range->index();

    include 'index.php';
}
else {
    header('Location: index.php');
}

