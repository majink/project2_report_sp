
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $uname = $_POST["uname"];
        $title = $_POST["title"];
        $author = $_POST["author"];
        $type = $_POST["type"];
        $report = $_POST["report"];
        $fromdate = $_POST["fromdate"];

        $data = "$uname, $title, $author, $type, $report, $fromdate\n";
        file_put_contents("data.txt", $data, FILE_APPEND); // 데이터를 파일에 추가
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>