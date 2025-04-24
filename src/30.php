<?php
function display_random_code() {
    $random_codes = array(
        "https://example.com/some_code.php",
        "https://another-example.com/some_random_code.php"
    );

    $random_code_index = rand(0, count($random_codes) - 1);
    return $random_codes[$random_code_index];
}
?>
