# weighted-average
<p>assume that you have a set of data and each member  has an extra parameter , when you want to select or order your memebers based on their parameter you need a weighted average alghorithm.
</p>
<p>
I've written a weighted average alghorithm for that which is very easy to use 
for php just you need to require wa.php file then call wa function with two parameter as well 
</p>
<h3>PHP</h3>
<pre>
require "wa.php" ;
$objs = array (1, 2, 3, 4);
$params = array(20, 23, 19, 0);
$neworder=wa($objs,$params);
</pre>
