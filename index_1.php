
<?php
define("ENCRYPTION_KEY", "painter_locator_encryption_key");
$string = generate_random_string();
echo $encrypted = encrypt($string, ENCRYPTION_KEY);
echo "<br />";
echo $decrypted = decrypt($encrypted, ENCRYPTION_KEY);
/**
* Returns an encrypted & utf8-encoded
*/
function encrypt($pure_string, $encryption_key) {
$iv_size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
$iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
$encrypted_string = mcrypt_encrypt(MCRYPT_BLOWFISH, $encryption_key, utf8_encode($pure_string), MCRYPT_MODE_ECB, $iv);
return $encrypted_string;
}
/**
* Returns decrypted original string
*/
function decrypt($encrypted_string, $encryption_key) {
$iv_size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
$iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
$decrypted_string = mcrypt_decrypt(MCRYPT_BLOWFISH, $encryption_key, $encrypted_string, MCRYPT_MODE_ECB, $iv);
return $decrypted_string;
}
/**

*/
function generate_random_string($type = 'alnum', $length = 6) {
switch ($type) {
			case 'alpha' : $pool = 'ABCDEFGHJKLMNPQRSTUVWXYZ';
				break;
			case 'alnum' : $pool = '23456789ABCDEFGHJKLMNPQRSTUVWXYZ';
				break;
			case 'numeric' : $pool = '23456789';
				break;
		}
		$str = '';
		for ($i = 0; $i < $length; $i++) {
			$str .= substr($pool, mt_rand(0, strlen($pool) - 1), 1);
		}
return $str;
}
?>
<?php
die;
$array =["apples", "oranges", "bananas"];
print_r($array);
die;

$mysqli = new mysqli("localhost", "root", "", "cdcol");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
if (!($stmt = $mysqli->prepare("INSERT INTO cds(titel,interpret,id) VALUES (?,?,?)"))) {
    echo "Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error;
}

$name_bad = "; DELETE FROM cds WHERE 1 or titel = ' '"; 
echo $name_bad = mysql_real_escape_string($name_bad);
die;
$stmt->bind_param("sss", $firstname, $lastname,$id);

// set parameters and execute
$firstname = "John";
$lastname = "Doe";
$id = "87759";

if (!$stmt->execute()) {
    echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
}
echo "New records created successfully";

die;
echo '<pre>';
function myfunction($v1,$v2)
{
echo $v2.'<br/>';
return   $v1."-".$v2;
}
$a=array("Dog","Cat","Horse");
print_r(array_reduce($a,"myfunction"));
die;
$a1=array(1,30,15,7,25);
$a2=array(4,30,20,41,66);
$num=array_merge($a1,$a2);
array_multisort($num,SORT_DESC,SORT_NUMERIC);
print_r($num);

die;
$a1=array("a"=>"red","b"=>"green");
$a2=array("c"=>"blue","b"=>"yellow");
echo '<pre>';
print_r(array_merge_recursive($a1,$a2)).'<br/>';
print_r(array_merge($a1,$a2));
die;
function filt($user)
{
if($user['ts'] == '1052649255'){
return TRUE;
}
}

$users[] = array(
                           'ts'=>1052649255,
                           'ctr'=>1,
                           'pg'=>'/forum/' );
$users[] = array(
                           'ts'=>1052649289,
                           'ctr'=>2,
                           'pg'=>'/webdsn/' );
$users[] = array(
                           'ts'=>1052649300,
                           'ctr'=>1,
                           'pg'=>'/arrays/filter.html' );
$users[] = array(
                           'ts'=>1052649899,
                           'ctr'=>2,
                           'pg'=>'/' );
$ret=array_filter($users,"filt");

print_r($ret);


die;
function test_odd($var)
{
return(!($var & 1));
}

$a1=array("a","b",2,3,4);
print_r(array_filter($a1,"test_odd"));
die;
?>

<?php 
$value=array(
'name'=>'hardeep',
'age'=>22
);
echo $value_text= serialize($value);
print_r(unserialize($value_text));
die;

