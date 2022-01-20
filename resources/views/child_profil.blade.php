@extends('profil')

@section('title', 'profil')

@section('header')
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-4 site-name-container">
                        <img src="{{ asset('multi/img/logo.png') }}" alt="Site logo" class="site-logo">
                        <h1 class="site-name">Multi Pro</h1>
                    </div>
                    <div class="mobile-menu-icon">
                        <i class="fa fa-bars"></i>
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-8 templatemo-nav-container">
                        <nav class="templatemo-nav">
                            <ul>
                            <li><a href="http://127.0.0.1:8000/home" class="active">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="http://127.0.0.1:8000/profil">profile</a></li>
                                <li><a href="#">contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
@endsection

<!-- @section('sidebar')

@endsection -->

@section('content')
    <h3 class="text-uppercase">About us</h3>
        <p><br>Rachma Novita Anggreani, D3-Manajemen Informatika, Teknologi Informasi, Politeknik Negeri Malang</br>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce malesuada lacus vel tristique rhoncus. Vivamus 
            vel molestie odio. Curabitur pulvinar, diam at pharetra euismod, augue felis pretium est, sit amet accumsan 
            dui enim nec tortor. Cras lobortis feugiat enim. Aliquam rhoncus pharetra ligula accumsan sodales. Donec 
            blandit sed justo quis sollicitudin. Nulla et leo id purus suscipit rhoncus ut at purus. Suspendisse molestie 
            sodales porttitor.

            Vivamus et vulputate augue. Etiam et eleifend purus, in sagittis nisi. Vivamus laoreet metus ut nisl euismod 
            molestie. In non lacus placerat ipsum placerat dapibus eu vel arcu.</p>
@endsection

@section('footer')
<p class="small copyright-text">Copyright &copy; Rachma Novita Anggreani_MI_POLINEMA</p>
@endsection