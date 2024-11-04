<x-filament-panels::page>
    <x-filament::tabs>
        <x-filament::tabs.item wire:click="setPage('calculo')" :active="$page === 'calculo'" icon="heroicon-m-clipboard">
            Calculo
        </x-filament::tabs.item>
        <x-filament::tabs.item icon="heroicon-m-arrow-up-tray" wire:click="openModal()">
            Importar datos
        </x-filament::tabs.item>
    </x-filament::tabs>
    @if ($page == 'calculo')
        <x-filament::section>
            <x-slot name="heading">
                Calculo
            </x-slot>
            <x-filament::section>
                <x-slot name="heading">Cálculo de Datos</x-slot>
                <x-slot name="description">
                    En este apartado, deberá ingresar la información requerida para llevar a cabo los cálculos
                    necesarios. Los resultados obtenidos serán utilizados para actualizar los datos consultados,
                    reflejando los cálculos realizados.
                </x-slot>
                <div class="gap-4">
                    @if (auth()->user()->hasRole('super_admin'))
                        <div>
                            <label for="">Selecciona la empresa</label>
                            <x-filament::input.wrapper>
                                <x-filament::input.select wire:model.live="selectedCompany"
                                    wire:change="closeTableAction()">
                                    <option value="">Selecciona una opción</option>
                                    @foreach ($companies as $company)
                                        <option value="{{ $company->id }}">{{ $company->name }}</option>
                                    @endforeach
                                </x-filament::input.select>
                            </x-filament::input.wrapper>
                        </div>
                    @endif
                    <div>
                        <label for="">Selecciona el año</label>
                        <x-filament::input.wrapper>
                            <x-filament::input.select wire:model.live="year_calculation"
                                wire:change="closeTableAction()">
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                                <option value="2026">2026</option>
                                <option value="2027">2027</option>
                                <option value="2028">2028</option>
                                <option value="2029">2029</option>
                                <option value="2030">2030</option>
                            </x-filament::input.select>
                        </x-filament::input.wrapper>
                    </div>
                </div>
                <!-- Botones de acción -->
                <x-filament::button class="w-full mt-3" icon="heroicon-m-magnifying-glass"
                    wire:click="showTableFunct()">
                    Buscar/Calcular
                </x-filament::button>

                {{-- <x-filament::button class="w-full mt-3" wire:click="dowloadExport()">
                Exportar a Excel
            </x-filament::button> --}}
            </x-filament::section>
            @if ($closeTable)
                <livewire:layoff-table :user_id="$selectedCompany" :year="$year_calculation" />
            @endif

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
            @if (auth()->user()->hasRole('super_admin'))
                <div>
                    <label for="">Selecciona la empresa</label>
                    <x-filament::input.wrapper>
                        <x-filament::input.select wire:model.live="selectedCompany" wire:change="closeTableAction()">
                            <option value="">Selecciona una opción</option>
                            @foreach ($companies as $company)
                                <option value="{{ $company->id }}">{{ $company->name }}</option>
                            @endforeach
                        </x-filament::input.select>
                    </x-filament::input.wrapper>
                </div>
            @endif
            <div>
                <label for="">Selecciona el año</label>
                <x-filament::input.wrapper>
                    <x-filament::input.select wire:model.live="year_calculation" wire:change="closeTableAction()">
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>
                        <option value="2028">2028</option>
                        <option value="2029">2029</option>
                        <option value="2030">2030</option>
                    </x-filament::input.select>
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
