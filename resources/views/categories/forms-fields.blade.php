
    <label class="input-group-text" for="category">Category</label>
    <input class="form-control" type="text" name="category" value="{{ $category_details->category }}" required>
    @error('category')
        <br>
        <small class="msg-error">{{ $message }}</small>
    @enderror
