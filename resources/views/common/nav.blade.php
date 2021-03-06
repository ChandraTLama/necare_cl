<nav class="navbar navbar-default navbar-static-top" style="height: 80px;">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->

            <a class="navbar-brand" href="{{ url('/') }}"> <b>Nebraska Cancer<br><br> Association </b></a>

        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            @if (Auth::check())
                    <!-- Left Side Of Navbar -->

            <ul class="nav navbar-nav">
                <!-- CMM commented out this... 
                    <li><a href="{{ url('/home') }}">Home</a></li>
                -->

<!-- below navigation lines were added by CMM on 11th March 2017-->
                     {{-- Menu for Users with Administration Role Only --}}
                         @role('admin')
                         <li class="dropdown">
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                         <i class="fa fa-btn fa-fw fa-cogs"></i>User Administration<span class="caret"></span></a>
                            <ul class="dropdown-menu multi level" role="menu">


                               <li><a href="{{ route('users.index') }}">Manage Users</a></li>
                                <li><a href="{{ route('roles.index') }}">Manage Roles</a></li>
                            </ul>
                        </li>

                        <li><a href="{{ route('cancer_types.index') }}">Manage Cancer Types</a></li>
                        <li><a href="{{ route('locations.index') }}">Manage Locations</a></li>
                        <li><a href="{{ route('activitytypes.index') }}">Manage Activity Types</a></li>
                        <li><a href="{{ route('employees.index') }}">Manage Employees</a></li>
                        <li><a href="{{ route('cancer_types.index') }}">Manage Volunteers</a></li>

                        {{-- have made this a drop down menu...--}}
                         <!--
                         <li><a href="{{ route('cancer_types.index') }}">Generate Admin Reports</a></li>
                         -->
                         <li class="dropdown">
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                         <i class="fa fa-btn fa-fw fa-cogs"></i>Admin Reports<span class="caret"></span></a>
                            <ul class="dropdown-menu multi level" role="menu">


                               <li><a href="{{ route('cancer_types.index') }}">Activities per volunteer</a></li>
                                <li><a href="{{ route('cancer_types.index') }}">List of pending activities</a></li>
                            </ul>
                        </li>
                        @endrole

                        {{-- Menu for Users with Employee Role Only --}}
                        @role('employee')
                        <li><a href="{{ route('cancer_types.index') }}">Manage Activities</a></li>

                        {{-- have to make this a drop down menu...--}}
                        <li><a href="{{ route('cancer_types.index') }}">Generate Emp. Reports</a></li>
                        @endrole

                        {{-- Menu for Users with Volunteer Role Only --}}
                        @role('volunteer')
                        <li><a href="{{ route('cancer_types.index') }}">Manage Activities</a></li>

                        {{-- have to make this a drop down menu...--}}
                        <li><a href="{{ route('cancer_types.index') }}">Generate Vol. Reports</a></li>
                         @endrole

            </ul>
            @endif

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    {{--<li><a  href="{{ url('/login') }}"><i class="fa fa-btn fa-lg fa-fw fa-sign-in"></i>Login</a></li>--}}
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-fw fa-sign-out"></i>Logout</a></li>
                            <li><a href="{{ url('/change-password') }}"><i class="fa fa-btn fa-fw fa-lock"></i>Change Password</a></li>
                            
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
