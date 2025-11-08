@props(['page'])

<div class="mb-3">
  <label for="title" class="form-label">Título de la página</label>
  <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
    value="{{ old('title', $page->title ?? '') }}" required>
  @error('title')
    <div class="invalid-feedback">{{ $message }}</div>
  @enderror
</div>

<div class="mb-3">
  <label for="slug" class="form-label">Slug</label>
  <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"
    value="{{ old('slug', $page->slug ?? '') }}" required>
  @error('slug')
    <div class="invalid-feedback">{{ $message }}</div>
  @enderror
</div>

<hr>

{{-- Tabs --}}
<ul class="nav nav-tabs mb-3" id="servicePageTabs" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="hero-tab" data-bs-toggle="tab" data-bs-target="#hero" type="button" role="tab">
      Hero
    </button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="cards-web-tab" data-bs-toggle="tab" data-bs-target="#cardsWeb" type="button"
      role="tab">
      Cards Web
    </button>
  </li>
</ul>

<div class="tab-content" id="servicePageTabsContent">
  {{-- HERO SECTION --}}
  <div class="tab-pane fade show active" id="hero" role="tabpanel">

    <h5 class="mb-4">Sección Hero</h5>

    <div class="mb-3">
      <label for="hero_title" class="form-label">Título Hero</label>
      <input type="text" class="form-control @error('hero_title') is-invalid @enderror" id="hero_title"
        name="hero_title" value="{{ old('hero_title', $page->hero_title ?? '') }}">
      @error('hero_title')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="hero_highlight_text" class="form-label">Texto destacado</label>
      <input type="text" class="form-control @error('hero_highlight_text') is-invalid @enderror"
        id="hero_highlight_text" name="hero_highlight_text"
        value="{{ old('hero_highlight_text', $page->hero_highlight_text ?? '') }}">
      @error('hero_highlight_text')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="hero_subtitle" class="form-label">Subtítulo</label>
      <textarea class="form-control @error('hero_subtitle') is-invalid @enderror" id="hero_subtitle"
        name="hero_subtitle" rows="2">{{ old('hero_subtitle', $page->hero_subtitle ?? '') }}</textarea>
      @error('hero_subtitle')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="hero_button_text" class="form-label">Texto del botón</label>
      <input type="text" class="form-control @error('hero_button_text') is-invalid @enderror" id="hero_button_text"
        name="hero_button_text" value="{{ old('hero_button_text', $page->hero_button_text ?? '') }}">
      @error('hero_button_text')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="hero_button_link" class="form-label">Enlace del botón</label>
      <input type="text" class="form-control @error('hero_button_link') is-invalid @enderror" id="hero_button_link"
        name="hero_button_link" value="{{ old('hero_button_link', $page->hero_button_link ?? '') }}">
      @error('hero_button_link')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="hero_image" class="form-label">Imagen del Hero</label>
      <input type="file" class="form-control @error('hero_image') is-invalid @enderror" id="hero_image"
        name="hero_image" accept="image/*">
      @if(!empty($page->hero_image))
        <img src="{{ $page->hero_image }}" alt="Hero image" class="img-fluid mt-2" style="max-height:150px;">
      @endif
      @error('hero_image')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="hero_video_url" class="form-label">URL del video</label>
      <input type="text" class="form-control @error('hero_video_url') is-invalid @enderror" id="hero_video_url"
        name="hero_video_url" value="{{ old('hero_video_url', $page->hero_video_url ?? '') }}">
      @error('hero_video_url')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>

    <div class="form-check mb-3">
      <input class="form-check-input" type="checkbox" value="1" id="is_active" name="is_active" {{ old('is_active', $page->is_active ?? true) ? 'checked' : '' }}>
      <label class="form-check-label" for="is_active">Publicar página</label>
    </div>
  </div>

  <div class="tab-pane fade" id="cardsWeb" role="tabpanel">
    <h5 class="mb-4">Sección Cards Web</h5>

    <div class="mb-3">
      <label for="cards_title" class="form-label">Título</label>
      <input type="text" class="form-control @error('cards_title') is-invalid @enderror" id="cards_title"
        name="cards_title" value="{{ old('cards_title', $page->cards_title ?? '') }}">
      @error('cards_title')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="cards_subtitle" class="form-label">Subtítulo</label>
      <input type="text" class="form-control @error('cards_subtitle') is-invalid @enderror" id="cards_subtitle"
        name="cards_subtitle" value="{{ old('cards_subtitle', $page->cards_subtitle ?? '') }}">
      @error('cards_subtitle')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="cards_description" class="form-label">Descripción</label>
      <textarea class="form-control @error('cards_description') is-invalid @enderror" id="cards_description"
        name="cards_description" rows="2">{{ old('cards_description', $page->cards_description ?? '') }}</textarea>
      @error('cards_description')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>

    <hr>
    <h6>Cards</h6>

    @for ($i = 1; $i <= 3; $i++)
      <div class="mb-3">
        <label for="card{{ $i }}_image" class="form-label">Imagen Card {{ $i }}</label>
        <input type="file" class="form-control @error('card' . $i . '_image') is-invalid @enderror" id="card{{ $i }}_image"
          name="card{{ $i }}_image" accept="image/*">
        @if(!empty($page->{'card' . $i . '_image'}))
          <img src="{{ $page->{'card' . $i . '_image'} }}" alt="Card {{ $i }}" class="img-fluid mt-2" style="max-height:150px;">
        @endif
        @error('card' . $i . '_image')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="card{{ $i }}_title" class="form-label">Título Card {{ $i }}</label>
        <input type="text" class="form-control @error('card' . $i . '_title') is-invalid @enderror" id="card{{ $i }}_title"
          name="card{{ $i }}_title" value="{{ old('card' . $i . '_title', $page->{'card' . $i . '_title'} ?? '') }}">
        @error('card' . $i . '_title')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="card{{ $i }}_highlight" class="form-label">Texto Destacado Card {{ $i }}</label>
        <input type="text" class="form-control @error('card' . $i . '_highlight') is-invalid @enderror"
          id="card{{ $i }}_highlight" name="card{{ $i }}_highlight"
          value="{{ old('card' . $i . '_highlight', $page->{'card' . $i . '_highlight'} ?? '') }}">
        @error('card' . $i . '_highlight')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
    @endfor
  </div>
</div>