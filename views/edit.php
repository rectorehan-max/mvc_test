<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit User</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col items-center justify-center">

<div class="w-full max-w-md bg-white rounded-lg shadow-md p-6">
    <h1 class="text-2xl font-bold mb-6 text-center">Edit User</h1>

    <form action="index.php?action=update&id=<?= $user['id'] ?>" method="POST" class="space-y-4">
        <div>
            <label class="block text-gray-700 font-medium mb-1">Username:</label>
            <input type="text" name="username" value="<?= htmlspecialchars($user['username']) ?>" required class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-yellow-500">
        </div>
        <div>
            <label class="block text-gray-700 font-medium mb-1">Email:</label>
            <input type="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" required class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-yellow-500">
        </div>
        <button type="submit" class="w-full bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 rounded">Update</button>
    </form>

    <div class="mt-4 text-center">
        <a href="index.php" class="text-blue-500 hover:underline">Back to Users List</a>
    </div>
</div>

</body>
</html>