?>
<pre>
<?php 
$j=1;
for($i=4;$i>=1;$i--){
$second=4-$j;

echo str_pad(1, $j, '0', STR_PAD_LEFT);
if($second !=0){ echo str_pad(0, $second, '0', STR_PAD_RIGHT) .'<br/>';}

$j++;
//echo 4-$i;
//echo 1;
//echo str_repeat("0", 4-$i).'<br/>';
}
die;
for($i=1;$i<6;$i++){

echo str_repeat('@', 6 - $i);
echo str_repeat('* ',$i);
echo '<br/>';
}
echo '</pre>';
die;
 $format_num=1;
echo  str_pad($format_num, 1, '0', STR_PAD_LEFT).str_pad(0, 3, '0', STR_PAD_RIGHT).'<br/>';
echo str_pad($format_num, 2, '0', STR_PAD_LEFT).str_pad(0, 2, '0', STR_PAD_RIGHT).'<br/>';
echo str_pad($format_num, 3, '0', STR_PAD_LEFT).str_pad(0, 1, '0', STR_PAD_RIGHT).'<br/>';
echo str_pad($format_num, 4, '0', STR_PAD_LEFT);
//echo $format_num;
die;

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Place Autocomplete Address Form</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }
    </style>
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
    <style>
      #locationField, #controls {
        position: relative;
        width: 480px;
      }
      #autocomplete {
        position: absolute;
        top: 0px;
        left: 0px;
        width: 99%;
      }
      .label {
        text-align: right;
        font-weight: bold;
        width: 100px;
        color: #303030;
      }
      #address {
        border: 1px solid #000090;
        background-color: #f0f0ff;
        width: 480px;
        padding-right: 2px;
      }
      #address td {
        font-size: 10pt;
      }
      .field {
        width: 99%;
      }
      .slimField {
        width: 80px;
      }
      .wideField {
        width: 200px;
      }
      #locationField {
        height: 20px;
        margin-bottom: 2px;
      }
    </style>
  </head>

  <body>
    <div id="locationField">
      <input id="autocomplete" placeholder="Enter your address"
             onFocus="" type="text"></input>
    </div>

    <table id="address">
      <tr>
        <td class="label">Street address</td>
        <td class="slimField"><input class="field" id="street_number"
              disabled="true"></input></td>
        <td class="wideField" colspan="2"><input class="field" id="route"
              disabled="true"></input></td>
      </tr>
      <tr>
        <td class="label">City</td>
        <td class="wideField" colspan="3"><input class="field" id="locality"
              disabled="true"></input></td>
      </tr>
      <tr>
        <td class="label">State</td>
        <td class="slimField"><input class="field"
              id="administrative_area_level_1" disabled="true"></input></td>
        <td class="label">Zip code</td>
        <td class="wideField"><input class="field" id="postal_code"
              disabled="true"></input></td>
      </tr>
      <tr>
        <td class="label">Country</td>
        <td class="wideField" colspan="3"><input class="field"
              id="country" disabled="true"></input></td>
      </tr>
    </table>

    <script>
      // This example displays an address form, using the autocomplete feature
      // of the Google Places API to help users fill in the information.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {

        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();
//alert(place);
        for (var component in componentForm) {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
alert(componentForm[addressType]);
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
alert(val);
            document.getElementById(addressType).value = val;
          }
        }
      }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCJXe9sc0UU5Ip_e9NUCUCSPQehB9DDwUQ&libraries=places&callback=initAutocomplete"
        async defer></script>
  </body>
</html>

<?php
die;
$str ='dsadsasdadas';
echo $STR;
die;

class Foo
{
    private $foo = 'bar';
}
$getFooCallback = function() {
    return $this->foo;
};
//PHP5 style
$binding = $getFooCallback->bindTo(new Foo,'Foo');
echo $binding().PHP_EOL;
//PHP7 style
echo $getFooCallback->call(new Foo).PHP_EOL;

