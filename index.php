<?php
$passmd5 = md5('AMYDIN');
$passsha1 = sha1('AMYDIN');
$pass17word = 'AMYDIN';

// Untuk Md5nya
$md500 = substr($passmd5, 0, 1);
$md501 = substr($passmd5, 1, 1);
$md502 = substr($passmd5, 2, 1);
$md503 = substr($passmd5, 3, 1);
$md504 = substr($passmd5, 4, 1);
$md505 = substr($passmd5, 5, 1);
$md506 = substr($passmd5, 6, 1);
$md507 = substr($passmd5, 7, 1);
$md508 = substr($passmd5, 8, 1);
$md509 = substr($passmd5, 9, 1);
$md510 = substr($passmd5, 10, 1);
$md511 = substr($passmd5, 11, 1);
$md512 = substr($passmd5, 12, 1);
$md513 = substr($passmd5, 13, 1);
$md514 = substr($passmd5, 14, 1);
$md515 = substr($passmd5, 15, 1);
$md516 = substr($passmd5, 16, 1);
$md517 = substr($passmd5, 17, 1);
$md518 = substr($passmd5, 18, 1);
$md519 = substr($passmd5, 19, 1);
$md520 = substr($passmd5, 20, 1);
$md521 = substr($passmd5, 21, 1);
$md522 = substr($passmd5, 22, 1);
$md523 = substr($passmd5, 23, 1);
$md524 = substr($passmd5, 24, 1);
$md525 = substr($passmd5, 25, 1);
$md526 = substr($passmd5, 26, 1);
$md527 = substr($passmd5, 27, 1);
$md528 = substr($passmd5, 28, 1);
$md529 = substr($passmd5, 29, 1);
$md530 = substr($passmd5, 30, 1);
$md531 = substr($passmd5, 31, 1);
$md532 = substr($passmd5, 32, 1);

// Untuk Sha1nya
$sha100 = substr($passsha1, 0, 1);
$sha101 = substr($passsha1, 1, 1);
$sha102 = substr($passsha1, 2, 1);
$sha103 = substr($passsha1, 3, 1);
$sha104 = substr($passsha1, 4, 1);
$sha105 = substr($passsha1, 5, 1);
$sha106 = substr($passsha1, 6, 1);
$sha107 = substr($passsha1, 7, 1);
$sha108 = substr($passsha1, 8, 1);
$sha109 = substr($passsha1, 9, 1);
$sha110 = substr($passsha1, 10, 1);
$sha111 = substr($passsha1, 11, 1);
$sha112 = substr($passsha1, 12, 1);
$sha113 = substr($passsha1, 13, 1);
$sha114 = substr($passsha1, 14, 1);
$sha115 = substr($passsha1, 15, 1);
$sha116 = substr($passsha1, 16, 1);
$sha117 = substr($passsha1, 17, 1);
$sha118 = substr($passsha1, 18, 1);
$sha119 = substr($passsha1, 19, 1);
$sha120 = substr($passsha1, 20, 1);
$sha121 = substr($passsha1, 21, 1);
$sha122 = substr($passsha1, 22, 1);
$sha123 = substr($passsha1, 23, 1);
$sha124 = substr($passsha1, 24, 1);
$sha125 = substr($passsha1, 25, 1);
$sha126 = substr($passsha1, 26, 1);
$sha127 = substr($passsha1, 27, 1);
$sha128 = substr($passsha1, 28, 1);
$sha129 = substr($passsha1, 29, 1);
$sha130 = substr($passsha1, 30, 1);
$sha131 = substr($passsha1, 31, 1);
$sha132 = substr($passsha1, 32, 1);
$sha133 = substr($passsha1, 33, 1);
$sha134 = substr($passsha1, 34, 1);
$sha135 = substr($passsha1, 35, 1);
$sha136 = substr($passsha1, 36, 1);
$sha137 = substr($passsha1, 37, 1);
$sha138 = substr($passsha1, 38, 1);
$sha139 = substr($passsha1, 39, 1);
$sha140 = substr($passsha1, 40, 1);

// Untuk Decrypt Password
$decrypt01 = substr($pass17word, 0, 1);
$decrypt02 = substr($pass17word, 1, 1);
$decrypt03 = substr($pass17word, 2, 1);
$decrypt04 = substr($pass17word, 3, 1);
$decrypt05 = substr($pass17word, 4, 1);
$decrypt06 = substr($pass17word, 5, 1);
$decrypt07 = substr($pass17word, 6, 14);

// Powerfull Generates Password
$power_pass = $decrypt02.$sha135.$sha139.$md519.$sha136.$md509.$md503.$sha140.$sha107.$md514.$md501.$sha127.$md511.$sha109.$md521.$md526.$sha131.$sha137.$decrypt04.$md527.$sha108.$md517.$md520.$md503.$sha101.$md513.$sha112.$sha114.$sha126.$decrypt06.$sha122.$md532.$sha133.$md529.$sha103.$sha105.$md518.$sha118.$sha124.$decrypt05.$decrypt03.$md525.$sha134.$sha102.$sha110.$decrypt01.$decrypt07;

echo "<font size='5px'>".$power_pass."</font>";
?>