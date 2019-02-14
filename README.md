# 21Framework
This framework is made for and by 21Webb, to make some basic things a lot easier for us.

## HTML
// All HTML things for the framework, can be connected to some other parts

## CSS
// All CSS things

## JavaScript (JS)
// All JS things

## PHP
### Setup
The setup is as follows:
```php
<?php
include_once("path/to/__init.php");
init([all], [necessary], [parameters]);
include_once("path/to/standard-top.php");
?>
<html>
  <!-- More code... -->
```

### $\_SESSION messages
Some things always end with `-msg`, so this can be done easier. For example, `$_SESSION["err-msg"]` is used many, many times. We made a function `msg(string prefix, string message);` which results in `$_SESSION["[prefix]-msg"] = "[message]";`. 
To clear all of these in an easy way, there's a function `msgClear(array);` to clear all sessions ending at `-msg`. 



