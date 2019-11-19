@extends ('layouts.app')
@section('content')

    <form action="{{ route('word_check', ['id' => $word->id ]) }}" method="post">
        @csrf
        {{ method_field('PATCH') }}
        <div>
            <label>{{ $word->english }}</label>
            <input name="russian" type="text"/>
        </div>

        <button type="submit">Edit</button>
    </form>

@endsection
