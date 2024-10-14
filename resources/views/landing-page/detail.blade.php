<x-layout-landing>
    <x-slot:title>Contact</x-slot:title>
    <div class="container mx-auto px-4 py-8">
        <article class="bg-white rounded-lg shadow-md p-6 mb-8">
            <h1 class="text-3xl font-bold mb-4">Judul Artikel</h1>
            <img src="{{ asset('foto/a.jpg') }}" alt="Gambar Artikel" class="w-full h-auto rounded-lg mb-4">
            <p class="text-gray-700 mb-4">Ini adalah paragraf pertama dari artikel. Di sini, Anda dapat menulis konten yang informatif dan menarik untuk pembaca.</p>
            <p class="text-gray-700 mb-4">Tambahkan lebih banyak informasi dan detail yang relevan di sini untuk memberikan nilai lebih kepada pembaca.</p>
        </article>
    
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold mb-4">Komentar</h2>
            <form id="commentForm" class="mb-6">
                <textarea id="comment" rows="4" placeholder="Tinggalkan komentar..." class="w-full p-2 border border-gray-300 rounded-md mb-4"></textarea>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Kirim Komentar</button>
            </form>
            <div id="commentsList" class="mt-4">
                <!-- Komentar akan ditambahkan di sini -->
            </div>
        </div>
    </div>
    
    <script>
        document.getElementById('commentForm').addEventListener('submit', function (e) {
            e.preventDefault();
            const commentText = document.getElementById('comment').value;
            if (commentText) {
                const commentDiv = document.createElement('div');
                commentDiv.className = 'border-b border-gray-200 py-2';
                commentDiv.textContent = commentText;
                document.getElementById('commentsList').appendChild(commentDiv);
                document.getElementById('comment').value = ''; // Clear the textarea
            }
        });
    </script>
</x-layout-landing>