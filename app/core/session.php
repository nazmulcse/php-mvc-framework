<?php
session_start();
function debug($data){
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}