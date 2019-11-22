<!-- 
1.Выделить список файлов являющихся полноценными страницами
2.Написать функцию работы с файлом
2.1 Создание файла и  запись основы sitemap
2.2 Запись каждого отедельного блока с ссылкой на определенную страницу -->

<?php

function link_search($files, $files_include)
{
	for ($i = 0;  $i < count($files); $i++) {
		foreach ($files_include as $link) {
			if ($files[$i] === $link) {
				$files[$i] = NULL;
				break;
			}
		}
	}
	// Создаем массив arr_link в которой и запихнем все названия страничек которые будем искать через регулярнoе выражения
	foreach ($files as $file) {
		if (preg_match("/.*.php/", $file)) $arr_link[] = $file;
	}
	return $arr_link;
}

function print_link($link, $fp, $a) 
{
	fwrite($fp, $a[3]."<loc>".$link."</loc>\n".$a[4]);
}

$files = scandir('../Site');
$files1 = scandir('../Site/include');

$links = link_search($files, $files1);

$fp = fopen("../Site/sitemap.xml", "a");
$arr_str = array(
	"<?xml version='1.0' encoding='UTF-8'?>\n",
	"<urlset xmlns='http://www.sitemaps.org/schemas/sitemap/0.9'>\n",
	"</urlset>\n",
	"<url>\n",
	"</url>\n"
);

fwrite ($fp, $arr_str[0].$arr_str[1]);

for ($i = 0; $i < count($links); $i++) print_link($links[$i], $fp, $arr_str);

fwrite ($fp, $arr_str[2]);
