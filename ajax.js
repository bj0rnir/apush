/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function getFileList(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState === 4 && this.status === 200) {
        document.getElementById("speed").innerHTML = "";
        document.getElementById("speed").innerHTML = (this.responseText);
    }
  };
  xhttp.open("GET", "getfiles.php", true);
  xhttp.send();
}

function getSVG($file){
    $svg = "saved/" + $file;
    $("#svgimg").attr("src", $svg);
}

var $customports = 1;

function newCustomPort(){
    $customports++;
    var $newcustomport = $("<input class=\"customportfield\" type=\"number\" for=\"customport\">");
    $newcustomport.insertAfter(".customportfield");
}

function tracerouteAJAX(){
    var $host = $("#host").value;
    var $ttl = $("#ttl").value;
    console.log($host);
    console.log($ttl);
    var $request = "traceroute.php?host=" + $host + "&ttl=" + $ttl + "&port=80";
    var xhttp = new XMLHttpRequest();
    
    xhttp.open("GET", $request, true);
    xhttp.send();
    
}