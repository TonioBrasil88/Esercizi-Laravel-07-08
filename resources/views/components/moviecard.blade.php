
    <div class="card" style="width: 18rem;">
        <img src="{{ Storage::url($movie->img) }}" class="card-img-top" alt="{{ $movie->title }}">
        <div class="card-body">
            <h5 class="card-title"> {!! $movie->title !!}</h5>
            <p class="card-text">
                {!! Str::limit( $movie->description, 20) !!}
            </p>
            <p class="d-flex justify-content-between">
            <h6><span class="badge bg-info">{{ $movie->genre }}</span></h6>
            <span><strong>Director: </strong>{{ $movie->director }}</span>
            </p>
            <div class="d-flex justify-content-between">
                <a href="{{ route('movie.show', $movie) }}" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                <a href="{{ route('movie.edit', $movie) }}" class="btn btn-warning"><i
                    class="fa-solid fa-pen text-danger"></i></a>

                    {{-- <a class="btn btn-danger" href="{{ route('movie.delete', $movie) }}"></a> --}}
                <form action="{{ route('movie.delete', $movie) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger"><i class="fa-regular fa-trash-can text-light"></i></button>
                </form>
            </div>
        </div>
    </div>

