<form wire:submit.prevent='update'>
    <div>
        <x-input-label for="link" :value="__('Link do YouTube')" />
        <x-text-input 
            wire:model.live="link" 
            id="link" 
            name="link" 
            type="text" 
            class="block w-full mt-1" 
            required 
            autofocus 
            autocomplete="link" 
            placeholder="Cole o link do YouTube aqui" />
        <x-input-error class="mt-2" :messages="$errors->get('link')" />
    </div>

    <div class="flex justify-end mt-4">
        <button type="submit" class="px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-600">
            Salvar
        </button>
    </div>

    @if (session()->has('message'))
        <div class="mt-2 text-green-500">
            {{ session('message') }}
        </div>
    @elseif (session()->has('error'))
        <div class="mt-2 text-red-500">
            {{ session('error') }}
        </div>
    @endif

    @if ($embedUrl)
    <div class="relative z-10 flex flex-col items-center justify-center">
        <label class="block font-semibold">Prévia do Vídeo</label>
        <iframe
            class="max-w-[99%] h-[500px] w-full aspect-video rounded-lg shadow-lg"
            src="{{ $embedUrl }}"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen>
        </iframe>
    </div>
@endif

</form>
