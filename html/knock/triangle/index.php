<?php
$length = 5;
for ($i = $length; $i >= 0; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "■";
    }
    echo '<br/>';
}

// インクリメントタイプ
// <?php
// $length = 1;
// for ($i = $length; $i <= 5; $i++) {
//     for ($j = 0; $j < $i; $j++) {
//         echo "■";
//     }
//     echo '<br/>';
// }
// 
