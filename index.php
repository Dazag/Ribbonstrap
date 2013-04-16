<?php
/**
 * @name Ribbonstrap
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
        <link type="text/css" rel="stylesheet" href="static/ribbon-default.css">
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>        
        <script type="text/javascript">
            !window.jQuery && document.write(unescape('%3Cscript src="static/jquery-1.9.1.min.js"%3E%3C/script%3E'));
        </script>
    </head>
    <body>

        <!--Here the structure starts-->
        <div class="sprite"></div>
        <div class="ribbon" unselectable="on">
            <p class="ribbon-title" unselectable="off">Nombre del Documento - &copy Ribbonstrap 2013</p>
            <ul class="ribbon-tabs">
                <li class="main-tab"><a href="#main" data-toggle="tab">Archivo</a></li>
                <li class="active"><a href="#general" data-toggle="tab">General</a></li>
                <li><a href="#insert" data-toggle="tab">Insertar</a></li>
                <li><a href="#options" data-toggle="tab">Opciones</a></li>
                <li><a href="#info" data-toggle="tab">Información</a></li>
                <li><a href="#help" data-toggle="tab">Ayuda</a></li>
                <li class="context-tab"><a href="#images" data-toggle="tab">Imágenes</a></li>
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
                <div id="general" class="ribbon-pane active">  
                    <div class="ribbon-group">
                        <select class="ribbon-btn">
                            <option>Arial</option>
                            <option>Helvetica</option>
                            <option>Ribbon-Sans</option>
                            <option>Times New Roman</option>
                        </select>
                        <select class="ribbon-btn">
                            <option>12</option>
                            <option>13</option>
                            <option>14</option>
                            <option>15</option>
                        </select>
                        <div class="ribbon-btn">                            
                            <i class="text-enlarge"></i><span>Nombre</span>
                        </div>
                    </div>                    
                    <div class="ribbon-separator"></div>
                    <div class="ribbon-group">
                        <div class="ribbon-btn">Botón</div>
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
                <div id="images" class="ribbon-pane">
                    <div class="ribbon-group">

                    </div>
                </div>
            </div>
        </div>
        <div class="ribbon-pages">
            <ul class="ribbon-tabs">
                <li class="active"><a data-toggle="page">chuleta1.txt</a></li>
                <li><a>chuleta2.txt</a></li>
                <li><a>chuleta3.txt</a></li>
            </ul>
            
            
            
            
            <div class="ribbon-editor">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac est nisi, vitae ultricies augue. 
                Quisque nisl ipsum, semper vel tristique sit amet, hendrerit vel magna. Pellentesque congue metus mattis lorem tempor vehicula. Donec placerat fringilla consectetur. 
                Aliquam tellus ligula, pretium id volutpat non, dapibus vitae mi. 
                Nam mauris odio, congue ut vestibulum ac, mollis a dolor. Vivamus non pellentesque est. Nullam volutpat bibendum arcu quis malesuada. 
                Sed a nisl condimentum erat facilisis placerat. Aliquam vel cursus nibh. Nam dignissim risus id risus aliquam elementum. 
                Vestibulum sed nibh ac est dapibus convallis non sit amet elit. Ut libero tellus, pretium id laoreet eu, placerat non sem.
            </div>
        </div>
        
        
        <div class="ribbon-pages">
            <ul class="ribbon-tabs tabs-below">
                <li class="active"><a data-toggle="page">Page 1</a></li>
                <li><a>Page 2</a></li>
                <li><a>Page 3</a></li>
            </ul>
        </div>
        <div class="ribbon-foot">
            <ul class="ribbon-tabs">
                <li class="active"><a>Prueba</a></li>
            </ul>
        </div> 


        <!--Load javascripts -->
        <script type="text/javascript" src="static/ribbon.js"></script>
        <script type="text/javascript" src="static/jquery.mousewheel.min.js"></script>
        <script type="text/javascript">
            $('.ribbon').ribbon();
            $('.ribbon-pages').ribbon({
                disable_scroll: true
            });
            $('.ribbon-foot').ribbon();
        </script>
    </body>

</html>