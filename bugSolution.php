```php
<?php
function my_function($arr) {
  if (empty($arr)) {
    return false; // Or return true, depending on the desired behavior for empty arrays
  }
  foreach ($arr as $value) {
    if ($value === 0) {
      return true;
    }
  }
  return false;
}

$arr = [1, 2, 3, 0, 4, 5];
var_dump(my_function($arr)); // Returns true

$arr = [];
var_dump(my_function($arr)); // Returns false (as expected)
?>
```