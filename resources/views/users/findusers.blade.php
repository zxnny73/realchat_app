<x-app-layout>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <div class="input-group mb-3" style="width:500px;">

    @livewire('search')

    {{-- <table class="table" style="margin:20px; width: 1500px; height: 300px; align-items:center;" >
<thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">e-mail</th>
    </tr>
  </thead>
  @foreach($name as $names)
  <tbody>
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$names->name}}</td>
      <td>{{$names->email}}</td>
    </tr>
  </tbody>
  @endforeach
</table> --}}
</x-app-layout>
