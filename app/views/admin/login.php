<?php include "../app/views/layouts/header.php"; ?>

<div class="flex justify-center items-center h-screen">
    <form method="POST" class="bg-white p-8 rounded-xl shadow w-96">
        <h2 class="text-2xl font-bold mb-4">Login Admin</h2>

        <label class="block mb-2">Username</label>
        <input type="text" name="username" class="w-full p-2 border rounded mb-4">

        <label class="block mb-2">Password</label>
        <input type="password" name="password" class="w-full p-2 border rounded mb-4">

        <button class="w-full bg-blue-600 text-white py-2 rounded mt-4">Login</button>
    </form>
</div>

<?php include "../app/views/layouts/footer.php"; ?>
