<base href="/public">
@include('admin.admincss')
@include('admin.fulladminsidebar')
@include('admin.adminnavbar')

<!-- partial -->

<div class="row ">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-row justify-content-between">
                    <h4 class="card-title">Permission</h4>
                    <p class="text-muted mb-1 small"><a href="{{route('admin.permissions.create')}}">Create permission</a></p>
                </div>
                <div class="table-responsive">
                    @if(Session::has('success'))
                        <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif
                    @if(Session::has('fail'))
                        <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif
                    <table class="table">
                        <thead>
                        <tr>
                            <th>  Name </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            @foreach($permission as $permissions)
                                <td> {{$permissions->name}} </td>
                                <td>
                                    <a class="btn btn-primary" href="{{route('admin.permissions.edit', $permissions->id)}}" >Edit Role</a>
                                </td>
                                <td>
                                    <form method="POST" action="{{route('admin.permissions.destroy', $permissions->id)}}" onsubmit="return confirm('Are You Sure')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn-danger" type="submit">Delete</button>

                                    </form>
                                </td>

                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- content-wrapper ends -->
<!-- partial:partials/_footer.html -->
@include('admin.adminfooter')

<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <!-- Left Side Of Navbar -->
    <ul class="navbar-nav me-auto">

    </ul>

    <!-- Right Side Of Navbar -->
    <ul class="navbar-nav ms-auto">
        <!-- Authentication Links -->
        @guest
            @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endif

            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </ul>
</div>



