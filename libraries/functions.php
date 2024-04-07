<?php
function my_autoloader($class_name) {
    $class_name = str_replace("_", "/", $class_name);
    $class_name = strtolower($class_name);
    $class_name = str_replace("model", "models", $class_name);
    $class_name = str_replace("view", "views", $class_name);
    require($class_name . ".php");
}

spl_autoload_register('my_autoloader');

function loadview($url, $data = "") {
    require("views/$url.php");
}

function redirect($url) {
    header("location:$url");
    exit();
}

function debug($url) {
    echo "<pre>";
    print_r($url);
    echo "</pre>";
    die();
}

function replace($str) {
    if (!$str) return false;
    $unicode = array(
        'a' => array('á', 'à', 'ả', 'ã', 'ạ', 'ă', 'ắ', 'ặ', 'ằ', 'ẳ', 'ẵ', 'â', 'ấ', 'ầ', 'ẩ', 'ẫ', 'ậ'),
        'A' => array('Á', 'À', 'Ả', 'Ã', 'Ạ', 'Ă', 'Ắ', 'Ặ', 'Ằ', 'Ẳ', 'Ẵ', 'Â', 'Ấ', 'Ầ', 'Ẩ', 'Ẫ', 'Ậ'),
        'd' => array('đ'),
        '-' => array('-'),
        'D' => array('Đ'),
        'e' => array('é', 'è', 'ẻ', 'ẽ', 'ẹ', 'ê', 'ế', 'ề', 'ể', 'ễ', 'ệ'),
        'E' => array('É', 'È', 'Ẻ', 'Ẽ', 'Ẹ', 'Ê', 'Ế', 'Ề', 'Ể', 'Ễ', 'Ệ'),
        'i' => array('í', 'ì', 'ỉ', 'ĩ', 'ị'),
        'I' => array('Í', 'Ì', 'Ỉ', 'Ĩ', 'Ị'),
        'o' => array('ó', 'ò', 'ỏ', 'õ', 'ọ', 'ô', 'ố', 'ồ', 'ổ', 'ỗ', 'ộ', 'ơ', 'ớ', 'ờ', 'ở', 'ỡ', 'ợ'),
        '0' => array('Ó', 'Ò', 'Ỏ', 'Õ', 'Ọ', 'Ô', 'Ố', 'Ồ', 'Ổ', 'Ỗ', 'Ộ', 'Ơ', 'Ớ', 'Ờ', 'Ở', 'Ỡ', 'Ợ'),
        'u' => array('ú', 'ù', 'ủ', 'ũ', 'ụ', 'ư', 'ứ', 'ừ', 'ử', 'ữ', 'ự'),
        'U' => array('Ú', 'Ù', 'Ủ', 'Ũ', 'Ụ', 'Ư', 'Ứ', 'Ừ', 'Ử', 'Ữ', 'Ự'),
        'y' => array('ý', 'ỳ', 'ỷ', 'ỹ', 'ỵ'),
        'Y' => array('Ý', 'Ỳ', 'Ỷ', 'Ỹ', 'Ỵ'),
        '-' => array(',', ' ', '&quot;', '.', ';', ':'),
        '' => array(' ,', ', ', ' .', '. ', ' ;', '; ', ' :', ': ', "'")
    );

    foreach ($unicode as $nonUnicode => $uni) {
        foreach ($uni as $value)
            $str = str_replace($value, $nonUnicode, $str);
        $str = strtolower($str);
    }
    return $str;
}
?>
