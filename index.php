<html>
<body>
    <main>

<?php
$pageDirectory = 'pages';

if (!empty($_GET['page'])) {
    $pageName = $_GET['page'];
    $pageFolder = scandir($pageDirectory, 0);
    unset($pageFolder[0], $pageFolder[1]);

    if (in_array($pageName . '.php', $pageFolder) && is_file($pageDirectory . '/' . $pageName . '.php')) {
        include($pageDirectory . '/' . $pageName . '.php');
    } else {
        include($pageDirectory . '/404page.php');
    }
} else {
    // Handle default page or redirect to home, for example
    include($pageDirectory . '/home.php');
}
?>
    </main>



</body>

</html>