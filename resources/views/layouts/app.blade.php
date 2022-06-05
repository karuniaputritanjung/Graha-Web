
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="{{asset('Admin/assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('Admin/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('Admin/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('Admin/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('Admin/assets/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('Admin/assets/css/cs-skin-elastic.css')}}">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="{{asset('Admin/assets/scss/style.css')}}">
    <link href="{{asset('Admin/assets/css/lib/vector-map/jqvmap.min.css')}}" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    @livewireStyles()
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
</head>
<body>


        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{'/'}}"><img src="{{asset('Admin/images/logo.png')}}" alt="Logo"></a>
                <a class="navbar-brand hidden" href="{{'/'}}"><img src="{{asset('Admin/images/logo2.png')}}" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{'/'}}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Aksesibilitas</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon ti-notepad"></i>Menu</a>
                        <ul class="sub-menu children dropdown-menu">
                        <li><i class="ti-map-alt"></i><a href="{{'/Blok/index'}}">Blok</a></li>
                            <li><i class="ti-package"></i><a href="{{'/Type/index'}}">Type</a></li>
                            <li><i class="ti-home"></i><a href="{{'/Unit/index'}}">Unit</a></li>
                            <li><i class="ti-user"></i><a href="{{'/Notaris/index'}}">Notaris</a></li>
                            <li><i class="ti-shopping-cart"></i><a href="{{'/Market/index'}}">Market</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        {{-- <div class="dropdown for-notification">
                          <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <span class="count bg-danger">3</span>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="notification">
                            <p class="red">You have 3 Notification</p>
                            <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                          </div>
                        </div> --}}

                        <div class="dropdown for-message">
                          <button data-bs-toggle="tooltip" title="Wishlist" class="btn btn-secondary dropdown-toggle" type="button"
                                id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-heart"></i>
                                @if (Cart::instance('Wish')->count() > 0)
                                    <span class="count bg-primary">{{ Cart::instance('Wish')->count() }}</span>
                                @endif
                          </button>
                          <div class="dropdown-menu" aria-labelledby="message">
                            <p class="red">You have {{ Cart::instance('Wish')->count() }} Whislist</p>
                            @foreach (Cart::instance('Wish')->content() as $items)
                              <div class="container">
                                <table class="table table-striped" style="width: 500px">
                                    <thead>
                                        <tr>
                                            <th>Unit</th>
                                            <th>Qty</th>
                                            <th>Harga</th>
                                            <!-- <th>Subtotal</th> -->
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ $items->model->nomor_rumah }}</td>
                                            <td>{{ $items->qty }}</td>
                                            <td>Rp {{ number_format($items->model->harga) }}</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <form method="POST" action="/Market/Move/{{$items->rowId}}">
                                                            @csrf
                                                            @method('patch')
                                                            <button type="submit" class="btn btn-primary"><i class="ti-shopping-cart"></i></button>
                                                        </form>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <form method="POST" action="/Market/Hapus/{{$items->rowId}}">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class="btn btn-danger"><i class="ti-trash"></i></button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                              </div>
                              @endforeach
                          </div>
                        </div>

                        <div class="dropdown for-notification">
                            <button data-bs-toggle="tooltip" title="Keranjang Belanja" class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="ti-shopping-cart"></i>
                              @if (Cart::instance('shopping')->count() > 0)
                                <span class="count bg-danger">{{ Cart::instance('shopping')->count() }}</span>
                              @endif
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                              <p class="red">You have {{ Cart::instance('shopping')->count() }} Items</p>
                              @if (Cart::instance('shopping')->count() > 0)
                              <div class="container">
                                <table class="table table-striped" style="width: 500px">
                                    <thead>
                                        <tr>
                                            <th>Pilih</th>
                                            <th>Unit</th>
                                            <th>Qty</th>
                                            <th>Harga</th>
                                            <!-- <th>Subtotal</th> -->
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <form method="POST" action="/Market/Checkout">
                                        @csrf
                                        <tbody>
                                            @foreach (Cart::instance('shopping')->content() as $item)
                                            <tr>
                                                <td><input type="checkbox" name="pilih" value="{{$item->model->nomor_rumah}}"></td>
                                                <td>{{ $item->model->nomor_rumah }}</td>
                                                <td>{{ $item->qty }}</td>
                                                <td>Rp {{ number_format($item->model->harga) }}</td>
                                                <td>
                                                    <a href="/Market/Delete/{{$item->rowId}}" class="btn btn-danger btn-block">Remove</a>
                                                    {{-- <form method="POST" action="/Market/Delete/{{$item->rowId}}">
                                                        @csrf
                                                        @method('delete')
                                                        <a href="/Market/Add/{{$produk->nomor_rumah}}" class="btn btn-primary btn-block">Add To Cart</a>
                                                        <button type="submit" class="btn btn-danger">Remove</button>
                                                    </form> --}}
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <th>Total</th>
                                                <th>Rp {{ Cart::instance('shopping')->total() }}</th>
                                                <td>
                                                    {{-- <a href="/Market/Add/{{$produk->nomor_rumah}}" class="btn btn-primary btn-block">Add To Cart</a> --}}
                                                    <button type="submit" class="btn btn-primary">Checkout</button>
                                                </form>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </form>
                                </table>
                              </div>
                              @endif
                            </div>
                          </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="{{asset('Admin/images/admin.jpg')}}" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                                <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                                <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                                <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-us"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language" >
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        @yield('breadcrumbs')

        @yield('content')

    </div><!-- /#right-panel -->

    <!-- Right Panel -->
    <script src="{{asset('Admin/assets/js/vendor/jquery-2.1.4.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="{{asset('Admin/assets/js/plugins.js')}}"></script>
    <script src="{{asset('Admin/assets/js/main.js')}}"></script>


    <script src="{{asset('Admin/assets/js/lib/chart-js/Chart.bundle.js')}}"></script>
    <script src="{{asset('Admin/assets/js/dashboard.js')}}"></script>
    <script src="{{asset('Admin/assets/js/widgets.js')}}"></script>
    <script src="{{asset('Admin/assets/js/lib/vector-map/jquery.vmap.js')}}"></script>
    <script src="{{asset('Admin/assets/js/lib/vector-map/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('Admin/assets/js/lib/vector-map/jquery.vmap.sampledata.js')}}"></script>
    <script src="{{asset('Admin/assets/js/lib/vector-map/country/jquery.vmap.world.js')}}"></script>
    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );

        // var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        // var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        // return new bootstrap.Tooltip(tooltipTriggerEl)
        // })
    </script>
    @livewireScripts()
</body>
</html>
