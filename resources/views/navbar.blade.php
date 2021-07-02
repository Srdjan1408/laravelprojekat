
    <!-- Navigacija -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
  
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Prebacivanje Navigacije</span>
                    Navigacija <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{ route('home') }}">Srđan Marković Blog</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="{{ route('home') }}">Naslovna</a>
                    </li>
                    <li>
                        <a href="{{ route('o_meni') }}">O Meni</a>
                    </li>
                    <li>
                        <a href="{{ route('kontakt') }}">Kontakt</a>
                    </li>
                </ul>
            </div>

        </div>

    </nav>
