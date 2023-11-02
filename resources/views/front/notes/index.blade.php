@php use Illuminate\Support\Str; @endphp
@extends("front.layouts.master")


@section("content")

    <a class="btn btn-success" href="{{route("notes.createPage")}}">Sınav Notu Gir.</a>
    <br>

    <h1>Notlar</h1>

    <br> <br> <br>
    @if(session("success"))
        <div class="alert alert-success">
            {{session("success")}}
        </div>
    @endif


    @if($notlar->count()>0 )
        @foreach($notlar as  $not)

            <div class="bg-white border-b border-gray-200 shadow-sm sm:rounded-lg p-3">
                <h2 class="font-bold text-2xl"><a class="text-black" href="{{route("notes.detail1",$not->id)}}"  target="_blank" style="text-decoration: none ">Vize notlarını görmek için giriniz.</a>  </h2>



                <span class="block text-xs opacity-50">{{$not->updated_at->diffForHumans()}}</span>
            </div>
            <br>

        @endforeach



    @else
        <div class="container">
            <h3 class="text-warning">Herhangi bir öğrenci için henüz bir not girmediniz.</h3>
        </div>

    @endif

@endsection
