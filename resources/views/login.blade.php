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
        <div class="justify-center bg-white">
            <div class="flex gap-5 max-md:flex-col max-md:gap-0">
                <div class="flex flex-col w-[66%] max-md:ml-0 max-md:w-full">
                <div
                    class="flex flex-col grow w-full bg-blue-500 max-md:mt-10 max-md:max-w-full"
                >
                    <div class="z-10 max-md:max-w-full">
                    <div class="flex gap-5 max-md:flex-col max-md:gap-0">
                        <div class="flex flex-col w-[29%] max-md:ml-0 max-md:w-full">
                        <div
                            class="shrink-0 mx-auto rounded-full bg-white bg-opacity-10 h-[483px] w-[242px]"
                        ></div>
                        </div>
                        <div class="flex flex-col ml-5 w-[71%] max-md:ml-0 max-md:w-full">
                        <div
                            class="mt-72 mr-44 -ml-px text-5xl font-semibold tracking-tighter text-center text-neutral-900 max-md:mt-10 max-md:max-w-full max-md:text-4xl"
                        >
                            NAMA APLIKASI
                        </div>
                        </div>
                    </div>
                    </div>
                    <div
                    class="items-center px-16 pt-10 pb-56 text-sm text-center rounded-full bg-white bg-opacity-10 text-neutral-900 max-md:px-5 max-md:pb-10 max-md:max-w-full"
                    >
                    Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. Lorem Ipsum has been the industry's standard dummy text ever
                    since the 1500s, when an unknown printer took a galley of type and
                    scrambled it to make a type specimen book.
                    </div>
                </div>
                </div>
                <div class="flex flex-col ml-5 w-[34%] max-md:ml-0 max-md:w-full">
                <div
                    class="flex flex-col self-stretch px-5 my-auto text-xs text-neutral-400 max-md:mt-10 max-md:max-w-full"
                >
                    <div class="text-2xl text-neutral-700 max-md:max-w-full">
                    Selamat Datang Admin
                    </div>
                    <div class="mt-4 max-md:max-w-full">
                    Silahkan masukkan email atau nomor telepon dan password
                    <br />
                    Anda untuk mulai menggunakan aplikasi
                    </div>
                    <div class="mt-9 text-neutral-500 max-md:max-w-full">
                    Email / Nomor Telpon
                    </div>
                    <div
                    class="justify-center items-start px-5 py-4 mt-2.5 text-sm bg-white border border-solid border-zinc-500 max-md:pr-5 max-md:max-w-full"
                    >
                    Contoh: admin@gmail.com
                    </div>
                    <div class="mt-5 text-neutral-500 max-md:max-w-full">Password</div>
                    <div
                    class="justify-center items-start px-5 py-4 mt-3 text-sm bg-white border border-solid border-zinc-500 max-md:max-w-full"
                    >
                    Masukkan passward
                    </div>
                    <div
                    class="justify-center items-center px-16 py-4 mt-8 text-sm font-semibold text-center text-white whitespace-nowrap bg-blue-500 max-md:px-5 max-md:max-w-full"
                    >
                    MASUK
                    </div>
                </div>
                </div>
            </div>
            </div>
    </body>
</html>
