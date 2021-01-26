import glob
import re

header = """ 

@prefix rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#> .
@prefix rdfs: <http://www.w3.org/2000/01/rdf-schema#> .
@prefix sc: <http://schema.org/> .
@prefix mh: <https://mahirumatic.herokuapp.com> .

<http://mahirumatic.herokuapp.com/index.ttl>
    sc:name "Imaginary World by Ichimi" ;
"""

with open("data/index.ttl", mode="w") as f:
    files = glob.glob("data/*.ttl")
    f.write(header)
    for file in files:
        term = re.findall('data/(.*).ttl', file)[0]
        f.write("    mh:term mh:"+term+" ;\n")