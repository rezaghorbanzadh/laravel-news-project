@extends("admin.layouts.master")





@section("main")

    <main role="main " class="col-md-9 ml-sm-auto col-lg-10 px-4 ">

        <section class="pt-3 pb-1 mb-2 border-bottom ">
            <h1 class="h5 ">Edit Banner</h1>
        </section>
        <section class="row my-3 ">
            <section class="col-12 ">

                <form method="post" action="{{route("admin.banner.update",$banner->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method("put")
                    <div class="form-group">
                        <label for="url">Url</label>
                        <input type="text" class="form-control" id="url" name="url" placeholder="Enter url ..." value="{{ old('url' , $banner->url) }}">
                    </div>

                    <div class="form-group">
                        <img style="width: 100px; " src="{{ asset("uploads/$banner->image")}}" alt=" ">
                        <hr/>
                        <label for="image">Image</label>
                        <input type="file" id="image" name="image" class="form-control-file ">
                    </div>

                    <button type="submit" class="btn btn-primary btn-sm ">update</button>
                </form>
            </section>
        </section>



    </main>


@endsection
