@extends('layouts.niceadmin')

{{-- @include('livewire.refeicao.marcacao-index') --}}
@section('content')
    <main id="main" class="main">
        @livewire('refeicao.ementas')
    </main>
@endsection
