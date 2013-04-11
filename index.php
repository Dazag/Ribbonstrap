<?php
/**
 * @name Chuletator
 * @link http://www.chuletator.net Library created for an online text editor (chuletator) based in
 * the Ribbon Interface. * 
 * @author David Zamora Gutiérrez <david@ideatic.net>
 * @copyright (c) 2013, Ideatic España 
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Ribbonstrap</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="shortcut icon" href="static/images/app_icon.ico">

        <!--Check the route to css and js is right-->
        <link type="text/css" rel="stylesheet" href="static/ribbon.css">
        <link type="text/css" rel="stylesheet" href="static/ribbon-blue.css">
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    </head>
    <body>

        <!--Here the structure starts-->
        <div class="ribbon" unselectable="on">
            <ul class="ribbon-tabs">
                <li class="main-tab"><a href="#main" data-toggle="tab">Archivo</a></li>
                <li class="active"><a href="#general" data-toggle="tab">General</a></li>
                <li><a href="#insert" data-toggle="tab">Insertar</a></li>
                <li><a href="#options" data-toggle="tab">Opciones</a></li>
                <li><a href="#info" data-toggle="tab">Información</a></li>
                <li><a href="#help" data-toggle="tab">Ayuda</a></li>
            </ul>
            <div class="ribbon-content">
                <div id="main" class="ribbon-pane">
                    <div class="ribbon-group">
                        <div class="ribbon-btn"></div>
                    </div>
                    <div class="ribbon-group">
                        <div class="ribbon-btn"></div>
                    </div>
                    <div class="ribbon-group">
                        <div class="ribbon-btn"></div>
                    </div>
                </div>
                <div id="general" class="ribbon-pane">  
                    <div class="ribbon-group">
                        <div class="ribbon-btn"></div>
                    </div>
                    <div class="ribbon-group">
                        <div class="ribbon-btn"></div>
                    </div>
                    <div class="ribbon-group">
                        <div class="ribbon-btn"></div>
                    </div>
                </div>
                <div id="insert" class="ribbon-pane">   
                    <div class="ribbon-group">
                        <div class="ribbon-btn"></div>
                    </div>                    
                </div>
                <div id="options" class="ribbon-pane">   
                    <div class="ribbon-group">
                        <div class="ribbon-btn"></div>
                    </div>                    
                </div>
                <div id="info" class="ribbon-pane">     
                    <div class="ribbon-group">
                        <div class="ribbon-btn"></div>
                    </div>                  
                </div>
                <div id="help" class="ribbon-pane">  
                    <div class="ribbon-group">
                        <div class="ribbon-btn"></div>
                    </div>                  
                </div>
            </div>
        </div>
        <div class="pages">
            <ul class="ribbon-tabs">
                <li><a  id="file-0">chuleta1.txt</a></li>
                <li><a  id="file-0">chuleta2.txt</a></li>
                <li><a  id="file-0">chuleta3.txt</a></li>
            </ul>
        </div>

        <!--Load javascripts -->        
        <script type="text/javascript" src="static/ribbon.js"></script>
        <script type="text/javascript" src="static/jquery.mousewheel.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.ribbon').ribbon();
                $('.pages').ribbon();
            });</script>
    </body>

</html>