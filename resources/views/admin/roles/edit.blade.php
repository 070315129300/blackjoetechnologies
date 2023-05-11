<base href="/public">
@include('admin.admincss')
@include('admin.fulladminsidebar')
@include('admin.adminnavbar')

<div class="col-md-6 col-xl-4 grid-margin stretch-card">
    <div class="card">
        <div class="card-body hero1">
            @if(Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
            @endif
            @if(Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
            @endif
            <h4>Edit Role</h4>
        </div>
        <div class="d-flex py-4 " id="hero1">
            <div class="preview-list w-100">
                <div class="preview-item p-0">
                    <div class="preview-item-content d-flex flex-grow">
                        <div class="flex-grow">

    <form action="{{route('admin.roles.update', $role->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="grid">
            <input type="text" name="name" id="name" required placeholder="username" value="{{$role->name}}"/>
        </div>
        <div class="submit"><button type="submit">Submit</button></div>
    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="col-md-6 col-xl-4 grid-margin stretch-card">
    <div class="card">
        <div class="card-body hero1">
            @if(Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
            @endif
            @if(Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
            @endif
            <h4>Role Permission</h4>
        </div>

        <div>
            @if ($role->permissions)
                @foreach($role->permissions as $role_permission)
                    <form method="POST" action="{{route('admin.roles.permissions.revoke', $role->id, $role_permission)}}" onsubmit="return confirm('Are You Sure')">
                        @csrf
                        @method('DELETE')
                        <button class="btn-danger" type="submit">{{$role_permission->name}}</button>
                    </form>
                @endforeach
            @endif
        </div>

        <div class="d-flex py-4 " id="hero1">
            <div class="preview-list w-100">
                <div class="preview-item p-0">
                    <div class="preview-item-content d-flex flex-grow">
                        <div class="flex-grow">

                            <form action="{{route('admin.roles.permissions', $role->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="grid">
                                    <label for="permission">Permission</label>
                                    <select name="permission" id="permission">
                                        @foreach($permission as $permissions )
                                            <option value="{{$permissions->name}}">{{$permissions->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="submit"><button type="submit">Submit</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</section>
@include('admin.adminfooter')

