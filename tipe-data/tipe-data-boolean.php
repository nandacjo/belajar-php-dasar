<?php

echo "Benar : ";
var_dump(true);

echo "Salah : ";
var_dump(false);

$sudah_nikah = false;
$punya_kucing = true;


echo '0:        ' . (boolval(0) ? 'true' : 'false') . "\n";
// 0:        false
echo '42:       ' . (boolval(42) ? 'true' : 'false') . "\n";
// 42:       true
echo '0.0:      ' . (boolval(0.0) ? 'true' : 'false') . "\n";
// 0.0:      false
echo '4.2:      ' . (boolval(4.2) ? 'true' : 'false') . "\n";
// 4.2:      true
echo '"":       ' . (boolval("") ? 'true' : 'false') . "\n";
// "":       false
echo '"string": ' . (boolval("string") ? 'true' : 'false') . "\n";
// "string": true
echo '"0":      ' . (boolval("0") ? 'true' : 'false') . "\n";
// "0":      false
echo '"1":      ' . (boolval("1") ? 'true' : 'false') . "\n";
// "1":      true
echo '[1, 2]:   ' . (boolval([1, 2]) ? 'true' : 'false') . "\n";
// [1, 2]:   true
echo '[]:       ' . (boolval([]) ? 'true' : 'false') . "\n";
// []:       false
echo 'stdClass: ' . (boolval(new stdClass) ? 'true' : 'false') . "\n";
// stdClass: true
