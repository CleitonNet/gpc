<div id="topo">
    <header id="navigation-fixed" class="hidden opacity-0 transition-all duration-200 fixed inset-x-0 top-0 z-[9999] w-full text-black bg-white/90 backdrop-blur-sm">
        <nav class="relative z-10 flex items-center justify-between px-4 py-1 mx-auto md:px-6 lg:px-10 xl:px-16 2xl:px-20">
            <a href="{{ route('welcome') }}" class="flex items-center gap-3">
                <img src="{{ asset('img/brand.webp') }}" alt="" class="object-cover h-10" style="filter: drop-shadow(1px 1px 0 rgb(0 0 0 / .5));">
                <div>
                    <h1 class="text-[10px] leading-[11px] font-expansivaBold">GESTÃO</h1>
                    <h1 class="text-[10px] leading-[11px] font-expansivaBold">PROFISSIONAL</h1>
                    <h1 class="text-[10px] leading-[11px] font-expansivaBold">DE CONDOMÍNIOS</h1>
                </div>
            </a>

            <ul class="hidden gap-2 lg:flex items-center">
                <li><a href="#topo" class="px-8 py-2 text-sm">Início</a></li>
                <li><a href="#sobre" class="px-8 py-2 text-sm">Sobre nós</a></li>
                <li><a href="#services" class="px-8 py-2 text-sm">Vantagens</a></li>
                <li><a href="#contato" class="px-8 py-2 text-sm">Contato</a></li>
                <li><a href="#faq" class="px-8 py-2 text-sm">FAQ</a></li>
                <li><a href="https://www.immobileweb.com.br/login/gpcadministradora" target="_blanc" class="px-8 py-2 text-sm flex gap-1.5 items-center">
                    <img src="{{ asset('img/user.png') }}" alt="clientes" class="h-7 object-contain" style="filter: drop-shadow(1px 1px 0 #000)"> 
                    Clientes   
                </a></li>
            </ul>
        </nav>
    </header>
    <header class="relative">
        <div class="absolute bottom-0 right-0 z-0 w-full h-full bg-no-repeat bg-contain" style="background-image: url({{ asset('img/predios.webp') }}); background-position: bottom right"></div>
        <x-brand class="absolute top-0 left-0 z-10 max-w-full h-4/5 w-fit fill-azul-claro/20" style="filter: drop-shadow(1px 1px 0 #000);" />

        <div class="relative px-4 mx-auto max-w-fullhd">

            <div class="absolute top-0 left-0 w-full max-w-full bg-no-repeat bg-contain h-4/5 -z-10" style="background-image: url({{ asset('img/logo1.webp') }})"></div>

            <nav class="relative z-10 flex items-start justify-between px-4 pt-16 mx-auto md:px-6 lg:px-10 xl:px-16 2xl:px-20">
                <a href="{{ route('welcome') }}" class="flex gap-3">
                    <img src="{{ asset('img/brand.webp') }}" alt="" class="object-cover h-24">
                    <div>
                        <h1 class="font-expansivaBold leading-[19px]">GESTÃO</h1>
                        <h1 class="font-expansivaBold leading-[19px]">PROFISSIONAL</h1>
                        <h1 class="font-expansivaBold leading-[19px]">DE CONDOMÍNIOS</h1>
                        <h2 class="pt-2 text-xs tracking-widest opacity-75 font-swis721">Administradora</h2>
                    </div>
                </a>

                <ul class="hidden gap-2 lg:flex">
                    <li><a href="#topo" class="px-8 py-2 text-sm">Início</a></li>
                    <li><a href="#sobre" class="px-8 py-2 text-sm">Sobre nós</a></li>
                    <li><a href="#services" class="px-8 py-2 text-sm">Vantagens</a></li>
                    <li><a href="#contato" class="px-8 py-2 text-sm">Contato</a></li>
                    <li><a href="#faq" class="px-8 py-2 text-sm">FAQ</a></li>
                    <li><a href="https://www.immobileweb.com.br/login/gpcadministradora" target="_blanc" class="px-8 pb-2 text-sm flex gap-1.5 items-center">
                        <img src="{{ asset('img/user.png') }}" alt="clientes" class="h-7 object-contain" style="filter: drop-shadow(1px 1px 0 #000)"> 
                        CLIENTES   
                    </a></li>
                </ul>
            </nav>

            @livewire('youtube-view')

            @livewire('estatisticas-view')

        </div>
    </header>

    <script>
        var header = document.getElementById("navigation-fixed");
        var prevScrollpos = window.scrollY;
        var scrollThreshold = 10;



        window.addEventListener("scroll", function () {
            let scrollPosition = window.scrollY || document.documentElement.scrollTop;
            // console.log(scrollPosition);

            var currentScrollPos = window.scrollY;

            if (scrollPosition >= 300) {
                header.classList.remove("hidden");
                header.classList.remove("opacity-0");
                if (Math.abs(prevScrollpos - currentScrollPos) > scrollThreshold) {
                    if (prevScrollpos > currentScrollPos) {
                        // Rolando para cima, barra de navegação desce
                        header.style.transform = "translateY(0)";
                    } else {
                        // Rolando para baixo, barra de navegação sobe
                        header.style.transform = "translateY(-200%)";
                    }
                }
                prevScrollpos = currentScrollPos;
            } else {
                header.classList.add("hidden"); // Exibe o header
                header.classList.add("opacity-1"); // Exibe o header
            }

        });

    </script>
</div>
