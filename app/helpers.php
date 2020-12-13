<?php


use Carbon\Carbon;

if (! function_exists('format_date')) {
  function format_date($date_string, $format_string) {
    $date = new Carbon($date_string);
    return $date->format($format_string);
  }
}