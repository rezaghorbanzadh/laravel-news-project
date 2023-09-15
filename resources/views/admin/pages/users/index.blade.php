@extends("admin.layouts.master")





@section("main")

    <main role="main " class="col-md-9 ml-sm-auto col-lg-10 px-4 ">

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom ">
            <h1 class="h5 "><i class="fas fa-newspaper "></i> Users</h1>
            <div class="btn-toolbar mb-2 mb-md-0 ">
                <a role="button" href="" class="btn btn-sm btn-success disabled">create</a>
            </div>
        </div>
        <section class="table-responsive ">
            <table class="table table-striped table-sm ">
                <caption>List of users</caption>
                <thead>
                <tr>
                    <th>#</th>
                    <th>name</th>
                    <th>email</th>
                    <th>password</th>
                    <th>permission</th>
                    <th>created at</th>
                    <th>setting</th>
                </tr>
                </thead>
                <tbody>
                @foreach($user as $users)
                <tr>
                    <td>{{$users->id}}</td>
                    <td>{{$users->name}}</td>
                    <td>{{$users->email}}</td>
                    <td>{{$users->password}}</td>
                    <td>{{$users->permission}}</td>
                    <td>{{$users->created_at}}</td>
                    <td>

                        @if ($users['permission'] == 0)
                            <a role="button" class="btn btn-sm btn-success text-white" href="{{route('admin.user.change', $users->id) }}">click to be admin</a>
                        @else
                            <a role="button" class="btn btn-sm btn-warning text-white" href="{{route('admin.user.change', $users->id) }}">click not to be admin</a>
                        @endif


                        <a role="button" class="btn btn-sm btn-primary text-white" href="{{ route('admin.user.edit', $users->id) }}">edit</a>
                        <form class="d-inline" action="{{ route('admin.user.destroy', $users->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-sm delete" type="submit"><i class="fa fa-trash-alt"></i> delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </section>


    </main>

@endsection
