<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fundamental 1</title>
</head>
<body>
<?php
$a = 10;
$b = 2.5;
$c = 'Hello';
$d = 'World';
$words = 'apple banana orange';
$space1 = strpos($words,' ');
$space2 = strpos($words,' ', $space1+1);
?>
<h3>ผลการทำงานใน PHP</h3>
<pre>
<?php
echo '$a = '.$a.';'
?>

$b = <?php echo $b?>;
$c = '<?=$c?>';
$d = '<?=$d?>';  

########## 
$a + $b จะมีค่าเป็น <?php echo $a+$b;?> 
$c.' '.$d จะมีค่าเป็น <?=$c.' '.$d;?>
##########
$eords คำที่1 คือ <?php echo Substr($words, 0, $space1);?> 
$eords คำที่2 คือ <?php echo Substr($words, $space1+1, $space2-($space1+1));?> 
$eords คำที่3 คือ <?php echo Substr($words,$space2+1);?> 
ตัวอักษรที่สุ่มได้จาก $words คือ " <?php echo $words[rand(0, strlen($words)-1)]?>
</pre>
</body>
</html>