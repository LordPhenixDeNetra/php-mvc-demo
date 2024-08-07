<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit User</title>
    <link rel="stylesheet" href="../public/style.css">
</head>
<body>
    <h1>Edit User</h1>
    <form method="POST" action="index.php">
        <input type="hidden" name="action" value="update">
        <input type="hidden" name="id" value="<?php echo $user->id; ?>">
        <label for="name">Name:</label>
        <input type="text" name="name" value="<?php echo $user->name; ?>" required>
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $user->email; ?>" required>
        <input type="submit" value="Update">
    </form>
</body>
</html>
