<?php
$angka = 2 ;
while ($angka < 51 )
{
$div_count=0;
for ( $i=1;$i<=$angka;$i++)
{
if (($angka%$i)==0)
{
$div_count++;
}
}
if ($div_count<3)
{
echo $angka." , ";
}
$angka=$angka+1;
}
?>