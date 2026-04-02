<?php
class Math {
  static function squared($input) {
    return 'The square of ' . $input . ' is ' . $input * $input;
  }
}
echo Math::squared(8);
?>