<x-app-layout title="create data Rayon">
    <form action="{{route('rayon.store')}}" method="POST">
        @csrf
        <div class="form-group w-50 mb-3">
          <label for="rombel">Nama Rayon</label>
          <input type="text"  name="rayon" class="form-control" id="rombel" placeholder="Cisarua 1">
        </div>
        <button type="submit" class="btn btn-primary text-white">Submit</button>
      </form>
</x-app-layout>