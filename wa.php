<?php
/*
 Developed By Farhad Mehryari
 http://mrfarhad.ir
 http://farhad-m.ir
 Telehgram : @mrfarhad7
 Instagram : farhad.merhyari
 Email : farhadmehryari@gmail.com
 Github : http://github.com/mrfarhadir
*/
function wa($objs,$params)
{
  $p = array();
  $j = 0;
  $percent = 0;
  foreach ($params as $key => $p)
  {
    $k = max($params) - $p + 1 ;
    $s = 0;
    for ($i=0; $i<$k ; $i++)
    {
      $x[$j]=$objs[$key];
      $j++;
    }
  }
  shuffle($x);
  $newobjs=array();
  foreach ($objs as $key => $obj) {
    if (count($x)>1)
    {
      $_k=array_rand($x,count($objs));
      $newobjs[$key]=$x[$_k[$key]];
      $t = $x[$_k[$key]] ;
      //echo count($x);echo "<br>";
      foreach ($x as $indx => $el) {
        if ($el===$t)
        {
          unset($x[$indx]);
        }
      }
    }
  }
  $x=array_values($x);
  if (!empty($x))
      $newobjs[count($newobjs)]=$x[0];
  return $newobjs ;
}
?>
