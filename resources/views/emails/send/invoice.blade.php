    @component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => ''])
        @if($data['company']['logo'])
            <img class="header-logo" src="{{asset($data['company']['logo'])}}" alt="{{$data['company']['name']}}">
        @else
            {{$data['company']['name']}}
        @endif
        @endcomponent
    @endslot

    {{-- Body --}}
    <!-- Body here -->

    {{-- Subcopy --}}
    @slot('subcopy')
        @component('mail::subcopy')
            {!! $data['body'] !!}
            @if(!$data['attach']['data'])
                @component('mail::button', ['url' => url('/customer/invoices/pdf/'.$data['invoice']['unique_hash'])])
                    View Invoice
                @endcomponent
            @endif
        @endcomponent
    @endslot

    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            © Copyright 2022 Beelabs Canada
        @endcomponent
    @endslot
@endcomponent
