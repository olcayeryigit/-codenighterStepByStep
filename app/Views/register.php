<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-96">
        <h2 class="text-2xl font-semibold text-center mb-6">Kayıt Ol</h2>
        <form action="#" method="POST">
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Email adresinizi girin">
            </div>
            <div class="mb-6">
                <label for="password" class="block text-gray-700">Parola</label>
                <input type="password" id="password" name="password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Parolanızı girin">
            </div>
            <button type="submit" class="w-full py-2 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600 transition duration-300">Kayıt Ol</button>
        </form>
    </div>
</body>
</html>
