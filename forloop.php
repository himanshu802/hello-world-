
<?php
//number list
for($i=1; $i<=5; $i++)
{
for($j=1; $j<=$i; $j++)
{
echo $j."  ";
}
echo "<br>";
}
?>


<?php
//string list
for($i=1; $i<=5; $i++)
{
for($k=5;$k>$i; $k--)
{
echo "  ";
}
for($j=1;$j<=$i;$j++)
{
echo "*";

}
echo"<br>";
}
?>