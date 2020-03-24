<?php
require __DIR__ . "/../vendor/autoload.php";

\Bobby\Std\Std::resetStdout('/var/www/std3.log');
echo "hello\n";
\Bobby\Std\Std::resetStdout('/var/www/std3.log');
echo "world!\n";