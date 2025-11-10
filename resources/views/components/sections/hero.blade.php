@props(['page'])

<section class="hero text-center text-light">
    <div class="hero-bg-seo" style="
        background-image: url('{{ $page->hero_image ?? '' }}');"></div>
    <div class="hero-overlay"></div>

    <div class="hero-particles-container">
        <canvas id="hero-particles" width="1552" height="543" style="width: 1552px; height: 543px;"></canvas>
    </div>

    <div class="container-sm cont-hero">
        <div class="hero-inner">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <div class="kservice-text" data-aos="fade-up">
                        @if($page->hero_title)
                            <h2 class="kservice-text-title text-left" style="color: #fff; font-size: 40px;">
                                {!! nl2br(e($page->hero_title)) !!} <br>
                                @if($page->hero_highlight_text)
                                    <strong style="color: #f8ae0d; font-weight:900;">
                                        {{ $page->hero_highlight_text }}
                                    </strong>
                                @endif
                            </h2>
                        @endif

                        @if($page->hero_subtitle)
                            <div style="font-size: 20px;">{!! $page->hero_subtitle !!}</div>
                        @endif

                        @if($page->hero_button_text && $page->hero_button_link)
                            <div class="d-flex">
                                <a href="{{ $page->hero_button_link }}">
                                    <button class="btn-orang" type="button">
                                        {{ $page->hero_button_text }}
                                    </button>
                                </a>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mockup-container">

                        @if($page->hero_video_url)
                            <div class="content-video mt-4">
                                <video class="img-banner-video" width="100%" height="100%" controls>
                                    <source src="{{ $page->hero_video_url }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
