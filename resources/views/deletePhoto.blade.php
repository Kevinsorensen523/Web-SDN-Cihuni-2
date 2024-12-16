@foreach($photos as $foto)
    <img src="{{asset('storage/'.$foto->path)}}" width="100px"/>
    <form action="/{{$foto->tipe}}/deletePhoto" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$foto->belongsTo}}" />
        <input type="hidden" name="fotoId" value="{{$foto->id}}" />
        <button type="submit">Delete</button>
    </form>
@endforeach
<a href="/">Done</a>