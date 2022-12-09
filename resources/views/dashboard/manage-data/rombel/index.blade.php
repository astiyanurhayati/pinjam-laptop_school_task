<x-app-layout title="manage data rombel">
  @if(Session::get('success'))
  <div class="alert alert-success">
    {{session('success')}}
  </div>
  @endif
  @if(Session::get('successupdate'))
  <div class="alert alert-success">
    {{session('successupdate')}}
  </div>
  @endif

  <div class="mb-5">
    <a href="{{route('rombel.create')}}">
      <div class="btn btn-danger text-white">Tambah Data</div>
    </a>
  </div>
  <table class="table table-hover">
    <thead>


      <tr>
        <th scope="col">#</th>
        <th scope="col">Rombel</th>
        <th scope="col" style="min-width: 200px">Aksi</th>
      </tr>
    </thead>
    @foreach ($rombels as $rombel)
    <tbody>
      <tr>
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$rombel->rombel}}</td>
        <td>
          <div style="display: flex; gap:20px">
            <a href="{{route('rombel.edit', $rombel->id)}}"> <button class="btn btn-primary text-white">Edit</button></a>
          <form action="{{route('rombel.destroy',$rombel->id) }}}}" method="POST">
            @csrf
            @method('DELETE')
          <button class="btn btn-primary text-white">hapus</button> 
          </form>
        </div>
        </td>
      </tr>
      
    </tbody>
    @endforeach
  </table>
</x-app-layout>