@push('head')
<style>
    .gradient-text {
        display: inline;
        background: linear-gradient(to right, #faba18, #f5e1ae, #faba18);
        -webkit-background-clip: text;
        color: transparent;
    }
</style>
@endpush

<div>

    <div class="relative z-50 flex flex-wrap justify-between max-w-6xl gap-4 px-12 py-4 mx-auto bg-azul-claro/85 sm:bg-azul-claro rounded-xl h-fit"
        style="box-shadow: 0 0 15px 0 rgb(255 255 255 / .5);">
        <div class="flex justify-center gap-2" style="flex: 1 1 150px;">
            <div class=""><img src="{{ asset('img/condominios.png') }}" alt="" class="object-contain h-full max-h-10">
            </div>
            <div class="flex flex-col justify-center" style="line-height: 1.5rem;">
                <div class="text-white">Condomínios</div>
                <div>
                    <div class="font-bold gradient-text font-expansivaBold" style="font-size: 1.5rem;">{{ $cond }}</div>
                </div>
            </div>
        </div>
        <div class="flex justify-center gap-2" style="flex: 1 1 150px;">
            <div class=""><img src="{{ asset('img/apartamentos.png') }}" alt="" class="object-contain h-full max-h-10">
            </div>
            <div class="flex flex-col justify-center" style="line-height: 1.5rem;">
                <div class="text-white">Apartamentos</div>
                <div>
                    <div class="font-bold gradient-text font-expansivaBold" style="font-size: 1.5rem;">{{ $apt }}</div>
                </div>
            </div>
        </div>
        <div class="flex justify-center gap-2" style="flex: 1 1 150px;">
            <div class=""><img src="{{ asset('img/casas.png') }}" alt="" class="object-contain h-full max-h-10"></div>
            <div class="flex flex-col justify-center" style="line-height: 1.5rem;">
                <div class="text-white">Casas</div>
                <div>
                    <div class="font-bold gradient-text font-expansivaBold" style="font-size: 1.5rem;">{{ $house }}</div>
                </div>
            </div>
        </div>
        <div class="flex justify-center gap-2" style="flex: 1 1 150px;">
            <div class=""><img src="{{ asset('img/terreno.png') }}" alt="" class="object-contain h-full max-h-10"></div>
            <div class="flex flex-col justify-center" style="line-height: 1.5rem;">
                <div class="text-white">Terrenos</div>
                <div>
                    <div class="font-bold gradient-text font-expansivaBold" style="font-size: 1.5rem;">{{ $terr }}</div>
                </div>
            </div>
        </div>
    </div>


    <form wire:submit='update' class="mt-10">

        <div class="flex flex-wrap gap-4">
            <div style="flex: 1 1 140px;">
                <x-input-label for="cond" :value="__('Condomínio')" />
                <x-text-input wire:model.live="cond" id="cond" name="cond" type="number" class="block w-full mt-1" required
                    autofocus autocomplete="cond" />
                <x-input-error class="mt-2" :messages="$errors->get('cond')" />
            </div>
            <div style="flex: 1 1 140px;">
                <x-input-label for="apt" :value="__('Apartamentos')" />
                <x-text-input wire:model.live="apt" id="apt" name="apt" type="number" class="block w-full mt-1" required
                    autofocus autocomplete="apt" />
                <x-input-error class="mt-2" :messages="$errors->get('apt')" />
            </div>
            <div style="flex: 1 1 140px;">
                <x-input-label for="house" :value="__('Casas')" />
                <x-text-input wire:model.live="house" id="house" name="house" type="number" class="block w-full mt-1" required
                    autofocus autocomplete="house" />
                <x-input-error class="mt-2" :messages="$errors->get('house')" />
            </div>
            <div style="flex: 1 1 140px;">
                <x-input-label for="terr" :value="__('Terrenos')" />
                <x-text-input wire:model.live="terr" id="terr" name="terr" type="number" class="block w-full mt-1" required
                    autofocus autocomplete="terr" />
                <x-input-error class="mt-2" :messages="$errors->get('terr')" />
            </div>

        </div>

        <div class="flex justify-end mt-4">
            <button type="submit" class="px-4 py-2 text-white bg-blue-500 rounded">Salvar</button>
        </div>
    </form>

</div>
