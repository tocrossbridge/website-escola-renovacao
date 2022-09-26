<button {{ $attributes->merge(["class"=>"btn btn__green mt-4 "]) }}>
    {!! __('landing-page.contact-whatsapp') !!}
    <img style="height: 20px; width: auto; padding: 0 0 0 10px;" src="{{ asset('icons/whats.png') }}" alt="whatsapp icon" />
</button>