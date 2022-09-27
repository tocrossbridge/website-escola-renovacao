<h3 {{ $attributes->merge(["class"=>"renovacao__title "]) }}>
    {!! __($title) !!}
    <br>
    <span v-if="subtitle" style="font-size: 14px">{!! __($subtitle) !!}</span>
</h3>