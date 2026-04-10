<!DOCTYPE html>
<html>
<head>
    <title>Katalog</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-gray-950 to-gray-900 text-white min-h-screen">

<!-- Navbar -->
<div class="flex flex-wrap justify-center gap-3 p-4 bg-gray-900 border-b border-gray-800">
    <a href="/" class="hover:text-indigo-400">Home</a>
    <a href="/profil" class="hover:text-indigo-400">Profil</a>
    <a href="/katalog" class="text-indigo-400 font-semibold">Katalog</a>
    <a href="/bantuan" class="hover:text-indigo-400">Bantuan</a>
    <a href="/kontak" class="bg-indigo-600 px-3 py-1 rounded hover:bg-indigo-700">Kontak</a>
</div>

<!-- Content -->
<div class="p-8">
    <h1 class="text-3xl font-bold mb-6 text-center">Event Terbaru 🚀</h1>

    <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

        <div class="bg-gray-900 border border-gray-800 p-6 rounded-xl shadow hover:scale-105 hover:shadow-2xl transition">
            <h2 class="text-xl font-bold">Seminar AI</h2>
            <p class="text-gray-400 my-2">Belajar AI dari dasar</p>
            <button class="bg-indigo-600 px-4 py-2 rounded hover:bg-indigo-700">Join</button>
        </div>

        <div class="bg-gray-900 border border-gray-800 p-6 rounded-xl shadow hover:scale-105 hover:shadow-2xl transition">
            <h2 class="text-xl font-bold">Workshop Web</h2>
            <p class="text-gray-400 my-2">Laravel & Tailwind</p>
            <button class="bg-indigo-600 px-4 py-2 rounded hover:bg-indigo-700">Join</button>
        </div>

        <div class="bg-gray-900 border border-gray-800 p-6 rounded-xl shadow hover:scale-105 hover:shadow-2xl transition">
            <h2 class="text-xl font-bold">Hackathon</h2>
            <p class="text-gray-400 my-2">Kompetisi coding</p>
            <button class="bg-indigo-600 px-4 py-2 rounded hover:bg-indigo-700">Join</button>
        </div>

    </div>
</div>

</body>
</html>