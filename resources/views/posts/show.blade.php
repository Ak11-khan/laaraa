<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Post</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        {{-- fontawesome --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        {{-- external file styling --}}
        <link rel="stylesheet" href="{{ asset('assets/parsley.css') }}">
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>


       <style>
       #outer
{

    text-align: center;
}
.inner
{
    display: inline-block;
}
</style>
</head>

<body>
  <div class="col-md-6 offset-3 mt-5">
  <h3 class="text-center">Posts</h3>
{{-- no count because we are looking for a single object --}}
 @if($post)

<span><b>Title:</b>{{ $post->title }}</span><br>
<span><b>Description:</b>{{ $post->description }}</span><br>
<span><b>Publish:</b>{{ $post->is_publish  == 1 ? 'yes':'no' }}</span><br>
<span><b>Action:</b></span>

@else
<h1>this id is not present in databse</h1>
@endif
  </div>



    {{-- <a href="{{ url ('/test-2') }}" class="btn btn-info">go</a> --}}
    <script src="//cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
    <script>
      $('#form').parsley();
      </script>

</body>

</html>
