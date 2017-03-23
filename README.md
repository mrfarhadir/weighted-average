# weighted-average
<p>assume that you have a set of data and each member  has an extra parameter , when you want to select or order your memebers based on their parameter you need a weighted average alghorithm.
</p>
<a href="http://mrfarhad.ir/#!/posts/2/Weighted Average Alghorithm" >See docs in my website</a>
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
<h2>How it works and why ? </h2>
<p>
Suppose that you have list of products which each product has a field which shows how many it's been sold now we want to order our product in a way that those product which are not sold or they've been sold less , are in better view for users in other words products with less sale count could be shown on top for selling.
so we you will have an array of products ID and another array for thier sale count as well :
</p>
<h3>PHP</h3>
<pre>
$products_IDs = array (1, 2, 3, 4);
$products_sales = array(20, 23, 19, 0);
</pre>
<p>
as you see product[0] has been sold 20 time but product[3] (in fact product with ID 4) have'nt been sold ! so it's better to give more chans to product ID 4 to appear at first !
this alghorithm get the maximum value of parameter array (here is sales count) then minus maximum from each member of parameters array so for this example we will have below result 
<pre>
array(3,0,4,23);
</pre>
now is optional to plus 1 all member to give a minumum chanse for most sold product (here is product ID 2) to be appear if we apply this we will have below result :
<pre>
array(4,1,5,24);
</pre>
now suppose that for the value of each member of this array you have product from the same index of products array in the other words for this example you will have 4 of product ID 1 , 1 of product ID 2 , 5 of product ID 3 and 24 of product ID 4 
and if you make an array for that it will be like this : 
<pre>
$t=array(1,1,1,1,2,3,3,3,3,3,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4);
</pre>
Ok now we calculate the probability of each product ID :
<pre>
probability of product 1 ~ 11.7%
probability of product 2 ~ 2.9%
probability of product 3 ~ 14.7%
probability of product 4 ~ 70.5%

11.7+2.9+14.7+705=99.8 
and sum of probablities shows that we've done good ! 
and now it's clear that product which has less sold has more chanse to select for the first
these result was for selecting first one ! after selecting a product for first place then we will remove it's ID from $t array and will select a ID for second place and this will be repeated up to ending.
</pre>
now look to below example which shown first 
<pre>
require "wa.php" ;
$objs = array (1, 2, 3, 4);
$params = array(20, 23, 19, 0);
$neworder=wa($objs,$params);
</pre>
the $neworder is an array of product IDs 

</p>
