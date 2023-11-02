@extends("front.layouts.master")


@section("content")
    @if($errors->any() )

        <div class="alert alert-danger">
            <ul>

                @foreach($errors->all() as $error )

                    <li>{{$error}} </li>

                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route("notes.addNote")}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="vize_1" class="form-label">Vize-1</label>
            <input type="number" class="form-control" name="vize_1" placeholder="Lütfen notu girin." id="vize_1" aria-describedby="vize_1">

        </div>
        <div class="mb-3">
            <label for="vize_2" class="form-label">Vize-2</label>
            <input type="number" class="form-control" name="vize_2" placeholder="Lütfen notu girin." id="vize_2" aria-describedby="vize_2">

        </div>
        <div class="mb-3">
            <label for="final" class="form-label">Final</label>
            <input type="number" class="form-control" name="final" placeholder="Lütfen notu girin." id="final" aria-describedby="final">

        </div>


        <button type="submit" class="btn btn-success">Gönder</button>
    </form>


@endsection
