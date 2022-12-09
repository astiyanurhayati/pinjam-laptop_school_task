<x-app-layout title="manage Laptop">
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
      <a href="{{route('manage-laptop.create')}}">
        <div class="btn btn-danger text-white">Tambah Data</div>
      </a>
    </div>
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Gambar</th>
          <th scope="col">Merek</th>
          <th scope="col" style="min-width: 200px">Deskripsi</th>
          <th scope="col" style="min-width: 200px">stock</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($manageLaptop as $m)
          <tr>
            <td><img src="{{ asset($m->image) }}" class="img-thumbnail" style="width:200px" /></td>
            <td>{{ $m->id }}</td>
  
            <td>{{ $m->merek }}</td>
            <td>{{ $m->deskripsi }}</td>
            <td>{{ $m->stock }}</td>
            <td>
              <div style="display: flex; gap:20px">
                <a href="{{ route('manage-laptop.edit', $m->id) }}"> <button class="btn btn-primary text-white">Edit</button></a>
  
                <form action="{{route('manage-laptop.destroy',$m->id) }}" method="POST">
                  @csrf
                  @method('DELETE')
                <button class="btn btn-primary text-white">hapus</button> 
                </form>
            </div>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="6">
                No record found!
            </td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </x-app-layout>