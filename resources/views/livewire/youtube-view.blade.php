<div class="relative z-10 flex items-center justify-center py-10">
    @if ($embedUrl)
        <iframe
            class="max-w-[99%] h-[500px] aspect-video rounded-lg shadow-lg"
            src="{{ $embedUrl }}"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen>
        </iframe>
    @endif
</div>
