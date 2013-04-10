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
        <title>Chuletator | Ribbon</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="shortcut icon" href="static/images/app_icon.ico">

        <!--Check the route to css and js is right-->
        <link type="text/css" rel="stylesheet" href="static/ribbon.css">
        <link type="text/css" rel="stylesheet" href="static/ribbon-blue.css">
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    </head>
    <body>

        <!--Here the structure starts-->
        <div class="ribbon">
            <div class="ribbon-tabs">
                <span id="tab-main" class="ribbon-tab main-tab">Archivo</span>
                <span id="tab-general" class="ribbon-tab">General</span>
                <span id="tab-insert" class="ribbon-tab">Insertar</span>
                <span id="tab-options" class="ribbon-tab">Opciones</span>
                <span id="tab-info" class="ribbon-tab">Información</span>
                <span id="tab-help" class="ribbon-tab">Ayuda</span>
            </div>
            <div class="ribbon-content">
                <div id="main" class="ribbon-panel">  
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
                <div id="general" class="ribbon-panel">  
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
                <div id="insert" class="ribbon-panel">   
                    <div class="ribbon-group">
                        <div class="ribbon-btn"></div>
                    </div>                    
                </div>
                <div id="options" class="ribbon-panel">   
                    <div class="ribbon-group">
                        <div class="ribbon-btn"></div>
                    </div>                    
                </div>
                <div id="info" class="ribbon-panel">     
                    <div class="ribbon-group">
                        <div class="ribbon-btn"></div>
                    </div>                  
                </div>
                <div id="help" class="ribbon-panel">  
                    <div class="ribbon-group">
                        <div class="ribbon-btn"></div>
                    </div>                  
                </div>
            </div>
        </div>
        <div class="pages">
            <div class="ribbon-tabs">
                <span class="ribbon-tab" id="file-0">chuleta1.txt</span>
                <span class="ribbon-tab" id="file-0">chuleta2.txt</span>
                <span class="ribbon-tab" id="file-0">chuleta3.txt</span>
            </div>
        </div>

        <!--Load javascripts -->        
        <script type="text/javascript" src="static/ribbon.js"></script>
        <script type="text/javascript" src="static/jquery.mousewheel.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.ribbon').ribbon();
                $('#pages').ribbon();
            });</script>
    </body>

</html>