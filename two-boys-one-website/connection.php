$config = parse_ini_file("/home2-3/r/rikulah/config.ini");
$connection = mysqli_connect($config['host'],$config['name'],$config['pass'],$config['user']);