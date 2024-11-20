<div class="row mb-5 justify-content-center gap-4">
    [[!+tv.saas_page_featured_image:ne=``:then=`
        <div class="col-12 col-xl ratio ratio-1x1">
            <img class="w-full h-full object-fit-cover" src="[[+tv.saas_page_featured_image]]" alt="[[+pagetitle]]" loading="lazy" />
        </div>
    `]]
    <div class="col">
        <h3 class="mt-5"><a class="text-primary" href="[[~[[+id]]]]">[[+pagetitle]]</a></h3>
        <p class="lead">[[+introtext:default=`[[+content:striptags:ellipsis=`400`]]`]]</p>
    </div>
</div>