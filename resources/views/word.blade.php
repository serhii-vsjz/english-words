@extends ('layouts.app')
@section('content')

    <form action="{{ route('word_check', ['id' => $word['id'] ]) }}" method="post" align="center">
        @csrf
        {{ method_field('patch') }}
        <div >
            <label for="english">{{ $word->russian }}</label>
            <input name="english" type="text" autocomplete="off"/>
        </div>

        <button type="submit">Check</button>
    </form>
@endsection
