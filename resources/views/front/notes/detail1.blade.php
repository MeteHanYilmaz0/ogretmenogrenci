
@php use Illuminate\Support\Str; @endphp
@extends("front.layouts.master")


@section("content")



    <div class="d-flex justify-content-between">
        <h2>Notlar sayfası</h2>
        <a class="btn btn-success " href="" >Güncelle</a>
    </div>


    <div class="bg-white p-3 rounded-3 ">

        <h2>1.Vize notu: {{$not->vize_1}}</h2>
        <hr>
        <h2>2.Vize notu: {{$not->vize_2}}</h2>
        <hr>
        <h2>Final notu: {{$not->final}}</h2>

        <span class="text-muted opacity-75">{{$not->updated_at->diffForHumans()}}</span>
    </div>



@endsection
