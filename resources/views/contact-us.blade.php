<x-layout>

    <section>

        <div class="container">
            <div class="row my-5">
                <div class="col-12 d-flex justify-content-center">
                    <h1>CONTACT US</h1>
                </div>

                <div class="container">
                    <div class="row my-5">

                        @if (session()->has('successMessage'))
                            <div>
                                <div class="alert alert-success">
                                    <p>{{ session('successMessage') }}</p>
                                </div>
                            </div>
                        @endif

                        <div class="col-12 mt-5">
                            <form method="POST" action="{{ route('email') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="userEmail"
                                        aria-describedby="emailHelp" name="email">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                        anyone
                                        else.</small>
                                </div>
                                <div class="mb-3">
                                    <label for="object">Subject</label>
                                    <input type="text" class="form-control" id="object" name="subject">
                                </div>
                                <div class="mb-3">
                                    <label class="form-check-label" for="message">Message</label>
                                    <textarea class="form-control" id="message" name="message"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layout>
