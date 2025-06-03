<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Blog</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Blog</h1>
    <?php
    $query = "SELECT * FROM blog ORDER BY created_at DESC";
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<h2>" . htmlspecialchars($row['title']) . "</h2>";
        echo "<p>" . nl2br(htmlspecialchars($row['content'])) . "</p>";
        echo "<small>Posted on: " . $row['created_at'] . "</small><hr>";
    }
    ?>
</body>
</html>
