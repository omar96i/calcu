<x-filament-panels::page>
    <x-filament::tabs>
         <x-filament::tabs.item wire:click="setPage('parametros')" :active="$page === 'parametros'" icon="heroicon-m-clipboard">
            2019
        </x-filament::tabs.item> 
        <x-filament::tabs.item wire:click="setPage('parametros')" :active="$page === 'parametros'" icon="heroicon-m-clipboard">
            2020
        </x-filament::tabs.item> 
        <x-filament::tabs.item wire:click="setPage('parametros')" :active="$page === 'parametros'" icon="heroicon-m-clipboard">
            2021
        </x-filament::tabs.item> 
        <x-filament::tabs.item wire:click="setPage('parametros')" :active="$page === 'parametros'" icon="heroicon-m-clipboard">
            2022
        </x-filament::tabs.item> 
        <x-filament::tabs.item wire:click="setPage('parametros')" :active="$page === 'parametros'" icon="heroicon-m-clipboard">
            2023
        </x-filament::tabs.item> 
        <x-filament::tabs.item wire:click="setPage('calculopension')" :active="$page === 'calculopension'" icon="heroicon-m-clipboard">
            Información Base
        </x-filament::tabs.item>
        <x-filament::tabs.item wire:click="setPage('quinquenio')" :active="$page === 'quinquenio'" icon="heroicon-m-clipboard">
            Calculo Pension
        </x-filament::tabs.item>
        
        <x-filament::tabs.item icon="heroicon-m-arrow-up-tray" wire:click="openModal()">
            Importar datos
        </x-filament::tabs.item>
    </x-filament::tabs>
    @if ($page == 'parametros')
        {{-- Parametros content --}}
        <x-filament::section>
            <x-slot name="heading">
                Parametros
            </x-slot>

            {{-- Content --}}
        </x-filament::section>
    @endif

    @if ($page == 'calculopension')
        {{-- Calculo content --}}
        <x-filament::section>
            <x-slot name="heading">
                Información Base
            </x-slot>

            <livewire:company-studies/>
        </x-filament::section>
    @endif

    @if ($page == 'quinquenio')
        {{-- Quinquenios presentacion content --}}
        <x-filament::section>
            <x-slot name="heading">
                Quinquenios presentacion
            </x-slot>

            <livewire:company-studie />
        </x-filament::section>
    @endif

    @if ($page == 'novedades')
        {{-- Novedades content --}}
        <x-filament::section>
            <x-slot name="heading">
                Novedades
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

