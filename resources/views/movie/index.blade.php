<x-layout>

        <div class="container">
            <div class="row my-5 ">
                <div class="col-12 d-flex justify-content-center">
                    <h1>My Movies</h1>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row my-5">

                @foreach ($movies as $movie)
                <div class="col-12 col-lg-3 col-md-3 my-3">
                    <x-moviecard :movie="$movie" />
                </div>
                @endforeach

            </div>
        </div>
        
</x-layout>
