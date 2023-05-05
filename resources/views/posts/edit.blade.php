<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Post</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('assets/parsley.css') }}">
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>

<body>
  <div class="col-md-6 offset-3 mt-5">
            <h3 class="text-center">Edit Post</h3>
          {{-- for displaying any error --}}
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- session set --}}
               @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
       {{-- now we are sending our form to update in controller with put method --}}
       {{-- otherwise it will read the store method  --}}

            <form method="post" action="{{ route('posts.update',$post->id) }}" style="margin-top: 35px" id="form">
              @csrf
              @method('PATCH')
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="mb-3">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" placeholder="title" value="{{ old('title',$post->title) }}">
                </div>

                <div class="mb-3">
                    <label>description</label>
                    <textarea class="form-control" name="description" placeholder="Enter message here"> {{ old('description',$post->description) }}</textarea>
                </div>

                <div class="mb-3">
                    <label>published</label>
                    <select name="is_publish" class ="form-control">
                        <option disabled selected>Choose option</option>
                        <option value="1" @selected( old('is_publish',$post->is_publish) == 1) >Yes </option>
                        <option value="0" @selected( old('is_publish',$post->is_publish) == 0) > No </option>


                    </select>
                </div>



                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    {{-- <a href="{{ url ('/test-2') }}" class="btn btn-info">go</a> --}}
    <script src="//cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
    <script>
      $('#form').parsley();
      </script>

</body>

</html>
