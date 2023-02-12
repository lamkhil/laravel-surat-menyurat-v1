@extends('layout.main')

@section('content')
    @if(1==2)
        <x-breadcrumb :values="[__('menu.transaction.menu'), 'Surat Undangan']">
            <a href="{{ route('transaction.invite.create') }}" class="btn btn-primary">{{ __('menu.general.create') }}</a>
        </x-breadcrumb>

        @foreach($data as $letter)
        <x-letter-card :letter="$letter" />
        @endforeach

        {!! $data->appends(['search' => $search])->links() !!}
    @else
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <h2 style="margin: auto; max-width: 300px;">Under Maintenance</h1>
    @endif
@endsection