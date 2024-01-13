@twillRepeaterTitle('Featured image')

@twillRepeaterMax('10')

<x-twill::medias
    name="home_featured_image"
    label="Featured image"
    required="true"
/>

@php
    $selectOptions = [
        [
            'value' => 'Architecture',
            'label' => 'Architecture'
        ],
        [
            'value' => 'Art',
            'label' => 'Art'
        ],
        [
            'value' => 'Sculpture',
            'label' => 'Sculpture'
        ],
        [
            'value' => 'Design',
            'label' => 'Design'
        ]
    ];

@endphp

<x-twill::select
    name="featured_image_type"
    label="Type"
    placeholder="Select a type"
    :options="$selectOptions"
/>
