<?php
# part 1
$filename = str_replace([__DIR__,"\\","\/"],'',__FILE__);
echo "Current filename: " . $filename . "\n" . "Current line: " . __LINE__ . "\n";

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