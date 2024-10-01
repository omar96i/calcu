<x-filament-panels::page>
    <x-filament::tabs>
        <x-filament::tabs.item wire:click="setPage('calculopension')" :active="$page === 'calculopension'" icon="heroicon-m-clipboard">
            Información Base
        </x-filament::tabs.item>
        <x-filament::tabs.item icon="heroicon-m-arrow-up-tray" wire:click="openModal()">
            Descargar plantilla / Importar datos
        </x-filament::tabs.item>
    </x-filament::tabs>
    <x-filament::badge size="xs" >
        1. Descarga la plantilla, agrega tus datos y luego impórtala. <br>
        2. Selecciona el año y tipo de reporte, y súbelo. <br>
        3. Para calcular, selecciona el año y reporte importado, ingresa los parámetros y haz clic en "Calcular". <br>
        4. Puedes descargar un Excel con los datos calculados o corregir y recalcular si es necesario. <br>
        5. Si solo deseas consultar los datos, accede a la sección de consulta para verlos sin cálculos. <br>
    </x-filament::badge>
    @if ($page == 'calculopension')
        {{-- Calculo content --}}
        <x-filament::section>
            <x-slot name="heading">
                <div class="flex gap-2">
                    <x-filament::button wire:click="$set('calcular', 'SI')" :color="$calcular === 'SI' ? 'primary' : 'gray'" class="w-1/2">
                        Calcular y consultar
                    </x-filament::button>

                    <x-filament::button wire:click="$set('calcular', 'NO')" :color="$calcular === 'NO' ? 'primary' : 'gray'" class="w-1/2 ml-2">
                        Consultar y exportar
                    </x-filament::button>
                </div>
            </x-slot>


            <!-- Mostrar formulario en función de la selección -->
            @if ($calcular === 'SI')
                <x-filament::section>
                    <x-slot name="heading">Cálculo de Datos</x-slot>
                    <x-slot name="description">
                        En este apartado, deberá ingresar la información requerida para llevar a cabo los cálculos
                        necesarios. Los resultados obtenidos serán utilizados para actualizar los datos consultados,
                        reflejando los cálculos realizados.
                    </x-slot>
                    <div class="gap-4">
                        <div>
                            <label for="">Selecciona el año</label>
                            <x-filament::input.wrapper>
                                <x-filament::input.select wire:model.live="year_calculation" wire:change="closeTable()">
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

                        <div>
                            <label for="">Selecciona el tipo de reporte</label>
                            <x-filament::input.wrapper>
                                <x-filament::input.select wire:model.live="report_type" wire:change="closeTable()">
                                    <option value="normal">COLGAAP</option>
                                    <option value="normal2">NIIF</option>
                                </x-filament::input.select>
                            </x-filament::input.wrapper>
                        </div>

                        <!-- Mostrar los campos adicionales si "Calcular" está seleccionado -->
                        <x-filament::fieldset class="mt-3">
                            <x-slot name="label">Valores requeridos para calcular</x-slot>
                            <div class="grid grid-cols-3 gap-4">
                                <div class="mt-3">
                                    <label for="">Parámetros</label>
                                    <x-filament::input.wrapper>
                                        <x-filament::input type="text" wire:model.live="parametrosd17" />
                                    </x-filament::input.wrapper>
                                </div>
                                <div class="mt-3">
                                    <label for="">SMMLV</label>
                                    <x-filament::input.wrapper>
                                        <x-filament::input type="text" wire:model.live="smmlv" />
                                    </x-filament::input.wrapper>
                                </div>
                                <div class="mt-3">
                                    <label for="">K_</label>
                                    <x-filament::input.wrapper>
                                        <x-filament::input type="text" wire:model.live="K_" />
                                    </x-filament::input.wrapper>
                                </div>
                                <div class="mt-3">
                                    <label for="">J</label>
                                    <x-filament::input.wrapper>
                                        <x-filament::input type="text" wire:model.live="j" />
                                    </x-filament::input.wrapper>
                                </div>
                                <div class="mt-3">
                                    <label for="">JS</label>
                                    <x-filament::input.wrapper>
                                        <x-filament::input type="text" wire:model.live="js" />
                                    </x-filament::input.wrapper>
                                </div>
                                <div class="mt-3">
                                    <label for="">JM</label>
                                    <x-filament::input.wrapper>
                                        <x-filament::input type="text" wire:model.live="jm" />
                                    </x-filament::input.wrapper>
                                </div>
                                <div class="mt-3">
                                    <label for="">I</label>
                                    <x-filament::input.wrapper>
                                        <x-filament::input type="text" wire:model.live="i" />
                                    </x-filament::input.wrapper>
                                </div>
                                <div class="mt-3">
                                    <label for="">TTM</label>
                                    <x-filament::input.wrapper>
                                        <x-filament::input type="text" wire:model.live="TTM" />
                                    </x-filament::input.wrapper>
                                </div>
                                <div class="mt-3">
                                    <label for="">Fecha de cálculo</label>
                                    <x-filament::input.wrapper>
                                        <x-filament::input type="date" wire:model.live="fecha_calculo2" />
                                    </x-filament::input.wrapper>
                                </div>
                            </div>
                        </x-filament::fieldset>
                    </div>
                    <!-- Botones de acción -->
                    <x-filament::button class="w-full mt-3" icon="heroicon-m-magnifying-glass"
                        wire:click="showTableFunct()">
                        Buscar/Calcular
                    </x-filament::button>

                    <x-filament::button class="w-full mt-3" wire:click="dowloadExport()">
                        Exportar a Excel
                    </x-filament::button>
                </x-filament::section>

                <!-- Tabla de resultados si se muestra -->
                @if ($showTable)
                    <livewire:studies-table :fecha="$year_calculation" :parametro="$parametrosd17" :smmlv="$smmlv" :k="$K_"
                        :j="$j" :js="$js" :jm="$jm" :i="$i" :ttm="$TTM"
                        :recalcular="$calcular" :fecha_calculo2="$fecha_calculo2" :report_type="$report_type" />
                @endif
            @elseif($calcular === 'NO')
                <!-- Mostrar solo los campos básicos -->
                <x-filament::section>
                    <x-slot name="heading">Consulta de Datos</x-slot>
                    <x-slot name="description">
                        En esta sección, podrá revisar y analizar la información previamente almacenada. Los datos
                        mostrados reflejan el estado actual sin modificaciones o cálculos adicionales.
                    </x-slot>
                    <div class="gap-4">
                        <div>
                            <label for="">Selecciona el año</label>
                            <x-filament::input.wrapper>
                                <x-filament::input.select wire:model.live="year_calculation" wire:change="closeTable()">
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

                        <div>
                            <label for="">Selecciona el tipo de reporte</label>
                            <x-filament::input.wrapper>
                                <x-filament::input.select wire:model.live="report_type" wire:change="closeTable()">
                                    <option value="normal">COLGAAP</option>
                                    <option value="normal2">NIIF</option>
                                </x-filament::input.select>
                            </x-filament::input.wrapper>
                        </div>
                    </div>

                    <x-filament::button class="w-full mt-3" icon="heroicon-m-magnifying-glass"
                        wire:click="showTableFunct()">
                        Consultar
                    </x-filament::button>

                    <x-filament::button class="w-full mt-3" wire:click="dowloadExport()">
                        Exportar a Excel
                    </x-filament::button>
                </x-filament::section>

                @if ($showTable)
                    <livewire:studies-table :fecha="$year_calculation" :parametro="$parametrosd17" :smmlv="$smmlv" :k="$K_"
                        :j="$j" :js="$js" :jm="$jm" :i="$i" :ttm="$TTM"
                        :recalcular="$calcular" :fecha_calculo2="$fecha_calculo2" :report_type="$report_type" />
                @endif
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
            <div class="mt-3">
                <label for="">Año a calcular</label>
                <x-filament::input.wrapper>
                    <x-filament::input type="text" wire:model.live="yeartoimport" />
                </x-filament::input.wrapper>
            </div>
            <div class="mt-3">
                <label for="">Tipo de reporte</label>
                <x-filament::input.wrapper>
                    <x-filament::input.select wire:model.live="report_type">
                        <option value="normal">COLGAAP</option>
                        <option value="normal2">NIIF</option>
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
