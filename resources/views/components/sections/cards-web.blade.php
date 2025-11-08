@props(['page'])

<div class="cards-web">
    <div class="container py-0">

        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <!-- start section title -->
                <div class="title aos-init aos-animate" data-aos="fade-up"
                     style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.2s; animation-name: fadeInUp;">
                    @if(!empty($page->cards_subtitle))
                        <span class="sub-title theme-color">{{ $page->cards_subtitle }}</span>
                    @endif

                    @if(!empty($page->cards_title))
                        <h2 class="h2-title title-font">{{ $page->cards_title }}</h2>
                    @endif

                    @if(!empty($page->cards_description))
                        <p class="text-center" style="font-weight: 900;">{{ $page->cards_description }}</p>
                    @endif
                </div>
                <!-- end section title -->
            </div>
        </div>

        <div class="row">
            @for($i = 1; $i <= 3; $i++)
                @php
                    $image = $page->{'card'.$i.'_image'} ?? '';
                    $title = $page->{'card'.$i.'_title'} ?? '';
                    $highlight = $page->{'card'.$i.'_highlight'} ?? '';
                @endphp

                <div class="col-lg-4">
                    <!-- start features item -->
                    <div class="features-item aos-init aos-animate" data-aos="fade-down"
                         style="visibility: visible; animation-duration: 1.5s; animation-delay: {{ 0.2 + $i*0.2 }}s; animation-name: fadeInUp;">
                        @if($image)
                            <div class="features-thumb">
                                <img src="{{ $image }}" alt="{{ $title }}">
                            </div>
                        @endif

                        @if($title)
                            <div class="features-content">
                                <h3 class="h3-title">
                                    {!! str_replace($highlight, '<strong style="color: #ff5722;font-weight: bold;">'.$highlight.'</strong>', $title) !!}
                                </h3>
                            </div>
                        @endif
                    </div>
                    <!-- end features item -->
                </div>
            @endfor
        </div>
    </div>
</div>
