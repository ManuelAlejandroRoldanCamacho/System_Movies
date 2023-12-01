
    <label for="category">Category
        <input type="text" name="category" value="{{ old('category', $category_details->catogory) }}">
        @error('category')
            <br>
            <small class="msg-error">{{ $message }}</small>
        @enderror
    </label>

    <br>

    <br>

