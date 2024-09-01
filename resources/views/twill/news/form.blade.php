@extends('twill::layouts.form')

@section('contentFields')

    <x-twill::medias
        name="cover"
        label="Cover image"
        note="Also used in listings"
        field-note="Minimum image width: 1500px"
    />

@stop

{{--@extends('twill::layouts.form')--}}

{{--@section('contentFields')--}}



    {{--    <x-twill::input--}}
    {{--        name="description"--}}
    {{--        label="Description"--}}
    {{--        :maxLenght="100"--}}
    {{--    />--}}

    {{--    @php--}}
    {{--        $blocks = [--}}
    {{--            'title',--}}
    {{--            'quote',--}}
    {{--            'text'--}}
    {{--        ];--}}
    {{--    @endphp--}}

    {{--    <x-twill::block-editor--}}
    {{--        :blocks="$blocks"--}}
    {{--    />--}}

{{--@stop--}}
