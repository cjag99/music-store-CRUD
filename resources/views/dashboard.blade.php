<x-app-layout>


    <div class="py-12">
        <div class="mx-auto max-w-7xl space-y-10 sm:px-6 lg:px-8">

            <!-- Bienvenida -->
            <div class="border-4 border-[#DAA520] bg-[#FFF8E7]/80 p-6 shadow-sm sm:rounded-lg">
                <h3 class="text-2xl font-bold text-[#3B2F2F]">¡Hola {{ Auth::user()->name }}!</h3>
                <p class="mt-2 text-sm text-[#3B2F2F]">Este es tu panel de control. Desde aquí puedes gestionar
                    instrumentos, categorías y más.</p>
            </div>

            <!-- Tarjetas resumen -->
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <div class="rounded-lg border-4 border-[#DAA520] bg-[#FFF8E7]/80 p-6 shadow-sm">
                    <h4 class="text-lg font-semibold text-[#3B2F2F]">Instrumentos</h4>
                    <p class="mt-2 text-3xl font-bold text-[#3B2F2F]">{{ $instrumentCount }}</p>
                </div>
                <div class="rounded-lg border-4 border-[#DAA520] bg-[#FFF8E7]/80 p-6 shadow-sm">
                    <h4 class="text-lg font-semibold text-[#3B2F2F]">Categorías</h4>
                    <p class="mt-2 text-3xl font-bold text-[#3B2F2F]">{{ $categoryCount }}</p>
                </div>
                <div class="rounded-lg border-4 border-[#DAA520] bg-[#FFF8E7]/80 p-6 shadow-sm">
                    <h4 class="text-lg font-semibold text-[#3B2F2F]">Usuarios registrados</h4>
                    <p class="mt-2 text-3xl font-bold text-[#3B2F2F]">{{ $userCount }}</p>
                </div>
            </div>


            <!-- Últimos instrumentos -->
            <div class="rounded-lg border-4 border-[#DAA520] bg-[#FFF8E7]/80 p-6 shadow-sm">
                <h4 class="mb-4 text-lg font-semibold text-[#3B2F2F]">Últimos instrumentos añadidos</h4>
                <ul class="divide-y divide-[#DAA520]/30">
                    @forelse($latestInstruments as $instrument)
                        <li class="py-2 text-sm text-[#3B2F2F]">
                            <strong>{{ $instrument->name }}</strong> — {{ $instrument->brand ?? 'Sin marca' }}
                            ({{ $instrument->category?->name ?? 'Sin categoría' }})
                        </li>
                    @empty
                        <li class="py-2 text-sm text-[#3B2F2F]">No hay instrumentos recientes.</li>
                    @endforelse
                </ul>
            </div>


        </div>
    </div>
    @include('instruments.partials.create-modal')
    @include('categories.partials.create-modal')
</x-app-layout>
