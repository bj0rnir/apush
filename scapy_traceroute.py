#!/usr/bin/python
import os, sys
from datetime import datetime
from scapy.all import *

host = sys.argv[1]
ttl = int(sys.argv[2])
ports = []
i = 3
while i < len(sys.argv):
	ports.append(int(sys.argv[i]))
	i += 1

res, unans = traceroute([host], dport=ports, maxttl=ttl, retry=2)
out = datetime.now().strftime('%Y-%m-%d__%H_%M_%S')
res.graph(target="> saved/" + out + ".svg")
