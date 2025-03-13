<div class="relative z-50 flex flex-wrap justify-between max-w-6xl gap-4 px-12 py-4 mx-auto bg-azul-claro/85 sm:bg-azul-claro rounded-xl h-fit"
    style="box-shadow: 0 0 15px 0 rgb(255 255 255 / .5);">
    <div class="flex justify-center gap-2" style="flex: 1 1 150px;">
        <div class=""><img src="{{ asset('img/condominios.png') }}" alt=""
                class="object-contain h-full max-h-10">
        </div>
        <div class="flex flex-col justify-center" style="line-height: 1.5rem;">
            <div class="text-white">Condomínios</div>
            <div>
                <div class="font-bold gradient-text font-expansivaBold" style="font-size: 1.5rem;">{{ $cond }}
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-center gap-2" style="flex: 1 1 150px;">
        <div class=""><img src="{{ asset('img/apartamentos.png') }}" alt=""
                class="object-contain h-full max-h-10">
        </div>
        <div class="flex flex-col justify-center" style="line-height: 1.5rem;">
            <div class="text-white">Apartamentos</div>
            <div>
                <div class="font-bold gradient-text font-expansivaBold" style="font-size: 1.5rem;">{{ $apt }}
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-center gap-2" style="flex: 1 1 150px;">
        <div class=""><img src="{{ asset('img/casas.png') }}" alt=""
                class="object-contain h-full max-h-10"></div>
        <div class="flex flex-col justify-center" style="line-height: 1.5rem;">
            <div class="text-white">Casas</div>
            <div>
                <div class="font-bold gradient-text font-expansivaBold" style="font-size: 1.5rem;">{{ $house }}
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-center gap-2" style="flex: 1 1 150px;">
        <div class=""><img src="{{ asset('img/terreno.png') }}" alt=""
                class="object-contain h-full max-h-10"></div>
        <div class="flex flex-col justify-center" style="line-height: 1.5rem;">
            <div class="text-white">Terrenos</div>
            <div>
                <div class="font-bold gradient-text font-expansivaBold" style="font-size: 1.5rem;">{{ $terr }}
                </div>
            </div>
        </div>
    </div>
</div>
