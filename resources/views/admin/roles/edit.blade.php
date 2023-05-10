<base href="/public">
@include('admin.admincss')
@include('admin.fulladminsidebar')
@include('admin.adminnavbar')


<section class="header">
    <h2>Add Permission</h2>
</section>
<section class="form-container">
    @if(Session::has('success'))
        <div class="alert alert-success">{{Session::get('success')}}</div>
    @endif
    @if(Session::has('fail'))
        <div class="alert alert-danger">{{Session::get('fail')}}</div>
    @endif
    <form action="{{route('admin.permissions.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="grid">
            <input
                type="text"
                name="name"
                id="name"
                required
                placeholder="username"

            />
        </div>

        <div class="submit"><button type="submit">Submit</button></div>
    </form>
</section>


@include('admin.adminfooter')

