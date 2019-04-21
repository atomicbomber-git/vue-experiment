@extends('shared.layout')
@section('title', 'Test Test')
@section('content')
<div class="container my-5">
    <h1 class='mb-5'>
        <i class='fa fa-plus'></i>
    </h1>

    <div class="card">
        <div class="card-body">
            <div id="app">
                <item-create
                    submit_url="{{ route('item.store') }}"
                    redirect_url="{{ route('item.index') }}"
                    />
            </div>
        </div>
    </div>
</div>
@endsection