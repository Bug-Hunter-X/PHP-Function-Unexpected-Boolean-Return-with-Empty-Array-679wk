```php
<?php
function my_function($arr) {
  foreach ($arr as $value) {
    if ($value === 0) {
      return true; //This line will cause unexpected behavior
    }
  }
  return false;
}

$arr = [1, 2, 3, 0, 4, 5];
var_dump(my_function($arr)); // Returns true (as expected)

$arr = [];
var_dump(my_function($arr)); // Returns false (unexpected)
?>
```