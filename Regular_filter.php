//Filter from form input 
public function filter($string) {
	$escape = array('\'', '\\\\');
	$escape = '/' . implode('|', $escape) . '/';
	$string = preg_replace($escape, '_', $string);

	$safe = array('select', 'insert', 'update', 'delete', 'where');
	$safe = '/' . implode('|', $safe) . '/i';
	return preg_replace($safe, 'hacker', $string);
}

//Regular expression
if(preg_match('/[^a-zA-Z0-9_]/', $_POST['nickname']) || strlen($_POST['nickname']) > 10)
	die('Invalid nickname');