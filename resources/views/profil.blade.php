<!DOCTYPE html>
<html>
<head>
    <title>Profil</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-gray-950 to-gray-900 text-white min-h-screen">

<!-- Navbar -->
<div class="flex flex-wrap justify-center gap-3 p-4 bg-gray-900 border-b border-gray-800">
    <a href="/" class="hover:text-indigo-400 transition">Home</a>
    <a href="/profil" class="text-indigo-400 font-semibold">Profil</a>
    <a href="/katalog" class="hover:text-indigo-400 transition">Katalog</a>
    <a href="/bantuan" class="hover:text-indigo-400 transition">Bantuan</a>
    <a href="/kontak" class="hover:text-indigo-400 transition">Kontak</a>
</div>

<!-- Content -->
<div class="flex justify-center items-center px-4 py-10">

    <div class="bg-gray-900 border border-gray-800 p-8 rounded-2xl shadow-xl w-full max-w-md text-center
                hover:shadow-indigo-500/20 transition duration-500">

        <img src="https://via.placeholder.com/120" 
             class="mx-auto rounded-full border-4 border-indigo-500 mb-4">

        <h1 class="text-2xl font-bold">Muhammad Alfaridho P.W</h1>
        <p class="text-gray-400 mb-4">Mahasiswa Amikom</p>

        <div class="text-left space-y-2">
            <p><span class="font-semibold">NIM:</span> 24.12.3325</p>
            <p><span class="font-semibold">Kelas:</span> SI 04</p>
        </div>

        <div class="flex justify-center gap-2 mt-5">
            <span class="bg-indigo-600 px-3 py-1 rounded text-sm">Laravel</span>
            <span class="bg-green-600 px-3 py-1 rounded text-sm">Tailwind</span>
        </div>

    </div>

</div>

</body>
</html>