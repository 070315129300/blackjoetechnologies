<base href="/public">
@include('admin.admincss')
@include('admin.fulladminsidebar')
@include('admin.adminnavbar')
<section class="form-container">
    <div class="col-md-6 col-xl-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body hero1">
                @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
                @if(Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                @endif
                <h4>Add Role</h4>
            </div>
    <form action="{{route('admin.roles.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="grid">
            <label class="label mb-3" for="inputTag">Name</label>
            <input type="text" name="name" id="name" required placeholder="name"/>
        </div>
        <div class="submit"><button type="submit">Submit</button></div>
    </form>
        </div>
    </div>


</section>


@include('admin.adminfooter')

