@extends('layouts.fronted.contact')
@section('redes')
<div class="red">
    <div id="facebook">
        <a href="https://www.youtube.com/channel/UCuRgEjJgi9iZFCYVSASpXDw" target="none" class="fab fa-facebook-f "></a>
    </div>
    <div id="instagram">
        <a href="https://www.youtube.com/channel/UCuRgEjJgi9iZFCYVSASpXDw" target="none" class="fab fa-instagram"></a>
    </div>
    <div id="twiter">
        <a href="" target="none" class="fab fa-twitter-square"></a>
    </div>
    <div id="whatsaap">
        <a href="https://www.linkedin.com/in/jose-diaz-mira/" target="none" class="fab fa-whatsapp"></a>
    </div>
    <div id="linkeding">
        <a href="https://www.linkedin.com/in/jose-diaz-mira/" target="none" class="fab fa-linkedin"></a>
    </div>
</div>
@endsection
@section('navbar_top')
<div class="header-top">
    <div class="container d-flex justify-content-between">
        <div class="d-inline-flex ml-auto">
            <div class="headcont">
                <i class="fas fa-2x fa-mobile-alt messenge"></i>
                +593 991482447
            </div>
            <div class="headcont">
                <i class="fas fa-2x fa-envelope messenge"></i>
                juan_nic21@hotmail.com
            </div>
        </div>
    </div>
</div>
@endsection
@section('navbar')
    <header>
    <a href="#" class="logo">
        <h2 style="color: white" class="imgtamaño">MELANIC</h2>
        <!--<img  class="imgtamaño" src="{{ asset('img/jldm.png')}}" alt="JLDM ! Proyects">-->
    </a>
    <div class="menu-toggle" ></div>
        <nav>
            <ul>
                <li><a href="{{ url('/')}}" >HOME</a></li>
             
                <li><a href="{{ url('/productos')}}">PRODUCTOS</a></li>
                <li><a class="active" href="{{ url('/contact')}}">CONTÁCTENOS</a></li>
                <li><a href="{{ url('/nosotros')}}">NOSOTROS</a></li>
            </ul>
        </nav>
        <div class="clearfix"></div>
    </header>
@endsection
@section('banner')
<div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hero-text">
                        {{-- <h4>PAGINA <span>WEB</span></h4> --}}
						<br>
						<br>
                        <h1 class="tipeo1">COMUNÍCATE CON NOSOTROS</h1>
                        <h1 class="tipeo2"><span class="type"></span></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 
