@extends('layouts.niceadmin')

@section('content')
    <main id="main">

        <div class="pagetitle">
            <h1>Avisos</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a> / Admin / Avisos</li>
                </ol>
            </nav>
        </div>
        
        @livewire('avisos.admin-aviso-index')
    </main>
@endsection
