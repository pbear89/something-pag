<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-white fixed-top navbar-transparent " color-on-scroll="400">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="home" rel="tooltip" title="{{ trans('nav.home') }}" data-placement="bottom" >
                Jecsy's Store
            </a>
            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse justify-content-end" data-nav-image="img/blurred-image-1.jpg">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="about" >
                        <i class="fa fa-id-card-o" aria-hidden="true"></i>
                        <p>{{ trans('nav.aboutus') }}</p>
                    </a>
                </li>
                
                <li class="nav-item">
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                        <p>{{ trans('nav.catalog') }}</p>
                        </a>
                    
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <h6 class="dropdown-header">Dropdown header</h6>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="catalog">Todos Los Productos</a>
                        </div>
                    </div>
                </li>               
                <li class="nav-item">
                    <a class="nav-link" href="./documentation/tutorial-components.html" target="_blank">
                        <i class="now-ui-icons files_paper"></i>
                        <p>Components</p>
                    </a>
                </li>
               

                <li class="nav-item">
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-language" aria-hidden="true"></i>   
                        <p>{{ trans('nav.language') }}</p>
                        </a>
                    
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <h6 class="dropdown-header">{{ trans('nav.lag_message') }}</h6>
                            <a class="dropdown-item" href="{{ url('lang', ['en']) }}">{{ trans('nav.english') }}</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ url('lang', ['es']) }}">{{ trans('nav.spanish') }}</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-question" aria-hidden="true"></i>    
                        <p></p>
                        </a>
                    
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <h6 class="dropdown-header">Ayudas/Guías sobre la Web</h6>
                            <a class="dropdown-item" href="howbuy">¿Como Comprar?</a>
                            <a class="dropdown-item" href="#">FAQ</a>
                            <a class="dropdown-item" href="#">Terminos Y Condiciones</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="catalog">Todos Los Productos</a>
                        </div>
                    </div>
                </li>        
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)" onclick="scrollToContact()">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <p></p>
                    </a>
                </li>
                <li class="nav-item">
                    &emsp;
                </li>
                <li class="nav-item">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Busqueda">
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
