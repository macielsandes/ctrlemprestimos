@extends('admin.layouts.default')

@section('title', 'Empréstimo')

@section('content')
    <div class="container-fluid border p-3 mt-10">
        <div class="row">
            <div class="col">
                <div class="container-fluid bg-light border p-4 rounded text-center">
                    <h1>Emprestar Material</h1>
                </div>
            </div>
        </div>
    </div>

</div class="card-body">
    <form action="{{ route('loans.store') }}" method="post">
        @csrf
        @include('admin.loans._partials.form')
    </form>
</div>
@endsection
