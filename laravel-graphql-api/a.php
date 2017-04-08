<?php

class User {
  public function getName(string $label): string
  {
    return $label . $label;
  }
}

$u = new User;
echo $u->getName('pop') + 1;
