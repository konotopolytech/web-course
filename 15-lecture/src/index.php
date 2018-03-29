<?php
require_once "vendor/autoload.php";
// require_once "app/backend/admin/Gallery.php";
// require_once "app/backend/admin/User.php";

// require_once "app/frontend/Blog.php";
// require_once "app/frontend/User.php";

use App\backend\admin\Gallery;
use App\backend\Router;
use App\backend\services\Service;
use App\frontend\Blog;
use HelloWorld\SayHello;

$gallery = new Gallery();
echo $gallery->getName() . "\n";


$blog = new Blog();
echo $blog->getName() . "\n";
echo $blog->showGallery() . "\n";


$b_user = new App\backend\admin\User();
echo $b_user->getName() . "\n";


$f_user = new App\frontend\User();
echo $f_user->getName() . "\n";


$say = new SayHello();
echo $say->world() . "\n";