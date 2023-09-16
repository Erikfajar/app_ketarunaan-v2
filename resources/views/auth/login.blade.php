
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="{{ asset('login') }}/index.css">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('logo/favicon.ico') }}">
  <title>Login</title>
  <style>
   .floating-image {
    float: left; /* atau float: right; */
    margin: 10px; /* Atur margin sesuai kebutuhan Anda */
    position: absolute;
}

  </style>
</head>
<body>
    @include('dashboard.alert')
    <section>
       
        
        <div class="form-box">
            <div class="form-value">
                <form action="{{ route('auth') }}" method="POST">
                    @csrf
                    <h2>Login</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" name="email" required>
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" id="password" name="password" required>
                        <label for="">Password</label>
                    </div>
                    <div class="forget">
                        <label for=""><input id="showPassword" type="checkbox">Lihat Password</label>
                      
                    </div>
                    <button type="submit">Log in</button>
                    {{-- <div class="register">
                        <p>Don't have a account <a href="#">Register</a></p>
                    </div> --}}
                </form>
            </div>
        </div>
         <img src="{{ asset('logo-catar.png') }}"  style="position: relative;" id="img" width="800px" alt="">
    </section>
    <script>
        // Ambil elemen input kata sandi dan checkbox "Tampilkan Kata Sandi"
const passwordField = document.getElementById('password');
const showPasswordCheckbox = document.getElementById('showPassword');

// Tambahkan event listener ke checkbox
showPasswordCheckbox.addEventListener('change', function() {
    // Jika checkbox dicentang, ubah tipe input menjadi "text" (lihat kata sandi)
    // Jika tidak, kembalikan ke tipe "password" (sembunyikan kata sandi)
    if (this.checked) {
        passwordField.type = 'text';
    } else {
        passwordField.type = 'password';
    }
});

    </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>