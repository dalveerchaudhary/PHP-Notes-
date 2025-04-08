<?php
//html and css add on php
//Write html inside php
//Add some style with php
$h2_color = "gray";
echo "<h1 style= 'color:green'>php with html</h1>";


$name = "dalveer singh";
echo "<h1 style='color:red' > my name is $name</h1>";

$name1 = "dalveer";
echo "<h1 style='color:yellow'>my name is " . $name1 . "</h1>";
?>


<!-- Write php inside html tags -->
<h1 style="color: palegreen;">
    my real name is <?php echo $name1; ?>
</h1>

<h2 style="color: <?php echo $h2_color; ?>">this is first <?php echo $name1 ?> </h2>
<h2 style="color: <?php echo $h2_color; ?>">this is first </h2>
<h2 style="color: <?php echo $h2_color; ?>">this is first </h2>
<h2 style="color: <?php echo $h2_color; ?>">this is first </h2>
<h2 style="color: <?php echo $h2_color; ?>">this is first </h2>
<h2 style="color: <?php echo $h2_color; ?>">this is first </h2>
<h2 style="color: <?php echo $h2_color; ?>">this is first </h2>