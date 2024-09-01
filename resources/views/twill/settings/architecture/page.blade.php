@twillBlockTitle('Architecture')

@twillBlockIcon('text')

@twillBlockGroup('app')

<x-twill::input
    name="title"
    label="Title"
    :maxlength="100"
    :required="true"
    :translated="true"
/>

<x-twill::input
    name="description"
    label="Description"
    :maxlength="100"
    :required="true"
    :translated="true"
/>

<x-twill::medias
    name="thumbnail"
    label="Thumbnail"
    required="true"
/>
