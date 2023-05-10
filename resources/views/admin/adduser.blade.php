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
            <h4>Add User</h4>
        </div>
        <div class="d-flex py-4 " id="hero1">
            <div class="preview-list w-100">
                <div class="preview-item p-0">
                    <div class="preview-item-content d-flex flex-grow">
                        <div class="flex-grow">
                            <form action="{{url('insertuser')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="grid">
                                    <label class="label mb-3" for="inputTag">Fullname</label>
                                    <input type="text" name="name" id="topic" required placeholder="Fullname"/>
                                    <label class="label mb-3" for="inputTag">Email</label>
                                    <input  name="email" id="email" required placeholder="email" />
                                    <label class="label mb-3" for="inputTag">Password</label>
                                    <input type="password" name="password" id="phone" required placeholder="password"/>
                                </div>

                                <div class="submit"><button type="submit">Submit</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@include('admin.adminfooter')
