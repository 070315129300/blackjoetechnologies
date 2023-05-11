<base href="/public">
@include('admin.admincss')
@include('admin.adminsidebar')
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
            <h4>Edit Blog</h4>
        </div>
        <div class="d-flex py-4 " id="hero1">
            <div class="preview-list w-100">
                <div class="preview-item p-0">
                    <div class="preview-item-content d-flex flex-grow">
                        <div class="flex-grow">
                            @foreach($user as $users)
                            <form action="{{url('updateblog', $users->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="grid">
                                    <label class="label mb-3" for="inputTag">Topic</label>
                                    <input type="text" name="topic" id="topic" required placeholder="Topic" value="{{$users->topic}}"/>
                                    <label class="label mb-3" for="inputTag">Select Profile Image</label>
                                    <input  name="file" type="file" />
                                </div>
                                <label class="label mb-3" for="inputTag">Blog body</label>
                                <textarea style="width: 100%" name="body" value="{{$users->body}}" id="body" cols="30" rows="10" placeholder="body" ></textarea>

                                <div class="submit"><button type="submit">Submit</button></div>
                            </form>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>


@include('admin.adminfooter')
