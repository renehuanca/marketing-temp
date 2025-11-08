<x-layouts.app>

  <div class="container my-5">
    <h1 class="mb-4">Crear nueva página servicio</h1>

    <form action="{{ route('service-pages.store') }}" method="POST" enctype="multipart/form-data">
      @csrf

      @include('service-pages._form', ['page' => null])

      <button type="submit" class="btn btn-primary mt-3">Crear Página</button>
    </form>
  </div>

</x-layouts.app>