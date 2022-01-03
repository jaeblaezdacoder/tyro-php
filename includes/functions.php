<?php

/**
* ==============================================
* Returns dropdown menu based on links defined
* in config.php
* @param $menu $parentid
* ==============================================
*/

include ('includes/config.php');

function HTMLMenu($menu, $parentid = 0)
{
  $result = '';
  foreach ($menu as $item) if ($item["parentid"] == $parentid)
  {
    $result .= "<li class='link" . $item["id"] . "'><a href='" . $item["url"] . "'>" . $item["title"] . "</a>" .
    HTMLMenu($menu, $item["id"]) . "</li>\n";
  }
  return $result ?  "\n<ul>\n$result</ul>\n" : null;
}

function socialLinks ($socialIcons)
{
    $html = '';
    foreach ($socialIcons as $field => $item) {
            $html .= '<a href="'.$item['link'].'" title="' .$field . '"> <i class="fa '.$item['icon'].'"></i></a>';
    }
    echo $html;
}

function getParent($parentID)
{
include ('includes/config.php');

   $parentLink = '';
   foreach($menu as $parent) if ( $parent['id'] === $parentID )
   {
         $parentLink = ' <a href="' . $parent['url'] .'">' . $parent['title'] . '</a> <i class="fa fa-angle-double-right"></i> ';
    }
   echo $parentLink;
}

function pathMenu($url)
{
include ('includes/config.php');
  $result = '';
  foreach ($menu as $item) if ($item["url"] === $url)
  {
    if ($item["parentid"] !=0) {
		$result .= getParent($item["parentid"]);
    }
    $result .=  "<a href='" . $item["url"] . "'>" . $item["title"] . "</a>";
  }

  echo $result;
}

function checkFiles($requiredFiles) {

	//include ('includes/config.php');
	foreach ($requiredFiles as $file) {
		if(!file_exists($file))
		{ echo "<div class='error'>" . $file . " is not installed</div>"; }
    }
}


?>