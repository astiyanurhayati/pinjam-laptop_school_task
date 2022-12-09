<x-form-layout title="form peminjaman laptop">
    <div class="main">
        <div class="container">
            <div class="card">
               
            <h1 class="pt-5 text-center pb-5">Form peminjaman laptop</h1>
            @if(Session::get('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
            @endif
                <form class="w-50 mx-auto" action="{{route('store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control  @error('nama') is-invalid @enderror" id="name" name="nama" placeholder="name" value="{{old('nama')}}" >
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control  @error('email') is-invalid @enderror" id="email" placeholder="name@gmail.com" name="email" value="{{old('email')}}">
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="nis" class="form-label">NIS</label>
                        <input type="number" class="form-control  @error('nis') is-invalid @enderror" id="nis" name="nis" placeholder="12108773" value="{{old('nis')}}">
                        @error('nis')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="nis" class="form-label">Rombel</label>
                    <select class="form-select  @error('rombel') is-invalid @enderror" name="rombel" value="{{old('rombel')}} " id="rombel">
                       @foreach ($rombel as $option )
                            <option value="{{$option->rombel}}">{{$option->rombel}}</option>
                       @endforeach

                       @error('rombel')
                       <span class="text-danger">{{ $message }}</span>
                       @enderror
                    </select>
                    </div>

                
                    <div class="mb-3">
                        <label for="nis" class="form-label">Rayon</label>
                        <select class="form-select  @error('rayon') is-invalid @enderror" name="rayon" value="{{old('rayon')}}" id="rayon">
                            @foreach ($rayon as $option )
                                <option value="{{$option->rayon}}">{{$option->rayon}}</option>
                             @endforeach
                         </select>
                         @error('rayon')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror
                    <div>

                    <div class="mb-3">
                        <label for="tanggal-pinjam" class="form-label">Waktu dan tanggal pinjam</label>
                        <input type="date" class="form-control  @error('tanggal_pinjam') is-invalid @enderror" id="tanggal-pinjam" name="tanggal_pinjam">
                        @error('tanggal_pinjam')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror
                    </div>
                  
                    <div class="mb-3">
                        <label for="saksi" class="form-label">Saksi Petugas</label>
                        <input type="text" class="form-control  @error('saksi') is-invalid @enderror" id="saksi" name="saksi" placeholder="saksi" value="{{old('saksi')}}">
                        @error('saksi')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror
                    </div>
                    <div class="mb-3">
                        <label for="keterangan" class="form-label">keterangan</label>
                        <input type="text" class="form-control  @error('keterangan') is-invalid @enderror" id="keterangan" name="keterangan" placeholder="pinjam laptop.." value="{{old('keterangan')}}">
                        @error('keterangan')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                 <a href="{{route('page')}}"><button type="button" class="btn btn-warning">Batal</button></a>
                </form>
            </div>
        </div>
    </div>

</x-form-layout>