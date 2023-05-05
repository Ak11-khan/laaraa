


<h3 class="text-center text-success">All Brands</h3>
<table class="center">

<thead class="bg-info text-center">
  <tr>
    <th>Ser #</th>
    <th>Brand Title</th>
    <th>Edit</th>
    <th>Delete</th>
     </tr>
</thead>
<tbody class="bg-secondary text-light text-center">
    @foreach($brands as $brand)
  <tr>
 <td>{{ $loop->iteration }}</td>
 <td>{{ $brand->brand_title }}</td>
 <td><a href='#' class='text-light'><i class='fa-solid fa-pen-to-square'></i></a></td>
<td><a href='#' class='text-light'><i class='fa-solid fa-trash'></i></a></td>

</tr>
<!-- for including all number and all in php  -->

@endforeach
</tbody>
</table>