die;

    $fruits = array ("apple", "orange", array ("pear", "mango"), "banana");
print_r($fruits);
die;
    echo (count($fruits,1));
die;

 $state1[] = array("karnataka");
//print_r($state);
//die;
 $state2[0] = "karnataka";
//print_r($state);
//die;
 $state = array("karnataka");
print_r($state);
die;
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
sort($age);
print_r($age);
die;
print_r(array_unique(array('4','4','5','6','7')));
$a=array('dsfsfdfd',15.1,25);
echo array_sum($a);
die;

$a1=array("red","green");
$a2=array("blue","yellow","yellow1");
print_r(array_replace($a1,$a2));
die;

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow12");
$a2=array("e"=>"red","f"=>"green","g"=>"blue","d"=>"yellow12");

$result=array_diff_assoc($a1,$a2);
print_r($result);
die;
?>

<pre>
<?php 

for($i=1;$i<6;$i++){

echo str_repeat('@', 6 - $i);
echo str_repeat('* ',$i);
echo '<br/>';
}
echo '</pre>';
die;



abstract class abst{
public $c='3'; 
private function abst_inner(){
return __FUNCTION__;
}
public function abst_inner2(){
return $c+2;
}
abstract function abst_inner3();
}

class extend_abst extends abst{

function __call($name, $arguments){
echo 'hello undefine<br/>'; 
}

  public function __get($field) {
    if($field == 'a') {
      return $this->c;
    }
  }

function abst_inner3(){
return __METHOD__;
}

}
$abst_obj = new extend_abst();
echo $abst_obj->abst_inner2();
echo $abst_obj->abst_inner3();
die;

class a{

function a_inner(){
return 'a_inner';
}

static function a_inner2(){
return __METHOD__;
}

final function a_inner3(){
return __FUNCTION__;
}

}
class b extends a{

function __call($name, $arguments){
echo 'hello undefine'; 
}

 function b_inner(){
return 'hello';
}

function abst(){
return __FUNCTION__;
}

static function a_inner2(){
return get_parent_class;
}

}

$obj_b= new b();
echo $obj_b->b_inner3();
die;

class TestClass
{
    public $foo;

    public function __construct($foo)
    {
        $this->foo = $foo;
    }

    public function __toString()
    {
        return $this->foo.'hgdjkhjkdshds';
    }
}

$class = new TestClass(1);
echo $class;
die;


class Foo {
  public static $my_static = 'foo';
    public static function aStaticMethod() {
        echo self::$my_static;
    }
}

$obj = new Foo;
$obj->$my_static;
Foo::aStaticMethod();
$classname = 'Foo';
$classname::aStaticMethod(); // As of PHP 5.3.0
die;
$sugar ='';
if($sugar == '') { echo('$sugar has no value on line '.__LINE__.' of ['.__FILE__.']'); }
die;
define("MINSIZE", 50);
echo MINSIZE;
echo constant(); // same thing as the previous line
die;

$username = "root";
$password = "";
$hostname = "localhost"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password)
 or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";

//select a database to work with
$selected = mysql_select_db("cdcol",$dbhandle)
  or die("Could not select examples");

$_POST['name']="dem'o";
echo "INSERT INTO `cds`(`titel`, `interpret`, `jahr`, `id`, `testphone`) VALUES ($_POST[name],'[value-2]','[value-3]','[value-4]','[value-5]')";
die;
//mysql_query("INSERT INTO `cds`(`titel`, `interpret`, `jahr`, `id`, `testphone`) VALUES ($_POST['name'],'[value-2]','[value-3]','[value-4]','[value-5]')");

die;

?>   


 <!DOCTYPE html>
    <html lang="en">
     
      <head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      </head>
<script>
var inputString = "~!@#$%^&*()_+=`{}[]|\:;'<>,./?Some & actual text to keep, maybe...",
    outputString = inputString.replace(/[^a-zA-Z 0-9]+/g, "");
