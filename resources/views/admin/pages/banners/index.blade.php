@extends("admin.layouts.master")





@section("main")


    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom ">
            <h1 class="h5 "><i class="fas fa-image "></i> Banner</h1>
            <div class="btn-toolbar mb-2 mb-md-0 ">
                <a role="button" href="{{route("admin.banner.create")}}" class="btn btn-sm btn-success">create</a>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <caption>List of banners</caption>
                <thead>
                <tr>
                    <th>#</th>
                    <th>url</th>
                    <th>image</th>
                    <th>setting</th>
                </tr>
                </thead>
                <tbody>
                @foreach($banner as $banners)
                <tr>
                    <td>
                        {{$banners->id}}
                    </td>
                    <td>
                        {{Str::limit($banners->url, 40, '...')}}

                    </td>
                    <td> @if (!empty($banners->image))
                            <img style="width: 80px;" src="{{ asset("uploads/$banners->image")}}" alt="{{ $banners->id }}">
                        @else
                            <span class="text-danger">عکس ندارد</span>
                        @endif</td>
                    <td>
                        <a role="button" class="btn btn-sm btn-primary text-white" href="{{ route('admin.banner.edit', $banners->id) }}">edit</a>
                        <form class="d-inline" action="{{ route('admin.banner.destroy', $banners->id) }}" method="post">
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
