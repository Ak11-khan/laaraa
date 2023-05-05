
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
<h2 class="text-center">Insert Brands</h2>
<form action="{{ route('brands.store') }}" method="post" class="mb-2" >
    @csrf
<div class="input-group w-90 mb-2 " >
  <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" name="brand_title" placeholder="Insert Brands" aria-label="brand" aria-describedby="basic-addon1">

</div>

<div class="input-group w-10 mb-2 m-auto">

  <input type="submit" class="bg-info border-0 my-3 p-2" name="insert_brand" value="Insert Brands" aria-label="Username" aria-describedby="basic-addon1" class="bg-info">


</div>
</form>