/////salert(outputString);
</script>
      <body>
     
        <div class="container">
          <input class="typeahead tt-query" type="text" data-provide="typeahead" autocomplete="off">
        </div><!-- /.container -->
     
        <!-- Le javascript -->

</script>
        <script type="text/javascript">
          $(document).ready(function() {
            $('input.typeahead').typeahead({
                $.ajax({
                  url: 'search.php',
                  type: 'POST',
                  dataType: 'JSON',
                  data: 'query=' + query,
                  success: function(data) {
                    console.log(data);
                    process(data);
                  }
                });
            });
          });
        </script>
     
      </body>
<style type="text/css">
.bs-example{
	font-family: sans-serif;
	position: relative;
	margin: 100px;
}
.typeahead, .tt-query, .tt-hint {
	border: 2px solid #CCCCCC;
	border-radius: 8px;
	font-size: 24px;
	height: 30px;
	line-height: 30px;
	outline: medium none;
	padding: 8px 12px;
	width: 396px;
}
.typeahead {
	background-color: #FFFFFF;
}
.typeahead:focus {
	border: 2px solid #0097CF;
}
.tt-query {
	box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
}
.tt-hint {
	color: #999999;
}
.tt-dropdown-menu {
	background-color: #FFFFFF;
	border: 1px solid rgba(0, 0, 0, 0.2);
	border-radius: 8px;
	box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
	margin-top: 12px;
	padding: 8px 0;
	width: 422px;
}
.tt-suggestion {
	font-size: 24px;
	line-height: 24px;
	padding: 3px 20px;
}
.tt-suggestion.tt-is-under-cursor {
	background-color: #0097CF;
	color: #FFFFFF;
}
.tt-suggestion p {
	margin: 0;
}
</style>

    </html>
<?php 

die;
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Place Autocomplete</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }
      .controls {
        margin-top: 10px;
        border: 1px solid transparent;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        height: 32px;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
      }

      #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 300px;
      }

      #pac-input:focus {
        border-color: #4d90fe;
      }

      .pac-container {
        font-family: Roboto;
      }

      #type-selector {
        color: #fff;
        background-color: #4d90fe;
        padding: 5px 11px 0px 11px;
      }

      #type-selector label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
      }
    </style>
  </head>
  <body>
    <input id="pac-input" class="controls" type="text"
        placeholder="Enter a location">
    <div id="type-selector" class="controls">
      <input type="radio" name="type" id="changetype-all" checked="checked">
      <label for="changetype-all">All</label>

      <input type="radio" name="type" id="changetype-establishment">
      <label for="changetype-establishment">Establishments</label>

      <input type="radio" name="type" id="changetype-address">
      <label for="changetype-address">Addresses</label>

      <input type="radio" name="type" id="changetype-geocode">
      <label for="changetype-geocode">Geocodes</label>
    </div>
    <div id="map"></div>

    <script>
      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      function initMap() {
var options = {
  types: ['(cities)'],
  componentRestrictions: {country: "in"}
 };
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 30.6983931, lng: 76.6622751},
          zoom: 13
        });
        var input = /** @type {!HTMLInputElement} */(
            document.getElementById('pac-input'));
