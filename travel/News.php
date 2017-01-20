<?php
include("iNews.php");
class News implements iNews
{
var $title;
var $text;

function __construct($title,$text)
{
	$this->title = $title;
	$this->text = $text;
}
public function getArticleText()
{
	echo $this->text;
}
public function getArticleTitle()
{
echo $this->title;	
}
public function changeText($text)
{
	$this->text = $text;
}
public function changeTitle($title)
{
	$this->title = $title;
}
}
?>