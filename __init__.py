#!/usr/bin/python2.7
import json
import sys

argv = sys.argv[1:]
post = json.loads(argv[0])
get = json.loads(argv[1])
debug = argv[2]
print debug

def debug(text):
    if debug != 'no':
        print text

if get == {"container" : "null"} :
    get = ''
if post == {"container" : "null"} :
   post = ''
   

if post != '' : # Traitement de donnee POST
    debug('Traitement de donnee POST')
else :
    debug('Non traitement de donnee POST')

if get != '' : # Traitement de donnee GET
    debug('Traitement de donnee GET')
else :
    debug('Non traitement de donnee GET')
print ('stop')