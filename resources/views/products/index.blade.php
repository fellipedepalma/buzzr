<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold uppercase text-xl text-gray-700">Lista de Produtos</h2>
    </x-slot>
    <div class="max-w-7xl mx-auto px-6 mt-4">
        <div class="flex justify-end">
            <a href="{{ route('products.create') }}"
                class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold text-xl py-2 px-3 rounded-lg shadow-md">Novo
                Produto</a>
        </div>
        <div class="mt-3 p-1 bg-white shadow rounded-lg">
            <table class="table-auto w-full bg-white">
                <thead>
                    <th class="px-4 py-4 text-left text-gray-500 uppercase">Produto</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @foreach ($products as $product)
                        <tr>
                            <td class="px-4 py-4 w-full">
                                <div class=" flex">
                                    <div>
                                        <img src="http://via.placeholder.com/50" class="rounded-full h-10 w-10">
                                    </div>
                                    <div class="ml-3">
                                        <span class="block">{{ $product->name }}</span>
                                        <span class="block text-gray-500 text-sm">{{ $product->Category->name }}</span>
                                    </div>
                                </div>
                            </td>
                            <td class="px-1">
                                <a href="{{ route('products.show', $product->id) }}"
                                    class="bg-green-500 hover:bg-green-700 text-white font-bold text-sm py-2 px-3 rounded-lg shadow-md">Visualizar</a>
                            </td>
                            <td class="px-1">
                                <a href="{{ route('products.edit', $product->id) }}"
                                    class="bg-yellow-400 hover:bg-yellow-700 text-white font-bold text-sm py-2 px-3 rounded-lg shadow-md">Editar</a>
                            </td>
                            <td class="px-1">
                                <form action="{{ route('products.destroy', $product->id) }}" class="d-inline"
                                    method="POST" onsubmit="return confirm('Você quer realmente apagar o produto?')">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit"
                                        class="bg-red-500 hover:bg-red-700 text-white font-bold text-sm py-2 px-3 rounded-lg shadow-md">Remover</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
