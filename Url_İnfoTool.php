<?php
// Ekranı temizle
system("clear");

// Renkli banner
echo "\e[1;32m         -o          o-         \e[0m\n";
echo "\e[1;32m          +hydNNNNdyh+          \e[0m\n";
echo "\e[1;32m        +mMMMMMMMMMMMMm+        \e[0m\n";
echo "\e[1;32m      `dMMm:NMMMMMMN:mMMd`      \e[0m\n";
echo "\e[1;32m      hMMMMMMMMMMMMMMMMMMh      \e[0m\n";
echo "\e[1;32m  ..  yyyyyyyyyyyyyyyyyyyy  ..  \e[0m\n";
echo "\e[1;32m.mMMm`MMMMMMMMMMMMMMMMMMMM`mMMm.\e[0m\n";
echo "\e[1;32m:MMMM-MMMMMMMMMMMMMMMMMMMM-MMMM:\e[0m\n";
echo "\e[1;32m:MMMM-MMMMMMMMMMMMMMMMMMMM-MMMM:\e[0m\n";
echo "\e[1;32m:MMMM-MMMMMMMMMMMMMMMMMMMM-MMMM:\e[0m\n";
echo "\e[1;32m:MMMM-MMMMMMMMMMMMMMMMMMMM-MMMM:\e[0m\n";
echo "\e[1;32m-MMMM-MMMMMMMMMMMMMMMMMMMM-MMMM-\e[0m\n";
echo "\e[1;32m +yy+ MMMMMMMMMMMMMMMMMMMM +yy+\e[0m\n";
echo "\e[1;32m      mMMMMMMMMMMMMMMMMMMm     \e[0m\n";
echo "\e[1;32m      `/++MMMMh++hMMMM++/`     \e[0m\n";
echo "\e[1;32m          MMMMo  oMMMM         \e[0m\n";
echo "\e[1;32m          MMMMo  oMMMM         \e[0m\n";
echo "\e[1;32m          oNMm-  -mMNs\e[1;30m version: 2.1.0\e[0m\n";
echo "\e[1;36m╔╗─╔╗─╔╗╔══╗──╔═╗─╔════╗────╔╗  \e[0m\n";
echo "\e[1;36m║║─║║─║║╚╣╠╝──║╔╝─║╔╗╔╗║────║║  \e[0m\n";
echo "\e[1;36m║║─║╠═╣║─║║╔═╦╝╚╦═╩╣║║╠╩═╦══╣║  \e[0m\n";
echo "\e[1;36m║║─║║╔╣║─║║║╔╬╗╔╣╔╗║║║║╔╗║╔╗║║  \e[0m\n";
echo "\e[1;36m║╚═╝║║║╚╦╣╠╣║║║║║╚╝║║║║╚╝║╚╝║╚╗ \e[0m\n";
echo "\e[1;36m╚═══╩╝╚═╩══╩╝╚╩╝╚══╝╚╝╚══╩══╩═╝ \e[0m\n";
echo "\e[1;32mInstagram / \e[1;31m coderfenrir \e[0m\n";
echo "\e[1;32mGithub / \e[1;31m coderfenrir \e[0m\n";

// URL girişi
echo "\e[1;34m[+] URL Girin: \e[0m";
$url = trim(fgets(STDIN));

// Renkli işlem başladı mesajı
echo "\e[1;33m[+] İşlem Başladı...\e[0m\n";

// Zaman ekleme
sleep(5);

// URL'den kaynak kodlarını alma
$html = file_get_contents($url);

// HTML, CSS ve JavaScript kodlarını ayrıştırma
preg_match_all('/<html[^>]*>(.*?)<\/html>/s', $html, $htmlMatches);
preg_match_all('/<style[^>]*>(.*?)<\/style>/s', $html, $cssMatches);
preg_match_all('/<script[^>]*>(.*?)<\/script>/s', $html, $jsMatches);

// Renkli çıktılar
echo "\e[1;31m[+] HTML Kodu:\e[0m\n";
echo "\e[1;31m" . implode("\n", $htmlMatches[0]) . "\e[0m\n\n";

echo "\e[1;36m[+] CSS Kodu:\e[0m\n";
echo "\e[1;36m" . implode("\n", $cssMatches[0]) . "\e[0m\n\n";

echo "\e[1;32m[+] JavaScript Kodu:\e[0m\n";
echo "\e[1;32m" . implode("\n", $jsMatches[0]) . "\e[0m\n";

// Renkli işlem tamamlandı mesajı
echo "\e[1;33m[+] İşlem Tamamlandı!\e[0m\n";
?>
