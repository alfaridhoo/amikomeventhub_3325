<!DOCTYPE html>
<html>
<head>
    <title>Profil</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-gray-950 to-gray-900 text-white min-h-screen">

<!-- Navbar -->
<div class="flex flex-wrap justify-center gap-3 p-4 bg-gray-900 border-b border-gray-800">
    <a href="/" class="hover:text-indigo-400">Home</a>
    <a href="/profil" class="text-indigo-400 font-semibold">Profil</a>
    <a href="/katalog" class="hover:text-indigo-400">Katalog</a>
    <a href="/bantuan" class="hover:text-indigo-400">Bantuan</a>
    <a href="/kontak" class="bg-indigo-600 px-3 py-1 rounded hover:bg-indigo-700">Kontak</a>
</div>

<!-- Content -->
<div class="flex items-center justify-center mt-10 px-4">
    <div class="bg-gray-900 border border-gray-800 rounded-xl p-8 shadow-xl w-full max-w-md text-center">

        <img src="https://via.placeholder.com/120" class="mx-auto rounded-full border-4 border-indigo-500 mb-4">

        <h1 class="text-2xl font-bold">[Nama Kamu]</h1>
        <p class="text-gray-400 mb-4">Mahasiswa Amikom</p>

        <div class="text-left space-y-2">
            <p><span class="font-semibold">NIM:</span> [NIM]</p>
            <p><span class="font-semibold">Kelas:</span> [Kelas]</p>
        </div>

        <div class="flex justify-center gap-2 mt-5">
            <span class="bg-indigo-600 px-3 py-1 rounded text-sm">Laravel</span>
            <span class="bg-green-600 px-3 py-1 rounded text-sm">Tailwind</span>
        </div>

    </div>
</div>

</body>
</html>