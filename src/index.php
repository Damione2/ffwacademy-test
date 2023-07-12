<?php 
namespace Damyan\FfwacademyTest\Src;

require_once '../vendor/autoload.php';


use \FileUpload\Validator\Simple as SimpleFileValidator;

$validator = new SimpleFileValidator('2M', ['image/php', 'image/jpg']);


var_dump($validator);
