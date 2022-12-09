<x-app-layout title="manage data Rayon">
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

    @if(Session::get('done'))
    <div class="alert alert-success">
        {{session('done')}}
    </div>
    @endif

    <table class="table table-hover table-responsive-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">nama</th>
                <th scope="col">Email</th>
                <th scope="col">Nis</th>
                <th scope="col">Status</th>
                <th scope="col" style="min-width: 200px">Aksi</th>
            </tr>
        </thead>
        @foreach ($data as $item)
        <!-- Modal -->
        <div class="modal fade" id="{{str_replace(' ', '' , $item->nama) . $item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="{{str_replace(' ', '' , $item->nama) . $item->id}}Label" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
              <div class="modal-header">
                  <h1 class="modal-title fs-5" id="{{str_replace(' ', '' , $item->nama) . $item->id}}Label">Deskripsi Pekerjaan {{ $item->nama }}</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Nama: {{$item->nama}}</p>
                <p>Nis: {{$item->nis}}</p>
                <p>Rombel: {{$item->Rombel}}</p>
                <p>Rayon: {{$item->Rayon}}</p>
                <p>Tanggal Pinjam: {{$item->tanggal_pinjam}}</p>
     
                <p>Rayon: {{$item->keterangan}}</p>

              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary " data-bs-dismiss="modal">Close</button>
              </div>
              </div>
          </div>
          </div>
        <tbody>
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$item->nama}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->nis}}</td>

                <td>

                    <div class="mr-2">
                        @if($item->status == 1)
                        <span class=" text-secondery btn btn-warning text-white">Sudah Kembali</span>
                        @else
                        <form action="{{ route('updateComplated', $item->id) }}" method="POST">
                            @method('PATCH')
                            @csrf
                            <button type="submit" class=" btn btn-primary text-white"> Belum Kembali </button>
                        </form>
                        @endif
                    </div>
                </td>
                </td>
                <td style="display: flex; gap: 10px">
                  <div>
                    <form method="POST" action="{{ route('form.destroy', $item->id) }}">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger ms-1 show_confirm text-white" data-toggle="tooltip" title='Delete'>Delete</button>
                    </form>
                  </div>
                  <div>
                    
                      <a href="#" data-bs-toggle="modal" data-bs-target="#{{str_replace(' ', '' , $item->nama) . $item->id}}" data-id="{{ $item->id }}" id="detailJob" class="btn btn-primary hover text-white">
                      Lihat Detail
                      </a>
                 
                  </div>
                </td>
            </tr>

        </tbody>
        @endforeach
    </table>
    <h1>{{date('d-m-Y')}}</h1>


              
          

    <script>
      $(document).ready(function(){
        $('body').on('click', '#show-user', function(){
          var useURL = $(this).data('url');
          $.get(useURL, function(data){
            $('#userShowModal').modal('show');
          })
        })
      })
    </script>

</x-app-layout>
