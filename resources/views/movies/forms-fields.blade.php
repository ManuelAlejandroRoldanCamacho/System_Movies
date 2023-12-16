
    <div class="input-group my-3">
        <span class="input-group-text">Title Movie</span>
        <input class="form-control" type="text" name="title_movie" value="{{ old('title_movie', $movie_details->title_movie) }}" placeholder="Example: A New Title Movie" required>
    </div>
    @error('title_movie')
        <br>
        <small class="msg-error invalid-feedback">{{ $message }}</small>
    @enderror
    
    <div class="input-group my-3">
        <span class="input-group-text">Desciption Movie</span>
        <textarea class="form-control" name="description_movie" placeholder="Add a description with 100 or more characters" required>{{ old('description_movie', $movie_details->description_movie) }}</textarea>
    </div>
    @error('description_movie')
        <br>
        <small class="msg-error invalid-feedback">{{ $message }}</small>
    @enderror

    <div class="input-group my-3">
        <span class="input-group-text">Release Date</span>
        <input class="form-control" type="date" name="release_date" value="{{ old('release_date', $movie_details->release_date) }}">
    </div>
    @error('release_date')
        <br>
        <small class="msg-error invalid-feedback">{{ $message }}</small>
    @enderror

    
    <div class="input-group my-3">
        <span class="input-group-text">Duration</span>
        <input class="form-control" type="text" name="duration" value="{{ old('duration', $movie_details->duration) }}" placeholder="Example: 1h 28min" required>
    </div>    
    @error('duration')
    <br>
        <small class="msg-error invalid-feedback">{{ $message }}</small>
    @enderror

    <div class="input-group my-3">
        <span class="input-group-text">Movie Image</span>
        <input class="form-control" type="file" name="image">
    </div>   
    @error('image')
    <br>
        <small class="msg-error invalid-feedback">{{ $message }}</small>
    @enderror

    <div class="input-group my-3">
        <span class="input-group-text">Trailler Movie</span>
        <input class="form-control" type="text" name="trailler" value="{{ old('trailler', $movie_details->trailler) }}" placeholder="Example: https://www.example.com" required>
    </div>
    @error('trailler')
    <br>
        <small class="msg-error">{{ $message }}</small>
    @enderror
    
    <div class="input-group my-3">
        <span class="input-group-text">Calification</span>
        <input class="form-control" type="number" step="0.1" min="1" max="5" name="calification" value="{{ old('calification', $movie_details->calification) }}" placeholder="Example: 1.8" required>
    </div>
    @error('calification')
    <br>
        <small class="msg-error">{{ $message }}</small>
    @enderror
