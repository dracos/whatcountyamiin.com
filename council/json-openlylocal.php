<?

$id = isset($_GET['id']) ? urlencode($_GET['id']) : '';
if (!preg_match('#^[0-9][0-9](?:[A-Z][A-Z])?$#', $id)) exit;
$f = @file_get_contents('http://openlylocal.com/councils/snac_id/' . $id . '.json');
print $f;
