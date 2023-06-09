@include('admin.admincss')
@include('admin.adminsidebar')
@include('admin.adminnavbar')

<div class="row ">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">All Blog</h4>
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
                            <th> Image </th>
                            <th> Topic </th>
                            <th> Body </th>

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
                                <td>   <img  height="120px" src="blogimage/{{$users->image}}" width="120px" alt="">
                                </td>
                                <td> {{$users->topic}} </td>
                                <td> {{$users->body}} </td>
                                <td><a class="btn btn-primary" onclick="return confirm('are you sure you')" href="{{url('editblog', $users->id)}}">Edit</a></td>
                              <td>
                                <form action="{{ url('deleteblog', $users->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this blog?')">Delete</button>
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
@include('admin.adminfooter')
