<x-app-layout title="Edit data rombel">

    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


    <form action="{{ route('rombel.update',$rombel->id) }}" method="POST">
        
        @csrf
    @method('PUT')
        <div class="form-group w-50 mb-3">
          <label for="rombel">Nama Rombel</label>
          <input type="text"  name="rombel" class="form-control" id="rombel" value="{{ $rombel->rombel }}" placeholder="PPLG XI-5">
        </div>
        <button type="submit" class="btn btn-primary text-white">Submit</button>
      </form>
</x-app-layout>