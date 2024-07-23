<div>
    <h1>Url1 page</h1>
    <h3>
         {{URL::current()}} {{--// it can get http://127.0.0.1:8000/url1 --}}
        <br> {{url() -> current()}}

    </h3>
    <a href="/url2">Url 2</a>
    <h3>

        {{URL::full()}}{{--// it can get http://127.0.0.1:8000/url1?name=mehul --}}
    </h3>

    <!-- An unexamined life is not worth living. - Socrates -->
</div>
