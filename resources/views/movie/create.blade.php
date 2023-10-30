<x-layout>


    <div class="bg-image pt-1 pb-5"
        style="background-image: url('https://images.unsplash.com/photo-1594908900066-3f47337549d8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');">

        <div class="container">
            <div class="row my-5">
                <div class="col-12 d-flex justify-content-center">
                    <h1>Crea il tuo nuovo Film</h1>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row my-5 d-flex justify-content-center">
                <div class="col-12 col-md-5 ">
                    <form method="post" action="{{ route('movie.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" value="{{ old('title') }}"
                                class="form-control @error('title') is-invalid @enderror">
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="genre" class="form-label">Genre</label>
                            <input type="text" name="genre" value="{{ old('genre') }}" @error('genre') @enderror
                                class="form-control">
                            @error('genre')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="director" class="form-label">Director</label>
                            <input type="text" name="director" value="{{ old('director') }}" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="img" class="form-label">Img</label>
                            <input type="file" name="img"
                                class="form-control @error('img') is-invalid @enderror">
                        </div>
                        <div class="mb-3">
                            <label for="released_at" class="form-label">Released At</label>
                            <input type="number" name="released_at" value="{{ old('released_at') }}"
                                class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" class="form-control @error('description') is-invalid @enderror" cols="30"
                                rows="10">{{ old('description') }}</textarea>
                            @error('genre')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
   
</x-layout>
