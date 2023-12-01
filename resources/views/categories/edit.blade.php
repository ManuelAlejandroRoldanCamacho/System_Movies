<h2>Edit Category Form</h2>

<form action="{{ route('category.update', $category_details) }}" method="post">

    @csrf @method('PATCH')

    <br>

    @include('categories/forms-fields')

    <input type="submit" value="Edit">

</form>