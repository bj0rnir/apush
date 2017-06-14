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
                $(".button").button();
                
                getFileList();
                $('#runbtn').click(function(){
                    
                    tracerouteAJAX();
                    getFileList();
                });
                $('#speed').change(function(){
                    var $file = $("option").filter(":selected").text();
                    console.log($file);
                    getSVG($file);
                });
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
                display: inline-block;
                width: 50%;
                float: right;
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
        </style>
        <title></title>
    
    </head>
    <body>
       
            <fieldset id="traceroute">
                <legend>TCP Traceroute</legend>
                <h2>Host: </h2><input id="host" type="text"></input><br><br>
                    <fieldset>
                        <legend>Ports</legend>
                    <label for="port80">80</label>
                    <input checked="true" class="checkbox" type="checkbox" name="port80" id="port80">
                    <label for="port443">443</label>
                    <input class="checkbox" type="checkbox" name="port443" id="port443">
                    <label for="port22">22</label>
                    <input class="checkbox" type="checkbox" name="port22" id="port22">
                    <label for="port21">21</label>
                    <input class="checkbox" type="checkbox" name="port21" id="port21">
                    <label for="port8080">8080</label>
                    <input class="checkbox" type="checkbox" name="port8080" id="port8080">
                    <input class="customportfield" type="number" for="port21">
                    <input class="checkbox customportcheck" type="checkbox" name="port21" id="customport1">
                    <button onclick="newCustomPort()" id="portadd">+</button>
                    </fieldset><br>
                <h2>TTL: <h2><input  id="ttl" value="30" type="number"></input><br><br>
                        <button id="runbtn" class="button" type="button">Run</button>
                </fieldset>
        </div>
        <div id="results">
        <fieldset id="field">
            <legend>View Results</legend>
            <label for="speed">Select a file</label>
            <select name="speed" id="speed">
                
            </select>
            <img id="svgimg" src="saved/new.svg">
        </fieldset>
        </div>
    </body>
</html>
