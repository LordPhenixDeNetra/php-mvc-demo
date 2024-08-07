<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create User</title>
    <link rel="stylesheet" href="../public/style.css">
</head>
<body>
    <h1>Create User</h1>
    <form method="POST" action="index.php">
        <input type="hidden" name="action" value="create">
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <input type="submit" value="Create">
    </form>
</body>
</html>
