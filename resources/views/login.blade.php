<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Vascomm</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        <div class="flex flex-col bg-white">
        <div class="flex flex-col pt-4 w-full bg-white max-md:max-w-full">
            <div
            class="flex gap-5 justify-between items-center self-center px-5 w-full max-w-[1284px] max-md:flex-wrap max-md:max-w-full"
            >
            <img
                loading="lazy"
                src="/images/logo.png"
                class="shrink-0 self-stretch my-auto max-w-full aspect-[6.25] w-[168px]"
            />

            <div class="flex gap-5 justify-between px-4 py-1.5 text-xs tracking-normal rounded-sm bg-stone-50 max-w-[662px] text-stone-400 max-md:flex-wrap">
                <input type="text" class="flex-auto my-auto outline-none" placeholder="Cari parfum kesukaanmu">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>

            </div>

            <div class="flex gap-4 self-stretch text-sm font-bold whitespace-nowrap tracking-[3.5px]">
                <div
                class="justify-center px-4 py-3 text-blue-500 border border-blue-500 border-solid hover:bg-blue-500 hover:text-white cursor-pointer transition-colors"
                >
                MASUK
                </div>
                <div class="justify-center px-4 py-3 text-orange-100 border border-solid bg-blue-500 hover:bg-white hover:border-blue-500 hover:text-dark cursor-pointer transition-colors">
                DAFTAR
                </div>
            </div>
            </div>
            <div
            class="mt-3.5 w-full bg-neutral-200 min-h-[1px] max-md:max-w-full"
            ></div>
        </div>
        <div
            class="flex flex-col self-center px-5 mt-8 w-full max-w-[1087px] max-md:max-w-full"
        >
            <img
            loading="lazy"
            srcset="/images/header.png"
            class="self-center w-full aspect-[2.78] max-w-[1006px] max-md:max-w-full"
            />
            <div
            class="self-start mt-10 ml-5 text-2xl font-bold tracking-tight text-stone-900 max-md:ml-2.5"
            >
            Terbaru
            </div>
            <div
            class="flex gap-5 justify-between mt-10 text-sm font-bold max-md:flex-wrap max-md:max-w-full"
            >
            <div class="shrink-0 my-auto w-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                </svg>
            </div>
            @foreach ($products->take(5) as $product)
                <div class="flex flex-col items-start pt-4 pr-9 pl-4 bg-white border border-solid shadow-sm border-zinc-300 max-md:pr-5">
                    <img
                    loading="lazy"
                    srcset="{{$product->gambar_produk}}"
                    class="ml-5 w-28 aspect-[0.74] max-md:ml-2.5"
                    />
                    <div class="mt-8 tracking-tight leading-[114%] text-stone-900">
                    {{ $product->name }}
                    </div>
                    <div class="mt-3 text-blue-500">IDR {{ $product->price }}</div>
                </div>
            @endforeach
            <div class="shrink-0 my-auto w-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
            </div>
            </div>
            <div
            class="self-start mt-14 ml-4 text-2xl font-bold tracking-tight text-stone-900 max-md:mt-10 max-md:ml-2.5"
            >
            Produk Tersedia
            </div>
            <div
            class="flex gap-5 self-center mt-10 w-full text-sm font-bold flex-wrap max-md:max-w-full"
            >
            @foreach ($products->take(16) as $product)
                <div class="flex flex-col w-1/2 flex-1 px-4 py-8 bg-white max-md:pr-5">
                    <img
                    loading="lazy"
                    srcset="{{$product->gambar_produk}}"
                    class="ml-2.5 aspect-[0.98] w-[130px]"
                    />
                    <div
                    class="mt-10 tracking-tight leading-[114%] text-stone-900 max-md:mt-10"
                    >
                    {{$product->name}}
                    </div>
                    <div class="mt-3 text-blue-500">IDR {{$product->price}}</div>
                </div>
            @endforeach
            </div>
            <div
            class="justify-center self-center px-4 py-2.5 mt-3 text-sm font-semibold text-blue-500 border border-blue-500 border-solid"
            >
            Lihat lebih banyak
            </div>
        </div>
        <div
            class="flex flex-col pb-20 mt-14 w-full bg-white max-md:mt-10 max-md:max-w-full"
        >
            <div class="w-full bg-neutral-200 min-h-[1px] max-md:max-w-full"></div>
            <div class="mt-20 mb-2.5 ml-28 max-w-full w-[872px] max-md:mt-10">
            <div class="flex gap-5 max-md:flex-col max-md:gap-0">
                <div class="flex flex-col w-[39%] max-md:ml-0 max-md:w-full">
                <div
                    class="flex flex-col grow text-xs leading-4 text-center text-stone-900 max-md:mt-10"
                >
                    <img
                    loading="lazy"
                    src="/images/logo.png"
                    class="ml-6 max-w-full aspect-[6.25] w-[168px] max-md:ml-2.5"
                    />
                    <div class="mt-12 max-md:mt-10">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut
                    commodo in vestibulum, sed dapibus tristique nullam.
                    </div>
                </div>
                </div>
                <div class="flex flex-col ml-5 w-[61%] max-md:ml-0 max-md:w-full">
                <div class="max-md:mt-10 max-md:max-w-full">
                    <div class="flex gap-5 max-md:flex-col max-md:gap-0">
                    <div class="flex flex-col w-[39%] max-md:ml-0 max-md:w-full">
                        <div
                        class="flex flex-col text-xs text-stone-900 tracking-[3px] max-md:mt-10"
                        >
                        <div class="text-lg tracking-tighter">Layanan</div>
                        <div class="mt-9">BANTUAN</div>
                        <div class="mt-6">TANYA JAWAB</div>
                        <div class="mt-5">HUBUNGI KAMI</div>
                        <div class="mt-5">CARA BERJUALAN</div>
                        </div>
                    </div>
                    <div class="flex flex-col ml-5 w-[42%] max-md:ml-0 max-md:w-full">
                        <div
                        class="flex flex-col grow text-xs text-stone-900 tracking-[3px] max-md:mt-10"
                        >
                        <div class="text-lg tracking-tighter">Tentang Kami</div>
                        <div class="mt-9">ABOUT US</div>
                        <div class="mt-6">KARIR</div>
                        <div class="mt-5">BLOG</div>
                        <div class="mt-5">KEBIJAKAN PRIVASI</div>
                        <div class="mt-5">SYARAT DAN KETENTUAN</div>
                        </div>
                    </div>
                    <div class="flex flex-col ml-5 w-[19%] max-md:ml-0 max-md:w-full">
                        <div
                        class="flex flex-col whitespace-nowrap text-stone-900 max-md:mt-10"
                        >
                        <div class="text-lg tracking-tighter">Mitra</div>
                        <div class="mt-10 text-xs tracking-[3px]">SUPPLIER</div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="w-full bg-cyan-50 min-h-[24px] max-md:max-w-full"></div>
        </div>
    </body>
</html>

    </body>
</html>
