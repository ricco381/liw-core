<?php
use liw\core\Liw;
?>

<div id="develop_button">Time:<?=' ' . sprintf("%d", (microtime(true)-TIME)*1000) . 'ms';?></div>

<div id="develop" toggle="false">
    <div id="show_classes">
        <?php
        echo "<pre>";
        print_r(Liw::$dev['classes']);
        echo "</pre>";
        ?>
    </div>

    <div id="show_get">
        <?php
        echo "<pre>";
        print_r($_GET);
        echo "</pre>";
        ?>
    </div>

    <div id="show_post">
        <?php
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
        ?>
    </div>

    <div id="show_requests">
        <?php
        echo "<pre>";
        print_r(Liw::$dev['requests']);
        echo "</pre>";
        ?>
    </div>

    <div id="show_session">
        <?php
        echo "<pre>";
        if(isset($_SESSION)) print_r($_SESSION);
        echo "</pre>";
        ?>
    </div>

    <table>
        <tr>
            <td></td>
            <td id="button_show_requests">Request count: <?=count(Liw::$dev['requests']);?></td>
            <td class="dp_label">DEVELOP</td>
            <td id="button_show_get">$_GET: <?=empty($_GET)?"false":"true";?></td>
            <td id="button_show_var">$var: <div id="close_table"></div></td>
        </tr>
        <tr>
            <td></td>
            <td id="button_show_classes">Class count: <?=count(Liw::$dev['classes']);?></td>
            <td class="dp_label">PANEL</td>
            <td id="button_show_post">$_POST: <?=empty($_POST)?"false":"true";?></td>
            <td id="button_show_session">$_SESSION: <?=Liw::$user['login']?"true":"false";?></td>

        </tr>
    </table>

</div>