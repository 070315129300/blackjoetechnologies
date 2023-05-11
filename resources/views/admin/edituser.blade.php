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
            <h4>Edit User</h4>
        </div>
        <div class="d-flex py-4 " id="hero1">
            <div class="preview-list w-100">
                <div class="preview-item p-0">
                    <div class="preview-item-content d-flex flex-grow">
                        <div class="flex-grow">
    <form action="{{url('updateuser',$user->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="grid">
            <input type="text" name="name" id="name" required placeholder="name" value="{{$user->name}}"/>
            <input type="text" name="email" id="email" required placeholder="email" value="{{$user->email}}"
            />
        </div>
        <div class="submit"><button type="submit">Update</button></div>
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
            <h4>Roles</h4>
        </div>
        <div class="d-flex py-4 " id="hero1">
            <div class="preview-list w-100">
                <div class="preview-item p-0">
                    <div class="preview-item-content d-flex flex-grow">
                        <div class="flex-grow">

        @if ($user->roles)
            @foreach($user->roles as $user_role)
                <form method="POST" action="{{route('admin.users.roles.remove', [$user->id, $user_role->id])}}" onsubmit="return confirm('Are You Sure')">
                    @csrf
                    @method('DELETE')
                    <div class="grid">
                    <button class="btn-danger" type="submit">{{$user_role->name}}</button>
                    </div>
                </form>
            @endforeach
        @endif

    <form action="{{url('admin.users.roles', $user->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="grid">
            <label for="permission">Roles</label>
            <select name="role" id="role>
                @foreach($roles as $role )
                <option value="{{$role->name}}">{{$role->name}}</option>
            @endforeach
            </select>
        </div>
        <div class="submit"><button type="submit">Assign</button></div>
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
            <h4>Permission</h4>
        </div>
        <div class="d-flex py-4 " id="hero1">
            <div class="preview-list w-100">
                <div class="preview-item p-0">
                    <div class="preview-item-content d-flex flex-grow">
                        <div class="flex-grow">
    <div>
        @if ($user->permissions)
            @foreach($user->permissions as $user_permission)
                <form method="POST" action="{{route('admin.users.permissions.remove', [$user->id, $user_permission->id])}}" onsubmit="return confirm('Are You Sure')">
                    @csrf
                    @method('DELETE')
                    <button class="btn-danger" type="submit">{{$user_permission->name}}</button>
                </form>
            @endforeach
        @endif
    </div>


    <form action="{{url('users.permissions', $user->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="grid">
            <label for="permission">Permission</label>
            <select name="permission" id="permission>
                @foreach($permissions as $permission)
                <option value="{{$permission->name}}">{{$permission->name}}</option>
            @endforeach
            </select>

        </div>
        <div class="submit"><button type="submit">Assign</button></div>
    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('admin.adminfooter')

