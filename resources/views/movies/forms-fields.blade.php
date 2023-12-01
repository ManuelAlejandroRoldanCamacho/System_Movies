
    <label for="title_movie">Title Movie
        <input type="text" name="title_movie" value="{{ old('title_movie', $movie_details->title_movie) }}">
        @error('title_movie')
            <br>
            <small class="msg-error">{{ $message }}</small>
        @enderror
    </label>

    <br>

    <label for="description_movie">Description Movie</label>
    <textarea name="description_movie" value="">{{ old('description_movie', $movie_details->description_movie) }}</textarea>
    @error('description_movie')
        <br>
        <small class="msg-error">{{ $message }}</small>
    @enderror

    <br>

    <label for="release_date">Release Date
        <input type="date" name="release_date" value="{{ old('release_date', $movie_details->release_date) }}">
        @error('release_date')
        <br>
            <small class="msg-error">{{ $message }}</small>
        @enderror
    </label>

    <br>

    <label for="duration">Duration
        <input type="text" name="duration" value="{{ old('duration', $movie_details->duration) }}">
        @error('duration')
        <br>
            <small class="msg-error">{{ $message }}</small>
        @enderror
    </label>
    
    <br>

    <label for="image">Image Movie
        <input type="file" name="image">
        @error('image')
        <br>
            <small class="msg-error">{{ $message }}</small>
        @enderror
    </label>

    <br>

    <label for="trailler">Trailler Movie
        <input type="text" name="trailler" value="{{ old('trailler', $movie_details->trailler) }}">
        @error('trailler')
        <br>
            <small class="msg-error">{{ $message }}</small>
        @enderror
    </label>

    <br>

    <label for="calification">Calification
        <input type="number" step="0.1" min="1" max="5" name="calification" value="{{ old('calification', $movie_details->calification) }}">
        @error('calification')
        <br>
            <small class="msg-error">{{ $message }}</small>
        @enderror
    </label>

    <br>

