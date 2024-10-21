<x-filament-panels::page>
    <x-filament::tabs>
        <x-filament::tabs.item wire:click="setPage('parametros')" :active="$page === 'parametros'" icon="heroicon-m-clipboard">
            Parametros
        </x-filament::tabs.item>
        <x-filament::tabs.item wire:click="setPage('calculo')" :active="$page === 'calculo'" icon="heroicon-m-clipboard">
            Calculo
        </x-filament::tabs.item>
        <x-filament::tabs.item wire:click="setPage('quinquenio')" :active="$page === 'quinquenio'" icon="heroicon-m-clipboard">
            Quinquenios presentacion
        </x-filament::tabs.item>
        <x-filament::tabs.item wire:click="setPage('novedades')" :active="$page === 'novedades'" icon="heroicon-m-clipboard">
            Novedades
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

    @if ($page == 'calculo')
        {{-- Calculo content --}}
        <x-filament::section>
            <x-slot name="heading">
                Calculo
            </x-slot>

            <livewire:five-year-calculation />
        </x-filament::section>
    @endif

    @if ($page == 'quinquenio')
        {{-- Quinquenios presentacion content --}}
        <x-filament::section>
            <x-slot name="heading">
                Quinquenios presentacion
            </x-slot>

            <livewire:five-year-calculation-table2 />
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
