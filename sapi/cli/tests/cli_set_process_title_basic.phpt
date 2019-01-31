--TEST--
cli_set_process_title() function : basic functionality
--CREDITS--
Patrick Allaert patrickallaert@php.net
@nephp #nephp17
--FILE--
<?php
if (cli_set_process_title("title") === true &&
    cli_get_process_title() === "title")
  echo "Successfully set title\n";

?>
--EXPECT--
Successfully set title
