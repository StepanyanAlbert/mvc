<?php  require_once 'components\Scrapp.php';

$new_scrapp=new Scrapp('http://www.tert.am/am/news/2016/02/05/turkey-russia/1922692');
$new_scrapp->validate_general('{<div\s+id=\"item\"\s*>((?:(?:(?!<div[^>]*>|</div>).)++|<div[^>]*>(?1)</div>)*)</div>}si');
?>

<div id="news">
<?php
foreach($new_scrapp->newarray[0] as $value){
    echo $value;
}
?>
</div>