<div id="wrapper">
 <div class="overlay"></div>

 <!-- Sidebar -->
 <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
     <ul class="nav sidebar-nav">
         <li class="sidebar-brand">

           <a href="{{ url('/home') }}">
             @if(isset($pageName))
               {{ $pageName }}
             @else
               Gestion de Curso
             @endif
           </a>

         </li>
         <li>
             <a href="/home">Home</a>
         </li>
         <li>
             <a href="/instrumentacion">Instrumentacion</a>
         </li>
         <li>
             <a href="#">Events</a>
         </li>
         <li>
             <a href="#">Team</a>
         </li>
         <li class="dropdown">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown">Works <span class="caret"></span></a>
           <ul class="dropdown-menu" role="menu">
             <li class="dropdown-header">Dropdown heading</li>
             <li><a href="#">Action</a></li>
             <li><a href="#">Another action</a></li>
             <li><a href="#">Something else here</a></li>
             <li><a href="#">Separated link</a></li>
             <li><a href="#">One more separated link</a></li>
           </ul>
         </li>
         <li>
             <a href="#">Services</a>
         </li>
         <li>
             <a href="#">Contact</a>
         </li>
         <li>
           <a href="{{ route('logout') }}"
               onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
               Cerrar Sesion
           </a>

           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
               {{ csrf_field() }}
           </form>
        </li>
     </ul>
 </nav>
 <!-- /#sidebar-wrapper -->

 <!-- Page Content -->
 <div id="page-content-wrapper">
   <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
     <span class="hamb-top"></span>
     <span class="hamb-middle"></span>
     <span class="hamb-bottom"></span>
   </button>

     <div class="container">
         <div class="row">
             <div class="col-lg-12">
                 @yield('content')
             </div>
         </div>
     </div>
 </div>
 <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->
