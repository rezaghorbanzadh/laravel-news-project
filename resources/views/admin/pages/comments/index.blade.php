@extends("admin.layouts.master")





@section("main")
    <main role="main " class="col-md-9 ml-sm-auto col-lg-10 px-4 ">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom ">
            <h1 class="h5 "><i class="fas fa-newspaper "></i> Comments</h1>
            <div class="btn-toolbar mb-2 mb-md-0 ">
                <a role="button " href="# " class="btn btn-sm btn-success disabled ">create</a>
            </div>
        </div>
        <section class="table-responsive ">
            <table class="table table-striped table-sm ">
                <caption>List of comments</caption>
                <thead>
                <tr>
                    <th>#</th>
                    <th>user name</th>
                    <th>post ID</th>
                    <th>comment</th>
                    <th>status</th>
                    <th>setting</th>
                </tr>
                </thead>
                <tbody>
                @foreach($comment as $comments)
                    <tr>
                    <td><a href="">1</a></td>
                    <td>{{ $comments->user->name }}</td>
                    <td>{{ $comments->post->title }}</td>
                    <td>{{ $comments->comment }}</td>
                    @if ($comments->status == 1)
                        <td>فعال</td>
                    @else
                        <td>غیر فعال</td>
                    @endif

                    <td>
                        @if($comments->status == 0)
                            <a class="btn btn-sm btn-success text-white" href="{{ route('admin.comment.status', $comments->id) }}">click to approved</a>
                        @else
                            <a class="btn btn-sm btn-warning text-white" href="{{ route('admin.comment.status', $comments->id) }}">click not to approved</a>
                        @endif

                        <form class="d-inline" action="{{ route('admin.comment.destroy', $comments->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-sm delete" type="submit"><i class="fa fa-trash-alt"></i> Delete</button>
                        </form>

                    </td>
                @endforeach
                    </tr>
                </tbody>
            </table>
        </section>


    </main>
@endsection
