<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-4">
            <div class="overflow-hidden rounded-lg bg-white px-4 py-5 shadow sm:p-6">
            <dt class="truncate text-sm font-medium text-gray-500">Total Users</dt>
            <dd class="mt-1 text-3xl font-semibold tracking-tight text-gray-900">{{ $count['users'] }}</dd>
            </div>
            <div class="overflow-hidden rounded-lg bg-white px-4 py-5 shadow sm:p-6">
            <dt class="truncate text-sm font-medium text-gray-500">Total Users</dt>
            <dd class="mt-1 text-3xl font-semibold tracking-tight text-gray-900">{{ $count['users'] }}</dd>
            </div>
            <div class="overflow-hidden rounded-lg bg-white px-4 py-5 shadow sm:p-6">
            <dt class="truncate text-sm font-medium text-gray-500">Total Products</dt>
            <dd class="mt-1 text-3xl font-semibold tracking-tight text-gray-900">{{ $count['products'] }}</dd>
            </div>
            <div class="overflow-hidden rounded-lg bg-white px-4 py-5 shadow sm:p-6">
            <dt class="truncate text-sm font-medium text-gray-500">Total Products</dt>
            <dd class="mt-1 text-3xl font-semibold tracking-tight text-gray-900">{{ $count['products'] }}</dd>
            </div>
        </dl>
        </div>
    </div>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
            <h1 class="text-base font-semibold leading-6 text-gray-900">Produk Terbaru</h1>
            </div>
        </div>
        <div class="mt-8 flow-root">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                <table class="min-w-full divide-y divide-gray-300">
                <thead class="bg-blue-600 border rounded-lg">
                    <tr>
                    <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-200">Produk</th>
                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-200">Tanggal dibuat</th>
                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-200">Harga</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($products as $p)
                    <tr>
                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900">{{$p->name}}</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{$p->created_at->format("d M Y")}}</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{$p->price}}</td>
                    </tr>
                    @endforeach

                </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>




</x-app-layout>
