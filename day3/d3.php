<form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
    <input type="text" name="name" placeholder="name">
    <input type="submit" name="Send">
</form>
<?php
var_dump($_POST);
// Q 3
function validate($data){
    $data=strip_tags(trim(stripcslashes(stripcslashes(htmlspecialchars($data)))));
    return $data;
}
function is_required($data){
    if(empty($data)){
        echo"no it is rquired";
    }else{
        return validate($data);
    }
}
echo is_required($_POST['name']);
?>
// Q1
<br/>
<?php
// Q1 -1
$char = "W";
echo ord($char); ?>
<br/>
<?php
// Q1 -2
$encoded_text = "This is &lt;b&gt;HTML&lt;/b&gt; text.";
$decoded_text = html_entity_decode($encoded_text);
echo $decoded_text;
?>
<br/>
<?php
// Q1 -3
$arr = "ERWWr";
echo crc32($arr);
?>
<br/>
<?php
// Q1 -4
echo strrev("Hello world!");
?>
<br/>
<?php
//Q1 - 5
$text = "the team dealar have so fkn strong brain we should follow him";
$wrapped_text = wordwrap($text, 30, "<br>");
echo $wrapped_text;
?>
<br>
//-----------------------------------------------------//
<br/>
<!--// -- Q2  -  1-->
<?php
$sweet = array('a' => 'apple', 'b' => 'banana');
$fruits = array('sweet' => $sweet, 'sour' => 'lemon');
function test_print($item, $key)
{
    echo "$key holds $item";?><br>
<?php
}
array_walk_recursive($fruits, 'test_print');
 // --- Q2 - 2
echo sizeof($sweet);
// --- Q2 - 3
echo implode(', ', range(0, 12)), PHP_EOL;
echo "<br>";
// Q2 - 4&5
$input = array("green", "red","green", "blue", "red");
$result = array_unique($input);
print_r($result);
?>




