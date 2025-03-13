<section id="sobre">
    <div class="relative mx-auto max-w-fullhd">
        <x-brand class="absolute top-0 right-0 z-10 h-full max-w-full w-fit fill-azul-claro/85" />

        {{-- <div class="mt-10 text-xl text-center">Conheça um pouco mais sobre a <span class="font-bold gradient-text font-expansivaBold" style="">GPC</span></div> --}}
        {{-- COLOCAR O VIDEO NO HEADER DO SITE --}}
        {{-- <div class="flex justify-center items-center rounded-lg mx-auto mt-10 bg-center bg-cover bg-no-repeat h-[450px] aspect-video cursor-pointer relative z-10" style="background-image: url({{ asset('img/youtube.png') }})"><img src="{{ asset('img/youtube_play.png') }}" alt="" class="object-contain h-14"></div> --}}
        <div class="relative z-10 h-full px-4 py-20 md:px-6 lg:px-10 xl:px-16 2xl:px-20">
            <div class="font-bold font-sans max-w-7xl leading-8 lg:leading-10 xl:leading-[3rem] 2xl:leading-[3.8rem]" style="font-size: clamp(2rem, 4vw, 4.5rem);"><span class="font-bold text-amarelo">SEGURANÇA</span>, <span class="font-bold text-amarelo">COMODIDADE</span> E <span class="font-bold text-amarelo">SOLUÇÃO</span> NA ADMINISTRAÇÃO DE IMÓVEIS E CONDOMÍNIOS</div>
            <div class="text-lg text-justify max-w-7xl">
                Oferecemos produtos e serviços de gestão imobiliária com excelência, atuando próximo aos clientes e seus colaboradores, integrando-os, valorizando-os, promovendo qualidade de vida e colaborando para uma convivência mais humana e harmoniosa, tornando mais segura e agradável a interação entre as pessoas.
                <div class="flex justify-end"><button class="px-4 py-2 mt-10 text-sm text-right rounded-md bg-azul-claro font-expansivaBold" style="box-shadow: 0 0 5px 0 rgb(255 255 255 / 0.5);">QUERO CONTRATAR</button></div>
            </div>
        </div>

    </div>

    {{-- RETIRAR DO SITE --}}
    {{-- <div class="relative px-4 py-20 md:px-6 lg:px-10 xl:px-16 2xl:px-20">
        <div class="grid gap-2 px-4 py-6 bg-white md:px-6 lg:px-10 xl:px-16 2xl:px-20 rounded-3xl sm:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4">
            <div class="pb-4 text-xl text-center text-black col-span-full">Alguns dos nossos <span class="font-bold gradient-text font-expansivaBold" style="">CLIENTES</span></div>

            @for ($i = 0; $i < 12; $i++)
            <div class="overflow-hidden rounded-xl">
                <div class="h-56 bg-center bg-no-repeat bg-cover" style="background-image: url({{ asset('img/build.png') }})"></div>
                <div class="flex justify-between px-8 py-2 bg-azul-claro">
                    <div class="text-sm">Aluguel</div>
                    <div class="font-bold">R$ 22.000,00</div>
                </div>
                <div class="px-8 py-5 bg-azul-escuro">
                    <div class="text-center md:text-sm lg:text-md">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi cumque libero dolorum quisquam veniam nostrum dolor quos?</div>
                    <button class="block px-4 py-2 mx-auto mt-4 text-sm text-black rounded-md bg-gradient-to-r from-amarelo via-amber-200 to-amarelo font-expansivaBold">CONTATO</button>
                </div>
            </div>
            @endfor

            <div class="max-w-4xl pt-10 mx-auto text-sm text-center text-black col-span-full">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint necessitatibus repellat minima accusantium odit molestiae ipsum deleniti ducimus libero magni quos unde doloribus laborum tenetur, tempora, magnam nam quibusdam. Odit!</div>
        </div>
    </div> --}}

    <div class="relative flex flex-col gap-6 px-4 py-10 mx-auto sm:flex-row sm:items-end md:px-6 lg:px-10 xl:px-16 2xl:px-20 max-w-fullhd lg:gap-10 xl:gap-20">
        <div>
            <img src="{{ asset('img/build2.png') }}" alt="" class="object-contain w-full min-h-96">
        </div>
        <div>
            <div class="max-w-sm pb-10 text-2xl font-bold">UM POUCO DA NOSSA HISTÓRIA</div>
            <div class="pb-6">Em 1991 a GPC (Gestão Profissional de Condomínios) iniciava sua jornada já com muita qualidade e profissionalismo, fundada em Niterói, na Rua Coronel Gomes Machado n°136 sala 1103 - Centro.</div>
            <div class="pb-6">Atualmente, 30 anos após sua fundação, a GPC expandiu seus horizontes, ocupando hoje todo o 11º pavimento do Edifício onde esta sediada. Ao longo desta duas décadas logrou a GPC alcançar a marca de mais de 3000 unidades condominiais administradas.</div>
            <button class="px-4 py-2 mt-10 text-sm text-black rounded-md bg-gradient-to-r from-amarelo via-amber-200 to-amarelo font-expansivaBold">CONTATO</button>
        </div>
    </div>

    <div class="relative flex flex-col px-4 py-10 mx-auto sm:flex-row md:px-6 lg:px-10 xl:px-16 2xl:px-20 max-w-fullhd">
        <div class="order-2 sm:order-1">
            <div class="pb-6 text-3xl font-bold max-w-96">POLITICA DE <span class="font-bold text-amarelo">QUALIDADE</span> & NOSSOS <span class="font-bold text-amarelo">PRINCÍPIOS</span>.</div>

            <div class="pb-4 text-lg">Acreditamos na inovação, afinal todas as ideias devem ser ouvidas, debatidas e desenvolvidas. A criatividade aliada à experiência é o segredo da liderança e do sucesso.</div>
            <div class="pb-4 text-lg">Estamos ao lado dos clientes em todas as situações. Em todas as ocasiões nossos colaboradores, gestores e funcionários se posicionam ao lado do cliente. Todos os processos da nossa prestação de serviços são construídos com esta base. É nela que nos inspiramos.</div>
            <div class="pb-4 text-lg">Valorizamos as pessoas, sejam clientes, fornecedores, concorrentes ou colaboradores, todos recebem o nosso respeito e a nossa cordialidade. Afinal todos fazem parte fundamental do caminho que construímos e que continuamos a construir.</div>
            <div class="pb-4 text-lg">Responsabilidade e Respeito - Nutrimos profundo respeito pelo patrimônio do cliente. Não fazemos concessões que coloquem em risco este patrimônio e trabalhamos aprimorando processos e pessoas para garantir o cumprimento deste compromisso.</div>
            <button class="px-4 py-2 mt-10 text-sm text-black rounded-md bg-gradient-to-r from-amarelo via-amber-200 to-amarelo font-expansivaBold">QUERO CONTRATAR</button>
        </div>
        <div class="relative order-1 px-6 sm:order-2 lg:px-10 xl:px-20">
            <img src="{{ asset('img/selo_gpc.png') }}" alt="" class="block mx-auto max-w-40">
            <x-brand class="absolute right-0 hidden w-full -top-72 -z-10 fill-azul-claro sm:block" style="width: 90%;" />

        </div>
    </div>
</section>
