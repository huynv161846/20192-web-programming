<?php

class Page {
    private $page;
    private $title;
    private $year;
    private $copyright;

    function __construct($title, $year, $copyright){
      $this->page = '';
      $this->title = $title;
      $this->year = $year;
      $this->copyright = $copyright;
    }
    
    function addHeader(){
        $this->page .= "<html><head><title>$this->title</title></head>";
    }
    function addContent($content){
        $this->page .="<body>$content</body>";
    }
    function addFooter(){
        $this->page .= "<footer><p>$this->copyright  $this->year<p></footer></html>";
    }
    function get(){
        return $this->page;
    }
    
}

$page1 = new Page("Page1", "2020", "@Page");
$page1->addHeader();
$page1->addContent("Test page");
$page1->addFooter();

echo $page1->get();

$page2 = new Page("Page2", "2021", "@Page");
$page2->addHeader();
$page2->addContent("Test page eeeeeeeeeeeeeeeeeeeeee");
$page2->addFooter();

echo $page2->get();
