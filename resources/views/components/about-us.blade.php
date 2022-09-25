<div class="about-us__bg py-5">
    <div class="container">
        <x-common.title title="landing-page.about-us__title" />
        <p>{!! __('landing-page.about-us__sub-title') !!}</p>

        <div class="my-5">
            TODO
            <!-- TODO: carousel -->
        </div>
        <p>{!! __('landing-page.about-us__text') !!}</p>
        <div class="row d-flex justify-content-center my-4">
            <x-common.card-with-border icon="{{ asset('icons/ensino-traco.png') }}" title="landing-page.about-us__card-01__title" text="landing-page.about-us__card-01__text" />
            <x-common.card-with-border icon="{{ asset('icons/fe-traco.png') }}" title="landing-page.about-us__card-02__title" text="landing-page.about-us__card-02__text" />
            <x-common.card-with-border icon="{{ asset('icons/futurismo-traco.png') }}" title="landing-page.about-us__card-03__title" text="landing-page.about-us__card-03__text" />
            <x-common.card-with-border icon="{{ asset('icons/civismo-traco.png') }}" title="landing-page.about-us__card-04__title" text="landing-page.about-us__card-04__text" />
        </div>

        <x-common.button class="btn__orange" text="landing-page.secure-your-spot" />
    </div>
</div>