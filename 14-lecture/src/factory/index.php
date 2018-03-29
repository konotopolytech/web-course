<?php
require_once("ButtonFactory.php");

echo ButtonFactory::createButton('add')->getHtml() . "\n";
echo ButtonFactory::createButton('save')->getHtml() . "\n";
echo ButtonFactory::createButton('cancel')->getHtml() . "\n";

