<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold uppercase text-xl text-gray-700">Editando categoria({{ $category->name }})</h2>
    </x-slot>
    <form method="POST" class="max-w-7xl mx-auto px-8 py-4 bg-white shadow mt-4 rounded-md"
        action="{{ route('categories.update', $category->id) }}">
        @method('PUT')
        @csrf
        <div class="w-full py-1">
            <label class="uppercase text-gray-700 font-bold text-sm" for="name">Nome</label>
            <input type="text"
                class="w-full bg-gray-100 text-gray-700 rounded py-2 px-3 focus:bg-gray-50 focus:outline-none"
                name="name" id="name" placeholder="Digite o nome da categoria" value="{{ $category->name }}">
        </div>
        <div class="flex justify-end mt-4">
            <button type="submit"
                class="bg-green-500 hover:bg-green-700 text-white font-bold text-xl py-2 px-4 rounded-md shadow">Editar
                Categoria</button>
        </div>
    </form>
</x-app-layout>
