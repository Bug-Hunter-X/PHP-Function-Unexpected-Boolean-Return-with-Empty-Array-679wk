# PHP Unexpected Boolean Return with Empty Array

This repository demonstrates a common yet subtle bug in PHP where a function returns an unexpected boolean value when an empty array is passed as an argument. The function `my_function` aims to check if an array contains the value 0. However, it fails to handle the edge case of an empty array, resulting in unexpected behavior.

## Bug Description
The `my_function` is designed to return `true` if 0 is found in the input array and `false` otherwise. When called with an empty array, it returns `false`, which is unexpected.  A more robust solution should explicitly check for an empty array before iterating.

## Solution
The solution involves adding a check for an empty array at the beginning of the function. If the array is empty, the function should return a meaningful value depending on the desired behavior in that specific scenario (either true or false, based on the context).