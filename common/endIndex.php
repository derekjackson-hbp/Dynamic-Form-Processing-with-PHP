<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
    <title>Index Complete</title>
    <style>
    td.term2 {
    font-weight: bold;
    font-size: 1.2em; 
    width: 40px;  
    }
    tr + td {
    width: 50px;
    }
    </style>
    </head>
    <body>
    <?php
   


copy ( "../index/test.xml", "../common/final.xml");
$line = '<?xml-stylesheet type="text/xsl" href="../common/transform.xsl"?>';

$contents = file_get_contents("../common/final.xml");
$contents = str_replace($line, '', $contents);
file_put_contents("../common/final.xml", $contents);

$xsl = new DOMDocument();
$xsl->load("../common/transform.xsl");
$inputdom = new DomDocument();
$inputdom->load("../common/final.xml");

$proc = new XSLTProcessor();
$xsl = $proc->importStylesheet($xsl);
$proc->setParameter(null, "", "");

$newdom = $proc->transformToDoc($inputdom);

file_put_contents("../common/index.html", $newdom);

// $fr = fopen('../index/test.xml', 'r+');
//  fseek($fr, -8, SEEK_END);
//  fwrite ($fr, "\n <indexGroup> \n");
  
//  fclose($fr);


		?>
        <a target="blank" href="../index/test.xml">review XML<a/></br>
        <a target="blank" href="../common/final.xml">review raw XML<a/></br>
       
   
    </form>
    </body>
    </hmtl>