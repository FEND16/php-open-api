<?php

function formatDate($date){
  $newDate = strtotime($date);
  $newFormat = date('D j/n Y', $newDate);
  echo $newFormat;
}