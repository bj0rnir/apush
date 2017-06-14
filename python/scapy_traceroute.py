#!/usr/bin/python
import os, sys
from scapy.all import *

host = sys.argv[1]
ttl = int(sys.argv[2])
ports = []
i = 3
while i < len(sys.argv):
	ports.append(int(sys.argv[i]))
	i += 1

res, unans = traceroute([host], dport=ports, maxttl=ttl)
res.graph(target="> gg.svg")
print "ok"
