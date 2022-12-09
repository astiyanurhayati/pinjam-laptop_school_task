<x-app-layout title="create data rombel">
    <form action="{{route('rombel.store')}}" method="POST">
        @csrf
        <div class="form-group w-50 mb-3">
          <label for="rombel">Nama Rombel</label>
          <input type="text"  name="rombel" class="form-control" id="rombel" placeholder="PPLG XI-5">
        </div>
        <button type="submit" class="btn btn-primary text-white">Submit</button>
      </form>
</x-app-layout>