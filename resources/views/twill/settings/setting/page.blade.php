@twillBlockTitle('Setting')

@twillBlockIcon('text')

@twillBlockGroup('app')

$meta = [
"title" => "Monument and Memorial Centre, Žuč | Emir Salihović Mimo",
"description" => "A monument and museum commemorating the fallen soldiers and fighters of the Battles of Žuč.",
"thumbnail" => "https://cdn.mimo.ba/img/og-architecture-zuc-thumbnail.jpg",
];

<x-twill::input
    name="home_title"
    label="Title"
    :maxlength="100"
    :required="true"
/>

<x-twill::input
    name="home_descriptions"
    label="Descriptions"
    :maxlength="100"
    :required="true"
/>

<x-twill::medias
    name="thumbnail"
    label="Thumbnail"
    required="true"
/>
