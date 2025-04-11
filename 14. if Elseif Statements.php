<?php
// The if...elseif...else statement executes different codes for more than two conditions.

Syntax:
// if (condition) {
//   code to be executed if this condition is true;
// } elseif (condition) {
// code to be executed if first condition is false and this condition is true;
// } else {
// code to be executed if all conditions are false;
// }


$per = 330;

if ($per >= 80 && $per <= 100) {
  echo "you are in Merit.";
} elseif ($per >= 60 && $per < 80) {
  echo "you are in Ist Division.";
} elseif ($per >= 45 && $per < 60) {
  echo "you are in IIst Division";
} elseif ($per >= 33 && $per < 45) {
  echo "you are in IIIst Divison";
} elseif ($per < 33) {
  echo "you are Fail";
} else {
  echo "Pleast Enter Valide Percentage";
}
