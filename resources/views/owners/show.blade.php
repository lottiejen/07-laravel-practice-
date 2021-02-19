@extends("app")  {{-- this extends the view of the parent app.blade.php --}}

@section("content")
                {{-- output the owner details --}}
            <h5>{{ $owner->fullName() }}</h5>
            <p>{{ $owner->town }}</p>
@endsection