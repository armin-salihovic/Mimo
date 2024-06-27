@extends('twill::layouts.form')

@section('contentFields')
    <x-twill::medias
        name="cover"
        label="Cover image"
        note="Also used in listings"
        field-note="Minimum image width: 1500px"
    />
@stop
