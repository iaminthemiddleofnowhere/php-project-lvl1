<?php


function nod($firstNumber, $secondNumber)
{
  $intersect = array_intersect(getDenoms($firstNumber), getDenoms($secondNumber));
  return end($intersect);
}

function getDenoms($num, $denoms = [])
{
  $limit = $num / 2;
  for ($i = 1; $i <= $limit; $i++) {
    if ($num % $i === 0) {
      $denoms[] = $i;
    }
  }
  array_push($denoms, $num);
  return $denoms;
}

function game($name)
{
  $firstNumber = rand(1, 200);
  $secondNumber = rand(1, 200);
  $rightAnswer = nod($firstNumber, $secondNumber);
}
