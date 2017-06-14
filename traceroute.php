<?php
    function traceroute($host, $ttl, $ports){
        $script = "sudo nohup python /var/www/html/TCPTraceroute/scapy_traceroute.py 101.109.32.86 30 80 &";
        system("cd /usr/lib/cgi-bin");
        echo exec("sudo /var/www/html/TCPTraceroute/scapy_traceroute.py 101.109.32.86 30 80 ");
        
        }
    $host = $_GET["host"];
    $ttl = $_GET["ttl"];
    $ports = $_GET["port"];
    traceroute($host, $ttl, $ports);
?>