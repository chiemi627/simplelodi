# Simple LODI : Simple Linked Open Data Interface

"Simple LODI” is a PHP program which can convert RDF data to various formats. It contributes to make Linked Data.

<<<<<<< HEAD
<<<<<<< HEAD
### The development version(v2.0.0-dev) is available now.

It has below features:
- Change HTML rendering to single page application by React.
- Change CSS library from Bootstrap to Materiali-UI.
- Update RDF libraries.

You can try it in [v2.0.0-dev](https://github.com/uedayou/simplelodi/tree/v2.0.0-dev) branch.
<https://github.com/uedayou/simplelodi/tree/v2.0.0-dev>
=======
### Notice: This branch is development version(v2.0.0-dev).
It has below features:
- Change HTML rendering to single page application by React.
- Change CSS library from Bootstrap to Material-UI.
- Update RDF libraries.

Demo site is here:
<http://uedayou.net/simplelodi-v2/uedayou>
>>>>>>> v2.0.0-dev

=======
>>>>>>> c5393c3394661b7d77f9b29d25751dc5975bde63
## Input file extensions

- Turtle(.ttl)
- N-Triples(.nt)
- RDF/XML(.rdf/.xml)

## Output file extensions:

- HTML(.html)
- RDF/XML(.rdf/.xml)
- JSON(.json)
- JSON-LD(.jsonld)
- Turtle(.ttl)
- Notation3(.n3)
- N-Triples(.nt)

## Requirements:

- PHP 5.4 or later
- mod_rewrite

## Examples

<http://uedayou.net/simplelodi-v2/uedayou>

HTML  
<http://uedayou.net/simplelodi-v2/uedayou.html>

Turtle  
<http://uedayou.net/simplelodi-v2/uedayou.ttl>

RDF/XML  
<http://uedayou.net/simplelodi-v2/uedayou.xml>

JSON  
<http://uedayou.net/simplelodi-v2/uedayou.json>

JSON-LD  
<http://uedayou.net/simplelodi-v2/uedayou.jsonld>

## Installation

(1) Download "simplelodi".

(2) Put it on your web server.
    You can change the folder name as you want.

(3) Put your RDF file(Turtle, RDF/XML or N-Triples) in `data` folder.

(4) Run your browser and enter the following URL:  
`http:// ... /your-folder-name/your-file-name(file name without the extension)`

(5) You can get various kinds of files by adding the file-extension you want.

ex.

HTML  
`http://your-domain.com/your-folder-name/your-file-name.html`

Turtle  
`http://your-domain.com/your-folder-name/your-file-name.ttl`

RDF/XML  
`http://your-domain.com/your-folder-name/your-file-name.xml`

JSON  
`http://your-domain.com/your-folder-name/your-file-name.json`

JSON-LD  
`http://your-domain.com/your-folder-name/your-file-name.jsonld`


## Notice

If your Turtle file size is bigger than 10 kB, it may take a long time to load it. In this case, please convert your Turtle file to RDF/XML or N-Triples format in advance. And then please do it again.
