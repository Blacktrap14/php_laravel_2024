//ถ้าเงื่อนไขเป็นจริงถึงจะทำ
<h3>For Loop</h3>   

<?php
for ($i = 0; $i < 10; $i++) {
    echo $i;
}
?>

</br>// ทำเเล้วตรวจว่าเป็นจริงรึยังเเล้วค่อยทำต่อ 
<h3>While Loop</h3> 
<?php
$i=0;
while ($i<10) {
    echo $i;
    $i++;
}
?>

</br>// ทำไปก่อนเเล้วค่อยตรวจว่าเป็นจริงรึยัง
<h3>Do while Loop</h3> 
<?php
$i=0;
do {
    echo $i;
    $i++;
} while ($i< 10);
?>