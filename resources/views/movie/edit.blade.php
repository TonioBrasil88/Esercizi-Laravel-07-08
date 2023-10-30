<x-layout>

<section>

    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <h1>Modifica Film: <span class="text-primary">{{ $movie->title}}</span></h1>
            </div>


            <div class="container">
                <div class="row my-5">
                    <div class="col-12 col-md-6">
                                <form method="post" action="{{ route('movie.update', $movie) }}" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" name="title" value="{{ $movie->title }}" class="form-control @error('title') is-invalid @enderror">
                                @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="genre" class="form-label">Genre</label>
                                <input type="text" name="genre" value="{{ $movie->genre }}" @error('genre') @enderror class="form-control">
                                @error('genre')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="director" class="form-label">Director</label>
                                <input type="text" name="director" value="{{ $movie->director }}" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label for="img" class="form-label">Img</label>
                                    <div class="d-flex">
                                        <input type="file" name="img" class="form-control @error('img') is-invalid @enderror">
                                        <img src="{{ Storage::url($movie->img)}}" class="img-fluid" style="width:50px">
                                 </div>
                            </div>
                            <div class="mb-3">
                                <label for="released_at" class="form-label">Released At</label>
                                <input type="number" name="released_at" value="{{ $movie->released_at }}" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea name="description" class="form-control @error('description') is-invalid @enderror" cols="30" rows="10">{{ $movie->description }}</textarea>
                                @error('genre')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
</x-layout>
