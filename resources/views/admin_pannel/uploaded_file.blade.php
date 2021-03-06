@extends('admin_pannel.admin_master')
@section('component')

<table class="table">
    <thead class="thead-dark">
    <tr>
      <th scope="col">Subject/Title</th>
      <th scope="col">File</th>
      <th scope="col">Download</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
      @foreach($files as $file)
      <tr>
          <td>{{$file->subject}}</td>
          <td><a href="/files/{{$file->file}}">{{$file->file}}</a></td>
            <td><a href="/file-view/download/{{$file->file}}"><button type="button" class="btn btn-priamry btn-default-profile">Download</button></a></td>
            <td><a href="/file-view/delete/{{$file->id}}"><button type="button" class="btn btn-danger btn-default-profile">Delete</button></a></td>
      </tr>
      @endforeach
  </tbody>
</table>
@endsection
