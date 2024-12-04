<?php
defined('C5_EXECUTE') or die('Access Denied.');

use Concrete\Core\Area\GlobalArea;
use Concrete\Core\Support\Facade\Application;
use Concrete\Core\Validation\CSRF\Token;
use Concrete\Core\User\User;

$view->inc('elements/header_top.php');
?>

<header>
    <div class="container">
        <div class="row">
            <div class="col logo">
                <?php
                $a = new GlobalArea('Logo');
                $a->setBlockLimit(1);
                $a->display();
                ?>
            </div>
            <div class="col">
                <?php
                $a = new GlobalArea('Top Right');
                $a->setBlockLimit(1);
                $a->display();
                ?>
            </div>
        </div>
    </div>
</header>
<div class="nav-container container">
    <div class="row">
        <div class="col-md-12">
            <?php
            $a = new GlobalArea('Navigation');
            $a->setBlockLimit(1);
            $a->display($c);
            ?>
        </div>
    </div>
</div>
