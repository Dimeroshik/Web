<?php
function print_links($way, $links, $fp, $a) //функция записи в файл 
{
	fwrite($fp, $a[3]."<loc>".$way."</loc>\n".$a[4]);
	for ($i = 0; $i < count($links); $i++)
		if (preg_match("/.*.(php|html)/", $links[$i]))
			fwrite($fp, $a[3]."<loc>".$way."/".$links[$i]."</loc>\n".$a[4]);
}

function call_check($way, $links, $fp, $a, $go)
{
	foreach ($links as $catalog)
		if (preg_match("/^\d(.\d)*$/", $catalog))
			catalog_reader($way."/".$catalog, $fp, $a, $go);
}

function catalog_reader($way, $fp, $arr, $go)
{
	$files = scandir($way);
	print_links($way, $files, $fp, $arr);
	if ($go == 1) call_check($way, $files, $fp, $arr, $go);
} 

$way = '../Site';
$fp = fopen("../Site/sitemap.xml", "a");
$arr_str = array(
	"<?xml version='1.0' encoding='UTF-8'?>\n",
	"<urlset xmlns='http://www.sitemaps.org/schemas/sitemap/0.9'>\n",
	"</urlset>\n",
	"<url>\n",
	"</url>\n"
);
$go_dir = 1;

fwrite ($fp, $arr_str[0].$arr_str[1]);
catalog_reader($way, $fp, $arr_str, $go_dir);
fwrite ($fp, $arr_str[2]);

