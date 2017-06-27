<nav  class="navbar navbar-inverse  navbar-fixed-top" >
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="/"><img src="/img/Flogo.png" height="50px" width="200px" style="float:right;"><span style="color:orange; font-family: 'times'; font-size: 18px;">Intern</span><b  style="color:white; font-family: 'arial'; font-size: 20px;">@ </b></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right" >
                  
                    <li > <a class="page-scroll" href="/">Home</a></li>
                    
                    <li> <a class="page-scroll" href="{{ route('lessons') }}" >Lessons</a></li>
                    
                    <li><a class="page-scroll" href="{{ route('quotes') }}" >Quotes</a></li>
                    
                    <li><a class="page-scroll" href="{{ route('poems') }}" >Poems</a></li>
                    
                    <li><a class="page-scroll" href="{{ route('team') }}" >Team</a></li>

                    <li><a class="page-scroll" href="{{ route('apps') }}" >Games</a></li>
                  

                    <li class="dropdown" style="float:right;">

                    {{-- Checking whether user is logged in --}}

                    	@if(Auth::guard('web')->check())
                        <a class="dropdown-toggle" data-toggle="dropdown" href="" style="font-family: 'El Messiri', sans-serif; font-size: 15px;" id="user"><span class="glyphicon glyphicon-user"></span> {{ Auth::user()->first_name ." ". Auth::user()->last_name }}<b class="caret"></b></a>
                        @else
                         <a class="dropdown-toggle" data-toggle="dropdown" href="" style="font-family: 'El Messiri', sans-serif; font-size: 15px;" id="user"><span class="glyphicon glyphicon-user"></span>User<b class="caret"></b></a>
                           @endif
                        <ul class="dropdown-menu">
                 	
                 	@if(Auth::guard('web')->check())
                        	<li><a href="{{ route('user.info') }}"><span class="glyphicon glyphicon-edit"></span> Info | Edit</a></li>
                        	<li><a href="{{ route('user.logout') }}"><span class="glyphicon glyphicon-remove"></span>Logout</a></li>
                       @else
                       		<li><a href="{{url('/login')}}">Login</a></li>
                       		<li><a href="{{url('/register')}}">Register</a></li>
                       	@endif
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
