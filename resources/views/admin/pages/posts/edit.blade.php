@extends("admin.layouts.master")





@section("main")

    <main role="main " class="col-md-9 ml-sm-auto col-lg-10 px-4 ">

        <section class="pt-3 pb-1 mb-2 border-bottom ">
            <h1 class="h5">Edit Article</h1>
        </section>
        <section class="row my-3">
            <section class="col-12">

                <form method="post" action="{{ route('admin.post.update', $post->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method("put")
                    <div class="form-group ">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter title ..." value="{{ old('title' , $post->title) }}">
                    </div>

                    <div class="form-group">
                        <label for="">category</label>
                        <select name="category_id" id="" class="form-control form-control-sm">
                            <option value="">selected category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" @if (old('category_id' , $post->category_id) == $category->id) selected @endif>
                                    {{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group ">
                        <img style="width: 100px; " src="{{ asset("uploads/$post->image")}}" alt="">
                        <hr/>
                        <label for="image">Image</label>
                        <input type="file" id="image" name="image" class="form-control-file" value="{{ old('image' , $post->image) }}" autofocus>
                    </div>

                    <div class="form-group">
                        <label for="">published at</label>
                        <input type="text" name="published_at" id="published_at" class="form-control form-control-sm d-none">
                        <input type="text" id="published_at_view" class="form-control form-control-sm" value="{{ old('published_at' , $post->published_at) }}">
                    </div>

                    <div class="form-group">
                        <label for="summary">summary</label>
                        <textarea class="form-control" id="summary" name="summary" placeholder="summary ... " rows="3 " >{{ old('summary' , $post->summary) }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="body">body</label>
                        <textarea class="form-control" id="body" name="body" placeholder="body ... " rows="5 " >{{ old('body' , $post->body) }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm ">update</button>
                </form>
            </section>
        </section>



    </main>
@endsection
@section("script")
    <script src="{{asset("assets/admin/ckeditor/ckeditor.js")}}"></script>
    <script src="{{asset("assets/admin/jalalidatepicker/persian-datepicker.min.js")}}"></script>
    <script src="{{asset("assets/admin/jalalidatepicker/persian-date.min.js")}}"></script>

    <script>
        CKEDITOR.replace("summary");
        CKEDITOR.replace("body");
    </script>
    <script>
        $(document).ready(function () {
            $('#published_at_view').persianDatepicker({
                format: 'YYYY/MM/DD',
                altField: '#published_at'
            })
        });
    </script>
@endsection
