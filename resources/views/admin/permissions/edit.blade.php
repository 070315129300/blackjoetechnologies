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
            <h4>Edit Permission</h4>
        </div>
        <div class="d-flex py-4 " id="hero1">
            <div class="preview-list w-100">
                <div class="preview-item p-0">
                    <div class="preview-item-content d-flex flex-grow">
                        <div class="flex-grow">
    <form action="{{route('admin.permissions.update', $permission)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="grid">
            <input type="text" name="name" id="name" required placeholder="username" value="{{$permission->name}}"/>
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
            @if(Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
            @endif
            @if(Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
            @endif
            <h4>Role</h4>
        </div>
    <div>
        @if ($permission->roles)
            @foreach($permission->roles as $permission_role)
                <form method="POST" action="{{route('admin.permissions.role.remove', [$permission->id, $permission_role->id])}}" onsubmit="return confirm('Are You Sure')">
                    @csrf
                    @method('DELETE')
                    <button class="btn-danger" type="submit">{{$permission_role->name}}</button>
                </form>
            @endforeach
        @endif
    </div>

        <div class="d-flex py-4 " id="hero1">
            <div class="preview-list w-100">
                <div class="preview-item p-0">
                    <div class="preview-item-content d-flex flex-grow">
                        <div class="flex-grow">
    <form action="{{route('admin.permissions.roles', $permission->id)}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="grid">
            <label for="permission">Roles</label>
            <select name="role" id="role>
                @foreach($roles as $role )
                    <option value="{{$role->name}}">{{$role->name}}</option>
                @endforeach
            </select>
            <br><br>
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
</section>

@include('admin.adminfooter')

