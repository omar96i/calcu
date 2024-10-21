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
        <x-filament::tabs.item wire:click="setPage('K')" :active="$page === 'K'" icon="heroicon-m-clipboard">
            K
        </x-filament::tabs.item>
        <x-filament::tabs.item wire:click="setPage('salario-medio-nacional')" :active="$page === 'salario-medio-nacional'"
            icon="heroicon-m-clipboard">
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
            @if ($step == 1)
                Descargar plantilla
            @elseif ($step == 2)
                Importar datos
            @endif
        </x-slot>

        @if ($step == 1)
            <div class="mt-3">
                <p>Puedes descargar la plantilla para asegurarte de que el archivo a importar tenga el formato correcto.
                </p>
            </div>
            <div class="mt-3 flex space-x-3">
                <!-- Botón para descargar plantilla -->
                <x-filament::button wire:click="downloadTemplate()" class="w-full" style="margin-right: 10px"
                    color="gray">
                    Descargar plantilla
                </x-filament::button>

                <!-- Botón para avanzar al siguiente paso -->
                <x-filament::button wire:click="$set('step', 2)" class="w-full">
                    Siguiente
                </x-filament::button>
            </div>
        @elseif ($step == 2)
            <div class="mt-3">
                <label for="">Año a calcular</label>
                <x-filament::input.wrapper>
                    <x-filament::input type="text" wire:model.live="yeartoimport" />
                </x-filament::input.wrapper>
            </div>

            <x-filament::fieldset>
                <x-slot name="label">
                    Archivo
                </x-slot>
                <x-filament::input.wrapper>
                    <x-filament::input type="file" wire:model="file" />
                </x-filament::input.wrapper>
            </x-filament::fieldset>
            <div class="mt-3 flex space-x-3">
                @if ($loading)
                    <x-filament::button disabled class="flex-1" style="margin-right: 10px;">
                        <x-filament::loading-indicator class="w-full" />
                    </x-filament::button>
                @else
                    <x-filament::button wire:click="importData()" class="flex-1" style="margin-right: 10px;">
                        Importar
                    </x-filament::button>
                @endif

                <!-- Botón "Atrás" con color gris -->
                <x-filament::button wire:click="$set('step', 1)" class="flex-1" color="gray">
                    Atrás
                </x-filament::button>
            </div>

        @endif
    </x-filament::modal>
</x-filament-panels::page>
