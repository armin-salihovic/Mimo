@twillBlockTitle('Homepage')

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
    :required="true"
    :translated="true"
/>

<x-twill::medias
    name="thumbnail"
    label="Thumbnail"
    required="true"
/>

<x-twill::repeater type="home_image_item" label="Featured images" name="featured_images"/>
