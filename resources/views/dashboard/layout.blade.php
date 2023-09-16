<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title') </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('logo/favicon.ico') }}">
    <link href="{{ asset('Template') }}/vendor/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <link href="{{ asset('Template') }}/vendor/chartist/css/chartist.min.css" rel="stylesheet">
    <link href="{{ asset('Template') }}/css/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7ef6846db8.js" crossorigin="anonymous"></script>

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="" class="brand-logo" style="margin-left: 50px;">
                {{-- <img class="logo-abbr" src="{{ asset('Template') }}/images/logo.png" alt=""> --}}
                <img class="logo-compact" src="{{ asset('logo/logo6.png') }}" width="100%" alt="">
                <img class="brand-title" src="{{ asset('logo/logo6.png') }}" width="100%" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                <button class="btn btn-primary" style="margin-left: 74em" onclick="confirmLogout()"> <i class="fa-solid fa-right-from-bracket fa-lg"></i> Logout</button>
                            </div>
                        </div>

                        
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    
                    <li class="nav-label first">HOME</li>
                     <li><a href="{{ route('dashboard') }}" class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}"><i class="fa-solid fa-house fa-2xl"></i><span class="nav-text">DASHBOARD</span></a>
                    </li> 

                    <li class="nav-label">CATATAN</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fa-regular fa-clipboard fa-2xl"></i><span class="nav-text">PELANGGARAN</span></a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('Tingkat1-pelanggaran.index') }}">TINGKAT I</a></li>
                            <li><a href="{{ route('Tingkat2-pelanggaran.index') }}">TINGKAT II</a></li>
                            <li><a href="{{ route('Tingkat3-pelanggaran.index') }}">TINGKAT III</a></li>
                        </ul>
                    </li>


                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fa-regular fa-clipboard fa-2xl"></i><span class="nav-text">PRESTASI</span></a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('Tingkat1-prestasi.index') }}">TINGKAT I</a></li>
                            <li><a href="{{ route('Tingkat2-prestasi.index') }}">TINGKAT II</a></li>
                            <li><a href="{{ route('Tingkat3-prestasi.index') }}">TINGKAT III</a></li>
                        </ul>
                    </li>

                    
                     <li><a href="{{ route('pasal.index') }}" class="nav-link {{ request()->is('dashboard/pasal') ? 'active' : '' }}"><i class="icon icon-single-04"></i><span class="nav-text">PASAL PELANGGARAN</span></a>
                        {{-- @if(auth()->user()->admin())
                     <li><a href="{{ route('register') }}" class="nav-link {{ request()->is('dashboard/register') ? 'active' : '' }}"><i class="icon icon-single-04"></i><span class="nav-text">REGISTER</span></a>
                        @endif --}}
                    

                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
      
        <div class="content-body">
            @yield('isi')
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
              <p>Kalo ada kesalahan atau kendala dalam aplikasi bisa menyampaikan nya ke <b>JURUSAN RPL</b></p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('Template') }}/vendor/global/global.min.js"></script>
    <script src="{{ asset('Template') }}/js/quixnav-init.js"></script>
    <script src="{{ asset('Template') }}/js/custom.min.js"></script>

    <script src="{{ asset('Template') }}/vendor/chartist/js/chartist.min.js"></script>

    <script src="{{ asset('Template') }}/vendor/moment/moment.min.js"></script>
    <script src="{{ asset('Template') }}/vendor/pg-calendar/js/pignose.calendar.min.js"></script>


    <script src="{{ asset('Template') }}/js/dashboard/dashboard-2.js"></script>
    <!-- Circle progress -->
    <script>
        setTimeout(function() {
            document.getElementById('alertMessage').style.display = 'none';
        }, 10000); // 10000 ms = 10 detik
    </script>
@include('sweetalert::alert')
<script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var deleteButtons = document.querySelectorAll('.delete-btn');
        deleteButtons.forEach(function(button) {
            button.addEventListener('click', function(event) {
                event.preventDefault();
                var form = this.closest('form');
                Swal.fire({
                    title: 'Konfirmasi Hapus',
                    text: 'Apakah Anda yakin ingin menghapus data ini?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Ya, Hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    });
</script>
<script>
    function confirmLogout() {
    Swal.fire({
      title: 'Logout',
      text: 'Anda yakin ingin logout?',
      icon: 'question',
      showCancelButton: true,
      confirmButtonText: 'Ya, Logout',
      cancelButtonText: 'Batal',
    }).then((result) => {
      if (result.isConfirmed) {
        // Redirect atau lakukan tindakan logout di sini
        window.location.href = '/logout'; // Sesuaikan dengan URL logout Anda
      }
    });
  }
  
  </script>

</body>

</html>