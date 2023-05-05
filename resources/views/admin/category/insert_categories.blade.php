@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
<!-- <title>Insert Categories</title> -->
<h2 class="text-center">Insert Categories</h2>
<form action="{{ route('categories.store') }}" method="post" class="mb-2" >
    @csrf
<div class="input-group w-90 mb-2 " >
  <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" name="cat_title" placeholder="Insert Categories" aria-label="Username" aria-describedby="basic-addon1">
</div>

<div class="input-group w-10 mb-2 m-auto">

  <input type="submit" class="bg-info border-0 p-2 my-3" name="insert_cat" value="Insert Categories" >
<!-- my-3 only top and bottom spacing  -->
  <!-- <button class="bg-info p-3 my-3 border-0">Insert Categories</button> -->

</div>
</form>
