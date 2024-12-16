<a href="kegiatan/create">Create New Kegiatan</a>
<a href="ekskul/create">Create New Ekskul</a>

<h1>Kegiatan</h1>
<table border="1px">
    <tr>
        <th>Judul</th>
        <th>Deskripsi</th>
        <th>Edit</th>
        <th>Add Foto</th>
        <th>Delete Foto</th>
        <th>Delete</th>
    </tr>
@foreach($kegiatan as $kegiatan2)
<tr>
<td><a href="/kegiatan/{{$kegiatan2->id}}">{{$kegiatan2->judul}}</a></td>
<td>{{$kegiatan2->deskripsi}}</td>
<td><a href="/kegiatan/{{$kegiatan2->id}}/edit">Edit  </a></td>
<td><a href="/addPhoto/kegiatan/{{$kegiatan2->id}}">Add Foto  </a></td>
<td><a href="/kegiatan/deletePhoto/{{$kegiatan2->id}}">Delete Foto</a></td>
<td><form action="/kegiatan/{{$kegiatan2->id}}" method="post">
    @method('DELETE')
    @csrf
    <button type="submit">Delete</button>
</form></td>
</tr>
@endforeach
</table>

<h1>Ekskul</h1>
<table border="1px">
    <tr>
        <th>Judul</th>
        <th>Deskripsi</th>
        <th>Edit</th>
        <th>Add Foto</th>
        <th>Delete Foto</th>
        <th>Delete</th>
    </tr>
@foreach($ekskul as $ekskul2)
<tr>
<td><a href="/ekskul/{{$ekskul2->id}}">{{$ekskul2->judul}}</a></td>
<td>{{$ekskul2->deskripsi}}</td>
<td><a href="/ekskul/{{$ekskul2->id}}/edit">Edit  </a></td>
<td><a href="/addPhoto/ekskul/{{$ekskul2->id}}">Add Foto  </a></td>
<td><a href="/ekskul/deletePhoto/{{$ekskul2->id}}">Delete Foto</a></td>
<td><form action="/ekskul/{{$ekskul2->id}}" method="post">
    @method('DELETE')
    @csrf
    <button type="submit">Delete</button>
</form></td>
</tr>
@endforeach
</table>
