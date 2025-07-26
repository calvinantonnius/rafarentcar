<!-- Modal Ulasan -->
<div id="modalTestimoni" class="fixed inset-0 bg-black/50 z-50 hidden flex items-center justify-center">
    <div class="bg-white rounded-2xl shadow-lg w-full max-w-md mx-auto p-6 relative">

        <!-- Tombol Close -->
        <button onclick="document.getElementById('modalTestimoni').classList.add('hidden')"
                class="absolute top-4 right-4 text-gray-500 hover:text-red-500">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24"><path d="M6 18L18 6M6 6l12 12"></path></svg>
        </button>

        <h3 class="text-xl font-bold text-blue-600 mb-4 text-center">Berikan Ulasan Anda</h3>

        <form>
            <div class="mb-4">
                <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                <input type="text" id="nama" name="nama" class="mt-1 w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Nama Anda">
            </div>

            <div class="mb-4">
                <label for="ulasan" class="block text-sm font-medium text-gray-700">Ulasan</label>
                <textarea id="ulasan" name="ulasan" rows="4" class="mt-1 w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Tulis pengalaman Anda..."></textarea>
            </div>

            <div class="text-right">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                    Kirim
                </button>
            </div>
        </form>
    </div>
</div>
