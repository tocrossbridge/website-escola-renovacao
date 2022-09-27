<div class="about-us__bg">
    <div class="container">
        <x-common.title title="landing-page.about-us__title" />
        <p>{!! __('landing-page.about-us__sub-title') !!}</p>
    </div>

    <div class="responsive custom-slider my-5">
        <div>
            <img class="m-auto about-us__carousel-img" src="/images/carousel-about-us/ballet.png" alt="">
        </div>
        <div>
            <img class="m-auto about-us__carousel-img" src="/images/carousel-about-us/karate.png" alt="">
        </div>
        <div>
            <img class="m-auto about-us__carousel-img" src="/images/carousel-about-us/xadrez.png" alt="">
        </div>
        <div>
            <img class="m-auto about-us__carousel-img" src="/images/carousel-about-us/tecnologia.png" alt="">
        </div>

        <div>
            <img class="m-auto about-us__carousel-img" src="/images/carousel-about-us/ingles.png" alt="">
        </div>
        <div>
            <img class="m-auto about-us__carousel-img" src="/images/carousel-about-us/danca.png" alt="">
        </div>
        <div>
            <img class="m-auto about-us__carousel-img" src="/images/carousel-about-us/educacao-infantil.png" alt="">
        </div>
        <div>
            <img class="m-auto about-us__carousel-img" src="/images/carousel-about-us/louvor-adoracao.png" alt="">
        </div>

        <div>
            <img class="m-auto about-us__carousel-img" src="/images/carousel-about-us/nutricao-orientada.png" alt="">
        </div>
        <div>
            <img class="m-auto about-us__carousel-img" src="/images/carousel-about-us/tecnologia.png" alt="">
        </div>
        <div>
            <img class="m-auto about-us__carousel-img" src="/images/carousel-about-us/ensino-fundamental.png" alt="">
        </div>
        <div>
            <img class="m-auto about-us__carousel-img" src="/images/carousel-about-us/louvor-adoracao.png" alt="">
        </div>
    </div>

    <div class="container">
        <p>{!! __('landing-page.about-us__text') !!}</p>
        <div class="row d-flex justify-content-center my-4">
            <x-common.card-with-border icon="{{ asset('icons/ensino-traco.png') }}" title="landing-page.about-us__card-01__title" text="landing-page.about-us__card-01__text" />
            <x-common.card-with-border icon="{{ asset('icons/fe-traco.png') }}" title="landing-page.about-us__card-02__title" text="landing-page.about-us__card-02__text" />
            <x-common.card-with-border icon="{{ asset('icons/futurismo-traco.png') }}" title="landing-page.about-us__card-03__title" text="landing-page.about-us__card-03__text" />
            <x-common.card-with-border icon="{{ asset('icons/civismo-traco.png') }}" title="landing-page.about-us__card-04__title" text="landing-page.about-us__card-04__text" />
        </div>

        <div class="text-center">
            <x-common.button class="btn--orange" text="landing-page.secure-your-spot" />
        </div>
    </div>
</div>