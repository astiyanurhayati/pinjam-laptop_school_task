<x-app-layout title="Manage Laptop">

    <form method="post" action="{{route('manage-laptop.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="card mt-2">
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <div class="alert-title">
                        <h4>Whoops!</h4>
                    </div>
                    There are some problems with your input.
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
                @endif

                <div class="mb-3">
                    <label class="form-label">Merek</label>
                    <input type="text" class="form-control" name="merek" value="{{ old('merek') }}" placeholder="Merek">
                </div>
                <div class="mb-3">
                    <label class="form-label">Stock</label>
                    <input type="text" class="form-control" name="stock" value="{{ old('stock') }}" placeholder="Stock">
                </div>
                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea class="form-control" name="deskripsi"
                        placeholder="Desk..">{{old('deskripsi')}}</textarea>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Image</label>
                    <input class="form-control" type="file" name="image" id="formFile">
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary text-white" type="submit">Create</button>
            </div>
        </div>
    </form>


</x-app-layout>