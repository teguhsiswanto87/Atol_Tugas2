<?php
include "../config/functions.php";

$dataModule = getListModule();
foreach ($dataModule as $data) {
    $module_name = str_replace(' ', '', strtolower($data['module_name']));
    ($_GET['m'] == $module_name) ? $active = "active": $active = "";    
    echo "<a href='$data[link]' class='item $active' style='text-transform:capitalize;'>
           <i class='$data[icon] icon'></i> $data[module_name]
        </a>";
}

