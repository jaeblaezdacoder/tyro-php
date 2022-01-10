<?php

#  Sets the site name and URL
$siteName = "";
$siteURL = "http://yourwebsite.com";

# Add the location of your logo image
$siteLogo = "";


#  Sets address in Google Map
#  Replace all spaces with plus symbols and replace commas with %2C
$siteAddress = "2331+Calvert+St+NW%2C+Washington%2C+DC+20008";

#  Site verification
#  Add the code inside the content tags
$googleVerify = "abCdefghijk";
$bingVerify = "abCdefghijk";

#  Creates your navigation menu
#  You do not need to include the .php extension in the url
#  Primary links should have a 'parentid' of 0
#  Second and third level links should have a 'parentid' of their parent link
#  Add or delete as needed

  $menu = array(
#	'1' => array('id' => 1, 'parentid' => 0, 'title' => 'Home',    'url' => 'index'),
#	'2' => array('id' => 2, 'parentid' => 0, 'title' => 'Jaeblaez',    'url' => 'mainlink1'),
#	'3' => array('id' => 3, 'parentid' => 0, 'title' => 'Main Link 2',    'url' => 'mainlink2'),
#	'4' => array('id' => 4, 'parentid' => 0, 'title' => 'Main Link 3',    'url' => 'mainlink3'),
#	'5' => array('id' => 5, 'parentid' => 0, 'title' => 'Contact Us',     'url' => 'contact-us'),
#	'6' => array('id' => 6, 'parentid' => 3, 'title' => 'Child Link 1',   'url' => 'child1'),
#	'7' => array('id' => 7, 'parentid' => 4, 'title' => 'Child Link 2',   'url' => 'child2'),
#	'8' => array('id' => 8, 'parentid' => 6, 'title' => 'Child Link 3',    'url' => 'child3'),
#	'9' => array('id' => 9, 'parentid' => 2, 'title' => 'Single Column','url' => 'one-column'),
#	'10' => array('id' => 10, 'parentid' => 2, 'title' => 'Two Columns',     'url' => 'two-columns'),
#	'11' => array('id' => 11, 'parentid' => 2, 'title' => 'Three Columns',   'url' => 'three-columns'),
#	'12' => array('id' => 12, 'parentid' => 2, 'title' => 'Gallery',    'url' => 'portfolio'),
  );

#  Creates social icons using FontAwesome social fonts
#  Modify the links to point to your user account for each social network
#  Add or delete networks as needed
#  Refer to FontAwesome documention for other social icons

$socialIcons = array(
    'Gettr' => array(
        'link' => 'https://gettr.com/user/jae_dacoder',
        'icon' => 'fas fa-fire'
    ),
    'Facebook' => array(
        'link' => 'http://facebook.com',
        'icon' => 'fa-facebook'
    ),
    'LinkedIn' => array(
        'link' => 'http://linkedin.com',
        'icon' => 'fa-linkedin'
    ),
    'YouTube' => array(
        'link' => 'http://youtube.com',
        'icon' => 'fa-youtube'
	),
    'Pinterest' => array(
        'link' => 'http://pinterest.com',
        'icon' => 'fa-pinterest'
    ),
    'Instagram' => array(
        'link' => 'http://instagram.com',
        'icon' => 'fa-instagram'
    ),
);


#  This is safe to remove once everything is working properly
$requiredFiles = array('index.php', 'header.php', 'footer.php', 'includes/config.php', 'js/phpwt.js', 'css/phpwt.css');

?>