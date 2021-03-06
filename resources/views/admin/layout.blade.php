<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('plugins/images/ico.png') }}">
    <title>Sistema de Jardines</title>
    <link rel="stylesheet" href="{{ URL::asset('bootstrap/dist/css/bootstrap.min.css') }}">
    <link href="{{ URL::asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('plugins/bower_components/toast-master/css/jquery.toast.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('plugins/bower_components/morrisjs/morris.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('plugins/bower_components/calendar/dist/fullcalendar.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/colors/megna-dark.css') }}" id="theme" rel="stylesheet">
    <script src="{{ URL::asset('js/ValidarRut.js') }}"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="{{ route('home') }}">
                        <!-- Logo icon image, you can use font-icon also --><b>
                            <!--This is dark logo icon--><img src="{{ URL::asset('plugins/images/logo-esquema-small.png') }}" width="80" height="50" alt="home" class="dark-logo" /><!--This is light logo icon--><img src="{{ URL::asset('plugins/images/logo-esquema-small.png') }}" alt="home" class="light-logo" width="80" height="50" />
                            <img src="{{ URL::asset('plugins/images/inicio.png') }}" alt="home" class="light-logo" width="80" height="50" />
                        </b> </a>
                    </div>
                    <!-- /Logo -->
                    <!-- Search input and Toggle icon -->
                    <ul class="nav navbar-top-links navbar-left">
                        <li><a href="javascript:void(0)" class="open-close waves-effect waves-light"><i class="ti-menu"></i></a></li>
                    </ul>

                    <ul class="nav navbar-top-links navbar-right pull-right">
                        <li>
                            {{-- <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                                <input type="text" placeholder="Buscar" class="form-control"><a href=""><i class="fa fa-search"></i></a> 
                            </form> --}}
                        </li>

                        @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Login</a></li>
                        @else
                        <li class="dropdown">
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> 
                                <img src="{{ URL::asset('plugins/images/users/esquema.png') }}" alt="user-img" width="36" class="img-circle">
                                <b class="hidden-xs">{{ Auth::user()->name }} </b><span class="caret"></span> 
                            </a>
                            <ul class="dropdown-menu dropdown-user animated flipInY">
                                <li>
                                    <div class="dw-user-box">
                                        <div class="u-img"><img src="{{ URL::asset('plugins/images/users/esquema.png') }}" alt="user" /></div>
                                        <div class="u-text">
                                            <h4>{{ Auth::user()->name }}</h4>
                                            <p class="text-muted">{{ Auth::user()->email }}</p><a href="{{-- {{ route('persona.edithome',Auth::user()->id_persona) }} --}}" class="btn btn-rounded btn-danger btn-sm">Ver Perfil</a>
                                        </div>
                                    </div>
                                </li>
                                    
                                    <li role="separator" class="divider"></li>
                                    
                                    <li>
                                        <a href="{{-- {{ route('persona.edithome',Auth::user()->id_persona) }} --}}">
                                            <i class="ti-user"></i> Mi Perfil
                                        </a>
                                    </li>
                                    
                                    <li>
                                        <a href="#">
                                            <i class="ti-email"></i> Bandeja de Entrada
                                        </a>
                                    </li>
                                    
                                    <li role="separator" class="divider"></li>

                                    <li>
                                        <a href="#">
                                            <i class="ti-settings"></i> Configuración de Cuenta
                                        </a>
                                    </li>
                                    
                                    <li role="separator" class="divider"></li>
                                    
                                    <li>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Cerrar Sesión
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            @endif
                            <!-- /.dropdown -->
                        </ul>
                    </div>
                    <!-- /.navbar-header -->
                    <!-- /.navbar-top-links -->
                    <!-- /.navbar-static-side -->
                </nav>
                <!-- End Top Navigation -->
                <!-- ============================================================== -->
                <!-- Left Sidebar - style you can find in sidebar.scss  -->
                <!-- ============================================================== -->
                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav slimscrollsidebar">
                        <div class="sidebar-head">
                            <h3>
                                <span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span>
                                <span class="hide-menu">Navigation</span>
                            </h3> 
                        </div>
                        <ul class="nav" id="side-menu">
                            <li> 
                                <a href="#" class="waves-effect">
                                    <i class="mdi mdi-account-card-details fa-fw" data-icon="v"></i>
                                    <span class="hide-menu"> Mis Datos <span class="fa arrow"></span> 
                                    <span class="label label-rouded label-primary pull-right">4</span></span>
                                </a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{{-- {{ route('persona.edithome',Auth::user()->id_persona) }} --}}">
                                            <i class="ti-user"></i> 
                                            <span class="hide-menu"> Mi Información </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="ti-email"></i>
                                            <span class="hide-menu"> Bandeja de Entrada </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="ti-settings"></i>
                                            <span class="hide-menu"> Configuración de Cuenta </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); 
                                        document.getElementById('logout-form').submit();">
                                        <i class="fa fa-power-off"></i> 
                                        <span class="hide-menu"> Cerrar Sesión </span>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>

                        <li> 
                            <a href="#" class="waves-effect">
                                <i class="mdi mdi-security fa-fw" data-icon="v"></i> 
                                <span class="hide-menu"> Administrador <span class="fa arrow"></span> 
                                <span class="label label-rouded label-primary pull-right">2</span></span>
                            </a>
                            
                            <ul class="nav nav-second-level">
                                @can('users.index')
                                    <li> 
                                        <a href="{{ route('users.index') }}">
                                            <i class=" fa-fw">U</i>
                                            <span class="hide-menu">Usuarios</span>
                                        </a> 
                                    </li>
                                @endcan
                                @can('roles.index')
                                    <li> 
                                        <a href="{{ route('roles.index') }}">
                                            <i class=" fa-fw">R</i>
                                            <span class="hide-menu">Roles</span>
                                        </a> 
                                    </li>
                                @endcan
                            </ul>
                        </li>

                        <li> <a href="#" class="waves-effect"><i class="mdi mdi-clipboard-text fa-fw" data-icon="v"></i> <span class="hide-menu"> Mantenedores <span class="fa arrow"></span> <span class="label label-rouded label-warning pull-right">20</span></span></a>
                            <ul class="nav nav-second-level">
                                @can('cargo.index')
                                <li> <a href="#"><i class=" fa-fw">C</i><span class="hide-menu">Cargos</span></a> </li>
                                @endcan
                            </ul>
                        </li>
                        <li> <a href="#" class="waves-effect"><i class="mdi mdi-contacts fa-fw" data-icon="v"></i> <span class="hide-menu"> Captaciones <span class="fa arrow"></span> <span class="label label-rouded label-primary pull-right">7</span></span></a>
                            <ul class="nav nav-second-level">
                                @can('captacion.index')
                                <li> 
                                    <a href="#" >
                                        <i class=" fa-fw">CP</i>
                                        <span class="hide-menu">Captación de Propietarios</span>
                                    </a>
                                </li>
                                @endcan

                                @can('borradorContrato.index')
                                <li> <a href="#"><i class=" fa-fw">CB</i><span class="hide-menu">Contrato Borrador Propietario</span></a> </li>
                                @endcan
                                @can('contratoborradorarrendatario.index')
                                <li> <a href="#"><i class=" fa-fw">CB</i><span class="hide-menu">Contrato Borrador Arrendatario</span></a> </li>
                                @endcan

                            </ul>
                        </li>
                        <li> <a href="#" class="waves-effect"><i class="mdi mdi-cash-usd fa-fw" data-icon="v"></i> <span class="hide-menu"> Administración <span class="fa arrow"></span> <span class="label label-rouded label-primary pull-right">5</span></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="javascript:void(0)" class="waves-effect"><i class="linea-icon linea-basic fa-fw">PROPIETARIOS</i><span class="hide-menu"></span><span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        @can('borradorContrato.index')
                                        <li> <a href="#"><i class=" fa-fw">CB</i><span class="hide-menu">Contrato Borrador</span></a> </li>
                                        @endcan
                                        @can('finalContrato.index')
                                        <li> <a href="#"><i class=" fa-fw">CF</i><span class="hide-menu">Contrato Finales / Pagos</span></a> </li>
                                        @endcan
                                        @can('contratorenovacionpropietario.index')
                                        <li> <a href="#"><i class=" fa-fw">RP</i><span class="hide-menu">Renovación Propietario</span></a> </li>
                                        @endcan
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript:void(0)" class="waves-effect"><i  class="linea-icon linea-basic fa-fw">ARRENDATARIOS</i><span class="hide-menu"> </span><span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        @can('contratoborradorarrendatario.index')
                                        <li> <a href="#"><i class=" fa-fw">CB</i><span class="hide-menu">Contrato Borrador</span></a> </li>
                                        @endcan
                                        @can('finalContratoArr.index')
                                        <li> <a href="#"><i class=" fa-fw">CF</i><span class="hide-menu">Contrato Final / Pagos</span></a> </li>
                                        @endcan
                                        @can('contratorenovacionarrendatario.index')
                                        <li> <a href="#"><i class=" fa-fw">RA</i><span class="hide-menu">Renovación Arrendatario</span></a> </li>
                                        @endcan
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="waves-effect"><i class=" fa-fw">AUTORIZACIÓN SOLPV</i><span class="hide-menu"></span><span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        @can('solservicio.index')
                                        <li> <a href="#"><i class=" fa-fw">AP</i><span class="hide-menu">Propietarios</span></a> </li>
                                        @endcan
                                        @can('solservicio.index')
                                        <li> <a href="#"><i class=" fa-fw">AA</i><span class="hide-menu">Arrendatarios</span></a> </li>
                                        @endcan
                                    </ul>
                                </li>


                                @can('revisioncomercial.index')
                                <li> <a href="#"><i class=" fa-fw">CP</i><span class="hide-menu">Revisión Comercial Inmueble</span></a> </li>
                                @endcan
                                @can('revisioncomercial.index')
                                <li> <a href="#"><i class=" fa-fw">CA</i><span class="hide-menu">Revisión Comercial Persona</span></a> </li>
                                @endcan

                            </ul>

                        </li>
                        <li> <a href="#" class="waves-effect"><i class="mdi mdi-alert-octagram fa-fw" data-icon="v"></i> <span class="hide-menu"> POST Atención <span class="fa arrow"></span> <span class="label label-rouded label-primary pull-right">4</span></span></a>

                            <ul class="nav nav-second-level">

                                @can('postventa.index')
                                <li> <a href="#"><i class=" fa-fw">SOLICITUDES POST-ATENCIÓN</i><span class="hide-menu"></span></a> </li>
                                @endcan
                                @can('revisioncuentas.index')
                                <li> <a href="#"><i class=" fa-fw">REVISIÓN CUENTAS</i><span class="hide-menu"></span></a> </li>
                                @endcan
                                <li>
                                    <a href="javascript:void(0)" class="waves-effect"><i class="linea-icon linea-basic fa-fw">SOLICITUDES PAGO</i><span class="hide-menu"></span><span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        @can('borradorContrato.index')
                                        <li> <a href="#"><i class=" fa-fw">SP</i><span class="hide-menu">PROPIETARIO</span></a> </li>
                                        @endcan
                                        @can('finalContrato.index')
                                        <li> <a href="#"><i class=" fa-fw">SA</i><span class="hide-menu">ARRENDATARIOS</span></a> </li>
                                        @endcan
                                    </ul>
                                </li>


                                @can('checklist.index')
                                <li> <a href="#"><i class=" fa-fw">CHECKIN</i><span class="hide-menu"></span></a> </li>
                                @endcan

                            </ul>
                        </li>
                        <li> <a href="#" class="waves-effect"><i class="mdi mdi-file-excel fa-fw" data-icon="v"></i> <span class="hide-menu"> Reportes <span class="fa arrow"></span> <span class="label label-rouded label-primary pull-right">1</span></span></a>

                            <ul class="nav nav-second-level">

                                @can('repfinal.captacion_propietario')
                                <li> <a href="#"><i class="mdi mdi-file-excel fa-fw" data-icon="v"></i><span class="hide-menu">Reporte Captaciones Propietarios</span></a> </li>
                                @endcan
                                @can('repfinal.captacion_arrendatario')
                                <li> <a href="#"><i class="mdi mdi-file-excel fa-fw" data-icon="v"></i><span class="hide-menu">Reporte Captaciones Arrendatarios</span></a> </li>
                                @endcan
                                @can('repfinal.contrato_propietario')
                                <li> <a href="#"><i class="mdi mdi-file-excel fa-fw" data-icon="v"></i><span class="hide-menu">Reporte Contratos Propietarios</span></a> </li>
                                @endcan
                                @can('repfinal.contrato_arrendatario')
                                <li> <a href="#"><i class="mdi mdi-file-excel fa-fw" data-icon="v"></i><span class="hide-menu">Reporte Contratos Arrendatarios</span></a> </li>
                                @endcan

                                @can('repfinal.historial_direccion')
                                <li> <a href="#"><i class="mdi mdi-file-excel fa-fw" data-icon="v"></i><span class="hide-menu">Reporte Historial Dirección</span></a> </li>
                                @endcan
                            </ul>
                        </li>
                        <li><a href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();" class="waves-effect"><i class="mdi mdi-logout fa-fw"></i>
                     Cerrar Sesión</a><form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form></li>
                    <li class="devider"></li>
                    <li><a href="#" class="waves-effect"><i class="fa fa-circle-o text-danger"></i> <span class="hide-menu">Documentación</span></a></li>
                    <li><a href="#" class="waves-effect"><i class="fa fa-circle-o text-info"></i> <span class="hide-menu">Galería de imágenes</span></a></li>
                    <li><a href="#" class="waves-effect"><i class="fa fa-circle-o text-success"></i> <span class="hide-menu">Preguntas frecuentes</span></a></li>
                </ul>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <br/>
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif
                @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif
                @yield('contenido')


                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                                <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-theme="gray" class="yellow-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme">4</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                                <li class="full-width"><b>With Dark sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                                <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-theme="gray-dark" class="yellow-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme working">12</a></li>
                            </ul>

                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2018 &copy; EsquemaWeb </footer>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ URL::asset('plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/bower_components/counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.slimscroll.js') }}"></script>
    <script src="{{ URL::asset('plugins/bower_components/waypoints/lib/jquery.waypoints.js') }}"></script>
        <!--
        <script src="{{ URL::asset('plugins/bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>
        <script src="{{ URL::asset('plugins/bower_components/toast-master/js/jquery.toast.js') }}"></script>
        <script src="{{ URL::asset('js/waves.js') }}"></script>
        <script src="{{ URL::asset('plugins/bower_components/raphael/raphael-min.js') }}"></script>
        <script src="{{ URL::asset('plugins/bower_components/morrisjs/morris.js') }}"></script>
        <script src="{{ URL::asset('plugins/bower_components/moment/moment.js') }}"></script>
        <script src="{{ URL::asset('plugins/bower_components/calendar/dist/fullcalendar.min.js') }}"></script>
        <script src="{{ URL::asset('plugins/bower_components/calendar/dist/cal-init.js') }}"></script>
    -->
    <script src="{{ URL::asset('js/custom.min.js') }}"></script>
    <script src="{{ URL::asset('js/dashboard1.js') }}"></script>
    <script src="{{ URL::asset('js/cbpFWTabs.js') }}"></script>
    <script type="text/javascript">
        (function () {
            [].slice.call(document.querySelectorAll('.sttabs')).forEach(function (el) {
                new CBPFWTabs(el);
            });
        })();
    </script>

</body>

</html>
