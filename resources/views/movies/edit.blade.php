<h2>Edit Movie Form</h2>

<form action="{{ route('movies.update', $movie_details) }}" method="post" enctype="multipart/form-data">

    @csrf @method('PATCH') 

    <br>

    @include('movies/forms-fields')

    <input type="submit" value="Edit">

</form>