<?
$conn_string = "host=max.gag.su port=5432 dbname=maxdb user=maxdbuser password=qwertyMAXdb94 connect_timeout=25";
$dbconn = pg_connect($conn_string) or die('connection failed' . pg_last_error());
echo $dbconn;
chdir('generated_pages');
$title = '<html><head><title>';
$header ='</title></head><body><header><h1>';
$description = '</h1></header><article><p>';
$end = '</p></article><footer>Generated by my ass</footer></body></html>';

$result = pg_query($dbconn, 'SELECT * FROM public.data');
print_r($result);
foreach ($result as $row => $record) {
    $generatedhtml = $title . $record['title'] . $header . $record['header'] . $description . $record['description'] . $end;

    file_put_contents($record['name'] . '.php', $generatedhtml);
}
pg_free_result($result);
pg_close($dbconn);