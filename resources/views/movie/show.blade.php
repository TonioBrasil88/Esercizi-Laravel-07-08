<x-layout>

    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <h1>Movie: {{ $movie->title }}</h1>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row my-5">
            <div class="col-12 col-md-6">
                <img src="{{ Storage::url($movie->img) }}" class="img-fluid w-50" alt="">
            </div>
            <div class="col-12 col-md-6">
                <h3> {{ $movie->title}}</h3>
                <p class="lead mt-4"> {!! $movie->description !!}</p>
                <p class="lead fst-italic">
                    Released: {{ $movie->released_at}}
                </p>
            </div>
    
        </div>
    </div>
    
    </x-layout>
    
        