<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Users List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col items-center">

<div class="w-full max-w-4xl mt-10">
    <h1 class="text-3xl font-bold mb-5 text-center">Users List</h1>

    <div class="flex justify-end mb-4 space-x-2">
        <a href="index.php?action=create" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add New</a>
    </div>

    <div class="bg-white shadow-md rounded-lg overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Username</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
            </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
            <?php foreach ($users as $user): ?>
                <tr>
                    <td class="px-6 py-4"><?= $user['id'] ?></td>
                    <td class="px-6 py-4"><?= htmlspecialchars($user['username']) ?></td>
                    <td class="px-6 py-4"><?= htmlspecialchars($user['email']) ?></td>
                    <td class="px-6 py-4 space-x-2">
                        <a href="index.php?action=show&id=<?= $user['id'] ?>" class="text-blue-500 hover:underline">View</a>
                        <a href="index.php?action=edit&id=<?= $user['id'] ?>" class="text-yellow-500 hover:underline">Edit</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>

