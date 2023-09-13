@extends("admin.layouts.master")





@section("main")

    <main role="main " class="col-md-9 ml-sm-auto col-lg-10 px-4 ">

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom ">
            <h1 class="h5 "><i class="fas fa-newspaper "></i> Articles</h1>
            <div class="btn-toolbar mb-2 mb-md-0 ">
                <a role="button" href="{{route("admin.post.create")}}" class="btn btn-sm btn-success ">create</a>
            </div>
        </div>
        <div class="table-responsive ">
            <table class="table table-striped table-sm ">
                <caption>List of posts</caption>
                <thead>
                <tr>
                    <th>#</th>
                    <th>title</th>
                    <th>summary</th>
                    <th>view</th>
                    <th>status</th>
                    <th>user ID</th>
                    <th>cat ID</th>
                    <th>image</th>
                    <th>setting</th>
                </tr>
                </thead>
                <tbody>
                @foreach($post as $posts)
                <tr>
                    <td>
                        <a class="text-primary" href="">
                            {{$posts->id}}
                        </a>
                    </td>
                    <td>
                    {{$posts->title}}

                    <td>
                        {{Str::limit($posts->summary, 20, '...')}}

                    </td>
                    <td>
                        {{$posts->view}}
                    </td>
                    <td>
                        @if ($posts->breaking_news == 1)
                            <span class="badge badge-success">#breaking_news</span>
                        @endif
                        @if ($posts->selected == 1)
                            <span class="badge badge-dark">#editor_selected</span>
                        @endif
                    </td>
                    <td>
                        {{$posts->user_id}}
                    </td>
                    <td>
                        {{$posts->category_id}}

                    </td>
                    <td>
                        @if (!empty($posts->image))
                            <img style="width: 80px;" src="{{ asset("uploads/$posts->image")}}" alt="{{ $posts->id }}">
                        @else
                            <span class="text-danger">ندارد</span>
                        @endif
                    </td>

                    <td><img style="width: 80px; " src="" alt=""></td>
                    <td style="width: 25rem; ">
                        <a role="button" class="btn btn-sm btn-warning btn-dark text-white" href="{{route("admin.post.breaking-news",$posts->id)}}">
                            @if ($posts->breaking_news == 1)
                                remove breaking news
                            @else
                                add breaking news
                            @endif
                        </a>
                        <a role="button" class="btn btn-sm btn-warning btn-dark text-white" href="{{route("admin.post.selected",$posts->id)}}">
                            @if ($posts->selected == 1)
                                remove selcted
                            @else
                                add selected
                            @endif
                        </a>
                        <hr class="my-1" />
                        <a role="button" class="btn btn-sm btn-primary text-white" href="{{ route('admin.post.edit', $posts->id) }}">edit</a>
                        <form class="d-inline" action="{{ route('admin.post.destroy', $posts->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-sm delete" type="submit"><i class="fa fa-trash-alt"></i> حذف</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>

            </table>
        </div>




    </main>
@endsection

