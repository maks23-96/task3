<?php
include("config.php");
include('libs/FileReader.php');

$stream = new FileReader("lines.txt");
$stream->ReadAllLine();
$stream->ReadAllSymbol();
$stream->ReplaceSymbol();
$stream->ReplaceLine();

include('templates/index.php');
?>