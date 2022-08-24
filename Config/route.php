<?php
function base_url(){
    include 'folder.php';
    return sprintf(
      "%s://%s%s",
      isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
      $_SERVER['SERVER_NAME'],
      $folder_web
    );
  }


function login(){
    return base_url()."Auth/login.php";
}

function daftar(){
    return base_url()."Auth/daftar.php";
}

function Logout(){
    return base_url()."Auth/index.php?logout=true";
}


function auth(){
    return base_url()."Auth/";
}


function admin(){
    return base_url()."Admin/";
}

function home(){
    return base_url()."Home/";
}

// folder assets
function assets(){
    return base_url().'Assets/' ;
}

// folder assets
function admin_assets(){
    return base_url().'Assets/Admin/' ;
}

// follder admin css
function admin_css(){
    return assets().'Admin/dist/css/';
}

//folder admin javascript
function admin_js(){
    return assets().'Admin/dist/js/';
}

// folder admin plugins
function admin_plugins(){
    return assets().'Admin/plugins/';
}

// folder home assets
function home_assets(){
    return assets().'Home/';
}

// folder home css
function home_css(){
    return assets().'Home/assets/css/';
}

// folder home javascript
function home_js(){
    return assets().'Home/assets/js/';
}

// folder home img
function home_img(){
    return assets().'Home/assets/img';
}

// folder home img
function home_vendor(){
    return assets().'Home/vendor/';
}

// folder home img
function folder_upload(){
    return base_url().'Admin/upload/';
}

?>