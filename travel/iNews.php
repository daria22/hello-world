<?php 
interface iNews
{
public function getArticleText();
public function getArticleTitle();
public function changeText($text);
public function changeTitle($title);
}
?>