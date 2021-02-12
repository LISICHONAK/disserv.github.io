$name = $_POST['nameart'];
$text = $_POST['text'];
if ($_POST['menu'])
$menu = $_POST['menu'];
else $menu = $name;
$db = mysqli_connect('localhost', 'root', '', 'mybase');
$query = "INSERT INTO art (name, text, menu) VALUES ('$name', '$text', '$menu')";
$result = mysqli_query($db, $query);
mysqli_close($db);
if ($result)
echo 'Статья успешно добавлена';