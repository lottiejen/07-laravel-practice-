
@extends("app")

@section("content")
  <div class="list-group">

    {{-- loop over all of the owners --}}
    {{-- each owner object goes into $owner --}}
    @foreach (App\Models\Owner::all() as $owner) {{--  get owners from db and putting in $owner variable--}}
      <a href="/owner/{{ $owner->id }}" class="list-group-item list-group-item-action">
        <div class="d-flex w-100 justify-content-between">

          {{-- output the owner title --}}
          <h5 class="mb-1">{{ $owner->fullName() }}</h5>

          {{-- use the relativeDate() method --}}
          
        </div>

        {{-- output the truncated content --}}
        <p class="mb-1">{{ $owner->town }}</p>
      </a>
    @endforeach
  </div>
@endsection

@foreach ($owner as $owner)
    <a href="/owners/{{ $owner->id }}">
    
    {{-- output the owner title --}}
        <h5>{{ $owner->fullName() }}</h5>
    </a>
@endforeach