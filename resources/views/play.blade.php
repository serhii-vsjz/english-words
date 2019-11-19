@extends ('layouts.app')
@section('content')

    <div align="center"
         @if ($last_correctly)
            style="color: #38c172">
        @else
            style="color: #e3342f">
        @endif
        <p> {{ $last_russian }} - {{ $last_english }}</p>
    </div>


    <form action="{{ route('word_check', ['id' => $id ]) }}" method="post" align="center">
        @csrf
        {{ method_field('patch') }}
        <div >
            <label for="english">{{ $russian }}</label><br>
            <input name="english" type="text" autocomplete="off"/><br>
        </div>

        <button type="submit" style="margin: 10px">Check</button>
    </form>
@endsection
