<?php

function is_local($force = FALSE)
{
  if(isset($force)) return $force;
  
  return in_array($_SERVER['SERVER_ADDR'], array('::1', '127.0.0.1'));
}

?>
