@extends('layouts.app')

@section('content')
    <div class="hero isafrica section-text-centered">
        <div class="container">
            <div class="text-fancy">Looking for a name?</div>
            <div class="row">
                <form class="search-wrap">
                    {{csrf_field()}}
                    <div class="fields">
                        <span>
                            <input type="text" placeholder="Search for a name">
                        </span>
                        <span>
                            <input type="button" value="Search">
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="global-pad-white">
        <div class="container">
            @foreach ($names as $name)
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-block">
                            <h3 class="card-title">{{ $name->name }}</h3>
                            <p class="card-details">{{ $name->meaning }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