console.log(input);
        var types = document.getElementById('type-selector');
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(types);

        var autocomplete = new google.maps.places.Autocomplete(input,options);
        autocomplete.bindTo('bounds', map);

        var infowindow = new google.maps.InfoWindow();
        var marker = new google.maps.Marker({
          map: map,
          anchorPoint: new google.maps.Point(0, -29)
        });

        autocomplete.addListener('place_changed', function() {
          infowindow.close();
          marker.setVisible(false);
          var place = autocomplete.getPlace();
          if (!place.geometry) {
            window.alert("Autocomplete's returned place contains no geometry");
            return;
          }

          // If the place has a geometry, then present it on a map.
          if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
          } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);  // Why 17? Because it looks good.
          }
          marker.setIcon(/** @type {google.maps.Icon} */({
            url: place.icon,
            size: new google.maps.Size(71, 71),
            origin: new google.maps.Point(0, 0),
            anchor: new google.maps.Point(17, 34),
            scaledSize: new google.maps.Size(35, 35)
          }));
          marker.setPosition(place.geometry.location);
          marker.setVisible(true);

          var address = '';
          if (place.address_components) {
            address = [
              (place.address_components[0] && place.address_components[0].short_name || ''),
              (place.address_components[1] && place.address_components[1].short_name || ''),
              (place.address_components[2] && place.address_components[2].short_name || '')
            ].join(' ');
          }

          infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
          infowindow.open(map, marker);
        });

        // Sets a listener on a radio button to change the filter type on Places
        // Autocomplete.
        function setupClickListener(id, types) {
          var radioButton = document.getElementById(id);
          radioButton.addEventListener('click', function() {
            autocomplete.setTypes(types);
          });
        }

        setupClickListener('changetype-all', []);
        setupClickListener('changetype-address', ['address']);
        setupClickListener('changetype-establishment', ['establishment']);
        setupClickListener('changetype-geocode', ['geocode']);
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJv__-JjViidY2Dcu3BoYQeYOqh7ycY5g&libraries=places&callback=initMap"
        async defer></script>
  </body>
</html>
<?php
die;
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>

$(function() {
var ac_config = {
		source: "search.php",
		select: function(event, ui){
			$("#skills").val(ui.item.value);
			$("#skill").val(ui.item.key);
		},
		minLength:1
	};
	$("#skills").autocomplete(ac_config);

});
</script>
</head>
<body>
<div class="ui-widget">
    <label for="skills">Skills: </label>
    <input id="skills">
<input id="skill">
</div>
</body>
</html>

<?php 


die;
?>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
</head>
<body>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
 
<script>
	
  $(function() {
  	var availableTags = [
	{key: "1",value: "NAME 1"},{key: "2",value: "NAME 2"},{key: "3",value: "NAME 3"},{key: "4",value: "NAME 4"},{key: "5",value: "NAME 5"}
	 ];
	
    $( "#project-name" ).autocomplete({
      minLength: 0,
      source: availableTags,
      focus: function( event, ui ) {
        $( "#project-name" ).val( ui.item.value );
        return false;
      },
      select: function( event, ui ) {
        $( "#project-name" ).val( ui.item.value );
        $( "#project-id" ).val( ui.item.key );
 alert('ok');
        return false;
      } 
	  });
 
  });
 
	</script>
 
<form action="search" method="post" >
<input id="project-name" name="project2" id="searchbox"/>
<input  type="text" id="project-id" />
</form>
</body>
</html>


<?php 
die;
die;
?>
<?php
$pin = '250404';
$get = 'http://pin-codes.in/api/pincode/'.$pin;
$result = file_get_contents($get);
for ($i=0;$i<30;$i++){
$homepage = strstr($result, '{');
$district = explode('District":"', $homepage);
$district = explode('","State', $district[1]);
$district = trim($district[0]);}
echo "District: ".$district;
die;
?>
<?php 
$zip = 250404;
$site = file_get_contents('http://geocoder.ca/?postal='.$zip, false, NULL, 1000, 1000);
$goods = strstr($site, 'GPoint('); // cut off the first part up until 
$end = strpos($goods, ')'); // the ending parenthesis of the coordinate
$cords = substr($goods, 7, $end - 7); // returns string with only the 
$array = explode(', ',$cords); // convert string into array
echo "<pre>";
print_r($array); // output the array to verify

die;

abstract class abstract_example{
public $abst_a = '';
public $abst_b = '';

abstract function abst_function($value);

public function abst_pub_function($abst){
echo $abst;
}

}


class example extends abstract_example{
 static $b = 6;
const c = 7;

function abst_function ($value){
echo $value;
}

}

class example2 extends example{
 static $f = 66;
const g = 77;
}
echo example2::abst_function('test');
echo example2::abst_pub_function('test');
echo example2::$b = 10;
echo example2::c ;

die;



?>

