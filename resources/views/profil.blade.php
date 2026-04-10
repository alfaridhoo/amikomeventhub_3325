<!DOCTYPE html>
<html>
<head>
    <title>Profil</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-slate-900 to-slate-800 text-white min-h-screen">

<!-- Navbar -->
<div class="p-4 bg-slate-800 shadow flex justify-center gap-3">
    <a href="/" class="bg-blue-500 px-4 py-2 rounded hover:bg-blue-700">Home</a>
    <a href="/katalog" class="bg-green-500 px-4 py-2 rounded hover:bg-green-700">Katalog</a>
    <a href="/bantuan" class="bg-purple-500 px-4 py-2 rounded hover:bg-purple-700">Bantuan</a>
    <a href="/kontak" class="bg-red-500 px-4 py-2 rounded hover:bg-red-700">Kontak</a>
</div>

<!-- Content -->
<div class="flex justify-center items-center mt-10">
    <div class="bg-slate-800 p-8 rounded-xl shadow-lg w-full max-w-md text-center">

        <img src="https://via.placeholder.com/100" class="mx-auto rounded-full mb-4 border-4 border-blue-500">

        <h1 class="text-2xl font-bold mb-2">Profil Praktikan</h1>

        <p class="text-slate-300">Nama: [Nama Kamu]</p>
        <p class="text-slate-300">NIM: [NIM Kamu]</p>
        <p class="text-slate-300 mb-4">Kelas: [Kelas]</p>

        <div class="flex justify-center gap-3 mt-4">
            <span class="bg-blue-500 px-3 py-1 rounded text-sm">Laravel</span>
            <span class="bg-green-500 px-3 py-1 rounded text-sm">Tailwind</span>
            <span class="bg-purple-500 px-3 py-1 rounded text-sm">Web Dev</span>
        </div>

    </div>
</div>

</body>
</html>