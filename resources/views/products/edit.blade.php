<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold uppercase text-xl text-gray-700">Editar o produto ({{ $product->name }})</h2>
    </x-slot>
    <form method="POST" class="max-w-7xl mx-auto px-8 py-4 bg-white shadow mt-4 rounded-md"
        action="{{ route('products.update', $product->id) }}">
        @csrf
        @method('PUT')
        <div class="w-full py-1">
            <label class="uppercase text-gray-700 font-bold text-sm" for="name">Nome</label>
            <input type="text"
                class="w-full bg-gray-100 text-gray-700 rounded py-2 px-3 focus:bg-gray-50 focus:outline-none"
                name="name" id="name" value="{{ $product->name }}" placeholder="Digite o nome do produto">
        </div>
        <div class="w-full py-1">
            <label class="uppercase text-gray-700 font-bold text-sm mt-2" for="description">Descrição</label>
            <textarea type="text"
                class="w-full bg-gray-100 text-gray-700 rounded py-2 px-3 focus:bg-gray-50 focus:outline-none" rows="8"
                name="description" placeholder="Digite a descrição">{{ $product->description }}</textarea>
        </div>
        <div class="flex  py-1">
            <div class="w-2/3 px-3">
                <label class="uppercase text-gray-700 font-bold text-sm" for="price">Categoria</label>
                <select class="w-full bg-gray-100 text-gray-700 rounded py-2 px-3 focus:bg-gray-50 focus:outline-none"
                    name="category_id" id="category_id" placeholder="Selecione uma categoria...">
                    @foreach ($categories as $categoty)
                        <option value="{{ $categoty->id }}" @if($categoty->id == $product->category_id) {{ 'selected' }} @endif>{{ $categoty->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="w-1/3 pr-3">
                <label class="uppercase text-gray-700 font-bold text-sm" for="price">Preço</label>
                <input type="number"
                    class="w-full bg-gray-100 text-gray-700 rounded py-2 px-3 focus:bg-gray-50 focus:outline-none"
                    name="price" id="price" value="{{ $product->price }}" placeholder="R$ 0.00">
            </div>
        </div>
        <div class="flex justify-end mt-4">
            <button type="submit"
                class="bg-green-500 hover:bg-green-700 text-white font-bold text-xl py-2 px-4 rounded-md shadow">Salvar
                Produto</button>
        </div>
    </form>

</x-app-layout>
