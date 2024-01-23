<?php
# part 1
echo "Current filename: " . __FILE__ . "\n" . "Current line: " . __LINE__ . "\n";

# part 2
$myHeredoc = <<<QWE
This is
my
multiline
heredoc variable @ PHP

QWE;
echo $myHeredoc;

# part 3
$a='Рыба';
$b='человек';

echo "$a рыбою сыта, а $b человеком";

?>