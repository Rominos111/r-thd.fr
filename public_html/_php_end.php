<?php

require "php/footer.php";
require "php/end.php";

$content = ob_get_clean();
ob_end_clean();

echo $content;
