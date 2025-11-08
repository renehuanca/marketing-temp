<x-layouts.app>

  <div class="container my-5">
    <h1 class="mb-4">Editar página de servicio</h1>

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul class="mb-0">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('service-pages.update', $page->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      @include('service-pages._form', ['page' => $page])

      <button type="submit" class="btn btn-primary mt-3">Actualizar Página</button>
    </form>
  </div>

</x-layouts.app>
