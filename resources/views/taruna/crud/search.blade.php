<div class="col-auto">

    {{-- <label class="sr-only">Name</label> --}}
    <form action="" method="GET">

        <input type="search" name="search" id="search-input" value="{{ request('search') }}" class="form-control mb-2" placeholder="Search....">
    </form>

</div>



    <script>
        // Simpan URL asli dalam variabel
        var originalURL = window.location.href;

        // Variabel timeout untuk mengatur ulang URL setelah 30 detik
        var timeout;

        // Event listener untuk input pencarian
        document.getElementById('search-input').addEventListener('input', function () {
            // Hapus timeout sebelumnya jika ada
            clearTimeout(timeout);

            // Ambil nilai dari input pencarian
            var searchTerm = this.value;


            // Atur ulang URL kembali ke URL asli setelah 30 detik
            timeout = setTimeout(function () {
                window.history.pushState({path: originalURL}, '', originalURL);
            }, 10000); // 30 detik
        });
    </script>