@section('cards_service')
<div class="container_cards">
    <div class="row_cards">
        <div class="col-md-3 col-sm-6 mb-3 text-center">
            <div class="single-content_service">
                <div class="service">
                    <i class="fas fa-percent fa-4x"></i>
                    <h4 class="title_services">Ofertas del Día</h4>
                    <p class="description_services">Ofertas especiales</p><br>
                    <!--<a href="" class="btn_modal_wel mt-5" data-toggle="modal" data-target=".bd-example-modal-xl">Ver mas</a>-->
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3 text-center">
            <div class="single-content_service">
                <div class="service">
                    <i class="fas fa-shopping-cart fa-4x"></i>
                    <h4 class="title_services">Entrega Inmediata</h4>
                    <p class="description_services">Servicio de entrega inmediata</p><br>
                    <!--<a href="" class="btn_modal_wel mt-5" data-toggle="modal" data-target=".bd-example-modal-xl2">Ver mas</a>-->  
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3 text-center">
            <div class="single-content_service">
                <div class="service">
                    <i class="fas fa-user-check fa-4x"></i>
                    <h4 class="title_services">Clientes Satisfechos</h4>
                    <p class="description_services">Nuestros clientes felices con nuestro servicio</p>
                    <!--<a href="{{ url('/nosotros')}}" class="btn_modal_wel mt-5">Ver mas</a>-->
                </div>
            </div>
        </div>
        
        <div class="col-md-3 col-sm-6 mb-3 text-center">
            <div class="single-content_service">
                <div class="service">
                    <i class="fas fa-thumbs-up fa-4x"></i>
                    <h4 class="title_services">Multiples Formas de Pago</h4>
                    <p class="description_services">Diferentes tipos de pago</p>
                    <!--<a href="" class="btn_modal_wel mt-5" data-toggle="modal" data-target=".bd-example-modal-xl">Ver mas</a>-->          
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('Content_messege')
<div class="conatiner">
    <div class="form">
        <div class="contact-info">
                <h3 class="contact_tittle">ESTAMOS UBICADOS EN</h3>
                <p class="contact_text">Un punto estratégico para una mejor atención a 
                    nuestros clientes para que puedan realizar su compra o 
                    recoger sus productos.   
                </p>

            <div class="contactos_info">
                <div class="contact_information">
                    <i class="fas fa-2x fa-map-marker-alt"></i>
                    <p>BARRIO SIGCHOCALLE </p>
                </div>
                <div class="contact_information">
                <i class="fas fa-2x fa-phone-volume"></i>
                    <p>0991482447</p>
                </div>
                <div class="contact_information">
                    <i class="far fa-2x fa-envelope"></i>
                    <p>juan_nic21@hotmail.com</p>
                </div>
            </div>
            <div class="social_media">
                <p>REDES SOCIALES</p>
                <div class="social-icons">
                    <a href="" target="none">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="" target="none">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="" target="none">
                        <i class="fab fa-twitter-square"></i>
                    </a>
                    <a href="" target="none">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </div>
            </div>
        </div>
        <style>
            .map-responsive{
    overflow:hidden;
    padding-bottom:100%;
    position:static;
    height:0;
}
.map-responsive iframe{
    left:0;
    top:0;
    height:100%;
    width:100%;
    position:absolute;
}
            </style>
        <div class="contact-form">
             <div class="map-responsive">
                <iframe src="https://maps.google.com/maps?q=helados%20melanic&t=&z=7&ie=UTF8&iwloc=&output=embed" width="600" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        
    </div>
</div>
@endsection
@section('footer')
<footer class="footer">
    <div class="l-footer">
        <!--<img  class="footer_img" src="{{asset('img/JLDIAZ.png')}}" alt="JLDM | Proyectos">-->
        <h2 style="color: white" class="footer_img">HELADOS MELANIC</h2>
        <p>SOMO UNA EMPRESA DE ELABORACION Y EXORTACION DE HELADOS AL POR MAYOR Y MENOR LLEVANDO UNA EXELENTE CALIDAD AL CONSUMIDOR.
        </p>
    </div>
        <ul class="r-footer">
            <li>
            <h2>Social</h2>
                <ul class="box">
                    <li class="button_social">
                        <i class="fab mr-2 fa-facebook"></i>
                        <a href="https://www.linkedin.com/in/jose-diaz-mira/" target="_blank">Facebook</a>
                    </li>
                    <li class="button_social">
                        <i class="fab mr-2 fa-twitter"></i>
                        <a href="#">Twitter</a>
                    </li>
                    <li class="button_social">
                        <i class="fab mr-2 fa-instagram"></i>
                        <a href="https://www.linkedin.com/in/jose-diaz-mira/" target="_blank">Instagram</a>
                    </li>
                    <li class="button_social">
                        <i class="fab mr-2 fa-linkedin-in"></i>
                        <a href="https://www.linkedin.com/in/jose-diaz-mira/" target="_blank">Linkedin</a>
                    </li>
                </ul>
            </li>
            <li class="features">
            <h2>Información</h2>
            <ul class="box">
                <li><a href="#">Políticas de Privacidad</a></li>
                <li><a href="#">Trabaja con nosotros</a></li>
            </ul>
            </li>
            <li class="features">
                <h2>Procedimiento de Pagos</h2>
                <ul class="box">
                    <li><a type="button" class="btn btn-outline-info" href="#">Ver mas</a></li>
                </ul>
                </li>
        </ul>
        <div class="b-footer">
            <p>Todos los Derechos reservados by <a href="https://josediazmirano.github.io/jldiaz/" target="_blank">DESTROY-KDD</a></p>
        </div>
</footer>
@endsection

