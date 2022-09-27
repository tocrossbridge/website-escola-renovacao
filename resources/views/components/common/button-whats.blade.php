<button {{ $attributes->merge(["class"=>"btn btn--green btn--whats "]) }}>
    {!! __('landing-page.contact-whatsapp') !!}
    <img style="height: 20px; width: auto; padding: 0 0 0 10px;" src="{{ asset('icons/whats.png') }}" alt="whatsapp icon" />
</button>