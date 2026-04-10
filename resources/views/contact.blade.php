<!DOCTYPE html>
<html>
<head>
    <title>Kontak</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-gray-950 to-gray-900 text-white min-h-screen">

<!-- Navbar -->
<div class="flex flex-wrap justify-center gap-3 p-4 bg-gray-900 border-b border-gray-800">
    <a href="/" class="hover:text-indigo-400 transition">Home</a>
    <a href="/profil" class="hover:text-indigo-400 transition">Profil</a>
    <a href="/katalog" class="hover:text-indigo-400 transition">Katalog</a>
    <a href="/bantuan" class="hover:text-indigo-400 transition">Bantuan</a>
    <a href="/kontak" class="text-indigo-400 font-semibold">Kontak</a>
</div>

<!-- Content -->
<div class="flex items-center justify-center px-4 py-10">

    <div class="bg-gray-900 border border-gray-800 p-8 rounded-2xl shadow-xl w-full max-w-lg 
                hover:shadow-indigo-500/20 transition duration-500">

        <h1 class="text-2xl font-bold mb-2 text-center">Hubungi Kami </h1>
        <p class="text-gray-400 mb-6 text-center">Kirim pesan ke tim kami</p>

        <!-- Form -->
        <form class="space-y-4">

            <input type="text" placeholder="Nama"
                class="w-full p-3 rounded-lg bg-gray-800 border border-gray-700 
                       focus:outline-none focus:ring-2 focus:ring-indigo-500 transition">

            <input type="email" placeholder="Email"
                class="w-full p-3 rounded-lg bg-gray-800 border border-gray-700 
                       focus:outline-none focus:ring-2 focus:ring-indigo-500 transition">

            <textarea placeholder="Pesan" rows="4"
                class="w-full p-3 rounded-lg bg-gray-800 border border-gray-700 
                       focus:outline-none focus:ring-2 focus:ring-indigo-500 transition"></textarea>

            <button type="submit"
                class="w-full bg-indigo-600 py-3 rounded-lg font-semibold 
                       hover:bg-indigo-700 hover:shadow-lg hover:shadow-indigo-500/30 
                       transition duration-300">
                Kirim Pesan
            </button>

        </form>

        <!-- Info tambahan -->
        <div class="mt-6 text-sm text-gray-400 text-center">
            atau hubungi langsung:
            <br>
            admin@amikomeventhub.com
        </div>

    </div>

</div>

</body>
</html>