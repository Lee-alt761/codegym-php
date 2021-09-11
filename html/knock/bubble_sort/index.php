<?php
$nums = [100, 5, 2, -10, 8, 10, -1, 15, 1, -100];

$idxLast = count($nums) - 1; /* count()は要素の数、つまり配列の数なのでcount($nums)=10 */

for ($i = 0; $i <= $idxLast; $i++) {
    for ($j = $idxLast; $i <= $j; $j--) {
        if ($nums[$j] < $nums[$j - 1]) {
            $k = $nums[$j - 1];
            $nums[$j - 1] = $nums[$j];
            $nums[$j] = $k;
        }
    }
}

echo '<pre>';
print_r($nums);
echo '</pre>';
