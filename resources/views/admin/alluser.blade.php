@include('admin.admincss')
@include('admin.fulladminsidebar')
@include('admin.adminnavbar')

<div class="row ">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">All User</h4>
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
                            <th>
                                <div class="form-check form-check-muted m-0">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input">
                                    </label>
                                </div>
                            </th>
                            <th> Admin Name </th>
                            <th> Email </th>


                        </tr>
                        </thead>
                        <tbody>
                        @foreach($user as $users)
                        <tr>
                            <td>
                                <div class="form-check form-check-muted m-0">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input">
                                    </label>
                                </div>
                            </td>
                            <td><a href="{{url('edituser', $users->id)}}"></a> {{$users->name}} </td>
                            <td><a href="{{url('edituser', $users->id)}}"></a> {{$users->email}} </td>
                            <td>
                                <a class="btn btn-success" href="{{url('edituser', $users->id)}}">Roles</a>
                            </td>
                            <td>
                                <a class="btn btn-danger" href="{{url('edituser', $users->id)}}">Permissions</a>
                            </td>
                            <td><a class="btn btn-danger" onclick="return confirm('are you sure you want to delete this appointment')" href="{{url('deleteuser', $users->id)}}">Delete</a></td>

                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin.adminfooter')
