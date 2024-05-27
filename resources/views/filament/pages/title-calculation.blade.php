<x-filament-panels::page>
    <x-filament::tabs>
        <x-filament::tabs.item wire:click="setPage('K')" :active="$page === 'K'" icon="heroicon-m-clipboard">
            K
        </x-filament::tabs.item>
        <x-filament::tabs.item wire:click="setPage('salario-medio-nacional')" :active="$page === 'salario-medio-nacional'" icon="heroicon-m-clipboard">
            Salarios media nacional
        </x-filament::tabs.item>
        <x-filament::tabs.item wire:click="setPage('dtfp')" :active="$page === 'dtfp'" icon="heroicon-m-clipboard">
            DTFP
        </x-filament::tabs.item>
        <x-filament::tabs.item wire:click="setPage('calculo-masivo')" :active="$page === 'calculo-masivo'" icon="heroicon-m-clipboard">
            Calculo masivo
        </x-filament::tabs.item>
        <x-filament::tabs.item wire:click="setPage('salarios')" :active="$page === 'salarios'" icon="heroicon-m-clipboard">
            Salarios
        </x-filament::tabs.item>
        <x-filament::tabs.item icon="heroicon-m-arrow-up-tray" wire:click="openModal()">
            Importar datos
        </x-filament::tabs.item>
    </x-filament::tabs>
    @if ($page == 'K')
        {{-- K content --}}
        <x-filament::section>
            <x-slot name="heading">
                K
            </x-slot>

            {{-- Content --}}
        </x-filament::section>
    @endif

    @if ($page == 'salario-medio-nacional')
        {{-- K content --}}
        <x-filament::section>
            <x-slot name="heading">
                Salario medio nacional
            </x-slot>

            {{-- Content --}}
        </x-filament::section>
    @endif

    @if ($page == 'dtfp')
        {{-- dtfp content --}}
        <x-filament::section>
            <x-slot name="heading">
                DTFP
            </x-slot>

            {{-- Content --}}
        </x-filament::section>
    @endif

    @if ($page == 'calculo-masivo')
        {{-- Calculo masivo content --}}
        <x-filament::section>
            <x-slot name="heading">
                Calculo masivo
            </x-slot>

            <livewire:title-calculation-table />
        </x-filament::section>
    @endif

    @if ($page == 'salarios')
        {{-- Salarios content --}}
        <x-filament::section>
            <x-slot name="heading">
                Salarios
            </x-slot>

            {{-- Content --}}
        </x-filament::section>
    @endif

    <!-- Upload file segment -->
    <x-filament::modal id="upload-file">
        <x-slot name="heading">
            Importar datos
        </x-slot>
        <x-filament::fieldset>
            <x-slot name="label">
                Archivo
            </x-slot>
            <x-filament::input.wrapper>
                <x-filament::input
                    type="file"
                    wire:model="file"
                />
            </x-filament::input.wrapper>

        </x-filament::fieldset>
        @if ($loading)
            <x-filament::button disabled>
                <x-filament::loading-indicator class="h-5 w-5" />
            </x-filament::button>
        @else
            <x-filament::button wire:click="importData()">
                Importar
            </x-filament::button>
        @endif
    </x-filament::modal>
</x-filament-panels::page>
