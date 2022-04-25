<?php

$multTable = array(0);

for ($i = 1; $i <= 100; $i++)
{
  array_push($multTable, ($i));
}

for ($i = 1; $i <= 100; $i++)
{
  for ($j = 1; $j <= 101; $j++)
  {
    if (($j == 1))
    {
      array_push($multTable, ($i));
    }
    else
    {
      array_push($multTable, ($i * ($j - 1)));
    }
  }
}

echo "Mult Values " . "</b><br>";
echo "0" . " </b>";

for ($i = 1; $i <= 100; $i++)
{
  echo $multTable[$i] . " </b>";
}
echo "<br>";


for ($i = 101; $i <= 10200; $i++)
{
  echo $multTable[$i] . " </b>";
  if ((($i + 1) % 101) == 0)
  {
    echo "<br>";
  }
}
?>
