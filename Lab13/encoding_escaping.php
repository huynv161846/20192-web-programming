<?php
  $input = "\"Stop pulling my hair!\" Jane's eyes flashed.<p>";
  $double = htmlentities($input);
  $both = htmlentities($input, ENT_QUOTES);
  $neither = htmlentities($input, ENT_NOQUOTES);