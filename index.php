<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        
        <script type="text/javascript" src="jquery/external/jquery/jquery.js"></script>
        <script type="text/javascript" src="jquery/jquery-ui.js"></script>
        <link rel="stylesheet" href="jquery/jquery-ui.theme.css">
        <script type="text/javascript" src="ajax.js"></script>
        <script>
            $(document).ready(function(){
                $(".tabs").tabs();
            });
        </script>
        <style>
            body {background-color: #2a2a2a;}
            li {
                height: 30px;
                font-size: 20px;
                padding-bottom: 12px;
                display: inline;
                padding-right: 5px;
                padding-left: 5px;
                padding-top: 5px;
            }
            ul {
                margin: 0px;
                padding-top: 10px;
                padding-bottom: 10px;
            }
            .tabs {
                display: block;
                width: 100%;
                
            }
            h2 {display: inline;}
            img {
                width: 100%;
                height: 100%;
            }
            #traceroute {
                width: 100%;
              
            }
            #svgimg{max-height: 2000px;}
            #field {width: 100%;}
            #results {width: 100%; float: left; display: inline-block;}
            fieldset {border-radius: 5px;}
            label {
                padding-left: 10px;}
            .customportfield{width: 60px;}
            h3 {
                font-size: 30px;
                text-align: center
            }
            #supporters {
            width: 30%;
                float: left;
                display: inline-block;
            }
            #opposers {
                float: right;
                display: inline-block;
                width: 30%;
            }
            #scopes {
                width: 100%;
            height: 100%;
            }
        </style>
        <title></title>
    
    </head>
    <body>
        <div class="tabs">
              <ul>
                <li><a href="#scopes">Scopes Trial</a></li>
                <li><a href="#fundvsmod">Fundamentalism vs. Modernism</a></li>
                <li><a href="#1920society">1920's Society</a></li>
              </ul>
              <div id="scopes">
                  <h3>The Scopes Trial</h3>
                    <fieldset id="supporters"></fieldset>
                    <fieldset id="opposers"></fieldset>
            </div>
            <div id="fundvsmod"><h3>Fundamentalism vs. Modernism</h3></div>
            <div id="1920society"><h3>Society and Innovation of the 1920s</h3></div>
            </div>
    </body>
</html>
