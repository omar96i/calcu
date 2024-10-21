<x-filament-panels::page>
    <x-filament::tabs>
        <x-filament::tabs.item wire:click="setPage('bonus-b')" :active="$page === 'bonus-b'" icon="heroicon-m-clipboard">
            Bonus B
        </x-filament::tabs.item>

        <x-filament::tabs.item icon="heroicon-m-arrow-up-tray" wire:click="openModal()">
            Importar datos
        </x-filament::tabs.item>
    </x-filament::tabs>
    @if ($page == 'bonus-b')
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            {{-- <h6 colspan="9">Bonos A</th> --}}
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr class="whitespace-nowrap text-center">
                        <th class="bg-gray-200"></th>
                        <th class="bg-gray-200">ENTIDAD</th>
                        <th class="bg-gray-200">TIPO DOC</th>
                        <th class="bg-gray-200">CEDULA</th>
                        <th class="bg-gray-200">SEXO</th>
                        <th class="bg-gray-200">APELLIDOS Y NOMBRES</th>
                        <th class="bg-gray-200">F. NACIMIENTO</th>
                        <th class="bg-gray-200">SALARIO BASE</th>
                        <th class="bg-gray-200">F. INGRESO</th>
                        <th class="bg-gray-200">F. RETIRO</th>
                        <th class="bg-gray-200">DIAS LICENCIA</th>
                        <th class="bg-gray-200">INTERINIDADES</th>
                        <th class="bg-gray-200">FECHA BASE</th>
                        <th class="bg-gray-200">FECHA CORTE</th>
                        <th class="bg-gray-200">SALARIO BASE</th>
                        <th class="bg-gray-200">EDAD FC</th>
                        <th class="bg-gray-200">Transición Tiempo</th>
                        <th class="bg-gray-200">Transición Edad</th>
                        <th class="bg-gray-200">TRANSICION SECTOR PUBLICO</th>
                        <th class="bg-gray-200">FR (1) </th>
                        <th class="bg-gray-200">FR (2) </th>
                        <th class="bg-gray-200">FECHA DE REFERENCIA SIN CONSIDERAR FC</th>
                        <th class="bg-gray-200">EDAD REFERENCIA</th>
                        <th class="bg-gray-200">Int.</th>
                        <th class="bg-gray-200">TIEMPO TOTAL </th>
                        <th class="bg-gray-200">TIEMPO TOTAL (Años)</th>
                        <th class="bg-gray-200">n (1)</th>
                        <th class="bg-gray-200">TIEMPO EMPRESA</th>
                        <th class="bg-gray-200">TIEMPO EMPRESA (Años)</th>
                        <th class="bg-gray-200">n + t</th>
                        <th class="bg-gray-200">f</th>
                        <th class="bg-gray-200">SR</th>
                        <th class="bg-gray-200">SALARIO REFERENCIA</th>
                        <th class="bg-gray-200">PENSION REFERENCIA</th>
                        <th class="bg-gray-200">VR- AUXILIO FUNERARIO</th>
                        <th class="bg-gray-200">FAC4</th>
                        <th class="bg-gray-200">FAC5</th>
                        <th class="bg-gray-200">FAC6</th>
                        <th class="bg-gray-200">VALOR BONO BASICO</th>
                        <th class="bg-gray-200">FECHA REDENCION </th>
                        <th class="bg-gray-200">Edad a FC</th>
                        <th class="bg-gray-200">Prob cobro</th>
                        <th class="bg-gray-200">VALOR BONO A LA FECHA DE CÁLCULO</th>
                        <th class="bg-gray-200">INICIO PART. EMPRESA</th>
                        <th class="bg-gray-200">FINAL PART. EMPRESA</th>
                        <th class="bg-gray-200">PARTICIPACION EMPRESA</th>
                        <th class="bg-gray-200">CUOTA PARTE EMPRESA A LA FECHA DE CORTE</th>
                        <th class="bg-gray-200">CUOTA PARTE EMPRESA A LA FECHA DE CÁLCULO</th>
                        <th class="bg-gray-200">Año redención</th>
                        <th class="bg-gray-200">Bonos Vencidos</th>


                    </tr>
                </thead>
                <tbody>
                    @foreach ($bonusB as $item)
                        <tr class="whitespace-nowrap text-center">
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->entity }}</td>
                            <td>{{ $item->id_type }}</td>
                            <td>{{ $item->id_number }}</td>
                            <td>{{ $item->gender }}</td>
                            <td>{{ $item->full_name }}</td>
                            <td>{{ $item->birthdate }}</td>
                            <td>{{ $item->base_salary }}</td>
                            <td>{{ $item->entry_date }}</td>
                            <td>{{ $item->out_date }}</td>
                            <td>{{ $item->days_leaves }}</td>
                            <td>{{ $item->interims }}</td>
                            @if (!is_null($item->user_id))
                                <td>{{ $item->bonus_b_m }} </td>
                                <td>{{ $item->bonus_b_n }} </td>
                                <td>{{ $item->bonus_b_o }} </td>
                                <td>{{ $item->bonus_b_p }} </td>
                                <td>{{ $item->bonus_b_q }} </td>
                                <td>{{ $item->bonus_b_r }} </td>
                                <td>{{ $item->bonus_b_s }} </td>
                                <td>{{ $item->bonus_b_t }} </td>
                                <td>{{ $item->bonus_b_v }} </td>
                                <td>{{ $item->bonus_b_w }} </td>
                                <td>{{ $item->bonus_b_x }} </td>
                                <td>{{ $item->bonus_b_y }} </td>
                                <td>{{ $item->bonus_b_z }} </td>
                                <td>{{ $item->bonus_b_aa }} </td>
                                <td>{{ $item->bonus_b_ab }} </td>
                                <td>{{ $item->bonus_b_ac }} </td>
                                <td>{{ $item->bonus_b_ad }} </td>
                                <td>{{ $item->bonus_b_af }} </td>
                                <td>{{ $item->bonus_b_ag }} </td>
                                <td>{{ $item->bonus_b_ah }} </td>
                                <td>{{ $item->bonus_b_ai }} </td>
                                <td>{{ $item->bonus_b_aj }} </td>
                                <td>{{ $item->bonus_b_ak }} </td>
                                <td>{{ $item->bonus_b_al }} </td>
                                <td>{{ $item->bonus_b_am }} </td>
                                <td>{{ $item->bonus_b_an }} </td>
                                <td>{{ $item->bonus_b_ao }} </td>
                                <td>{{ $item->bonus_b_ap }} </td>
                                <td>{{ $item->bonus_b_aq }} </td>
                                <td>{{ $item->bonus_b_ar }} </td>
                                <td>{{ $item->bonus_b_as }} </td>
                                <td>{{ $item->bonus_b_at }} </td>
                                <td>{{ $item->bonus_b_av }} </td>
                                <td>{{ $item->bonus_b_aw }} </td>
                                <td>{{ $item->bonus_b_ax }} </td>
                            @else
                                <td>
                                    {{ $this->getFB($item->entry_date, $item->out_date) }}

                                </td>

                                <td>
                                    {{ $this->getFC($item->entity) }}
                                </td>
                                <td>
                                    {{ $this->getSB($item->base_salary) }}
                                </td>
                                <td>
                                    {{ $this->getEFC($item->birthdate) }}
                                </td>
                                <td>
                                    {{ $this->getTT($item->entry_date) }}
                                </td>
                                <td>
                                    {{ $this->getTE($item->gender, $item->birthdate) }}
                                </td>
                                <td>
                                    {{ $this->getTSP() }}
                                </td>
                                <td>
                                    {{ $this->getFR1($item->gender, $item->birthdate) }}
                                </td>
                                <td>
                                    {{ $this->getFR2($item->birthdate, $item->entry_date, $item->out_date, $item->days_leaves, $item->interims) }}
                                </td>
                                <td>
                                    {{ $this->getFRSFC() }}
                                </td>
                                <td>
                                    {{ $this->getER($item->birthdate) }}
                                </td>
                                <td>
                                    {{ $this->getInt() }}
                                </td>
                                <td>
                                    {{ $this->getTimeTotal($item->entry_date, $item->days_leaves, $item->interims) }}
                                </td>
                                <td>
                                    {{ $this->getTimeTotalYears() }}
                                </td>
                                <td>
                                    {{ $this->getN1() }}
                                </td>
                                <td>
                                    {{ $this->getTCompany($item->entry_date, $item->out_date, $item->days_leaves, $item->interims) }}
                                </td>
                                <td>
                                    {{ $this->getTCompanyYears() }}
                                </td>
                                <td>
                                    {{ $this->getNT() }}
                                </td>
                                <td>
                                    {{ $this->getF() }}
                                </td>
                                <!-- Aqui son datos genericos -->
                                <td>
                                    {{ $this->getAF() }}
                                </td>
                                <td>
                                    {{ $this->getAG() }}
                                </td>
                                <td>
                                    {{ $this->getAH() }}
                                </td>
                                <td>
                                    {{ $this->getAI() }}
                                </td>
                                <td>
                                    {{ $this->getAJ($item->gender) }}
                                </td>
                                <td>
                                    {{ $this->getAK($item->gender) }}
                                </td>
                                <td>
                                    {{ $this->getAL() }}
                                </td>
                                <td>
                                    {{ $this->getAM() }}
                                </td>
                                <td>
                                    {{ $this->getAN($item->birthdate) }}
                                </td>
                                <td>
                                    {{ $this->getAO($item->birthdate) }}
                                </td>
                                <td>
                                    {{ $this->getAP($item->gender) }}
                                </td>
                                <td>
                                    {{ $this->getAQ() }}
                                </td>
                                <td>
                                    {{ $this->getAR($item->entry_date) }}
                                </td>
                                <td>
                                    {{ $this->getAS($item->out_date) }}
                                </td>
                                <td>
                                    {{ $this->getAT($item->days_leaves) }}
                                </td>
                                <td>
                                    {{ $this->getAU() }}
                                </td>
                                <td>
                                    {{ $this->getAV() }}
                                </td>
                                <td>
                                    {{ $this->getAW() }}
                                </td>
                                <td>
                                    {{ $this->getAX() }}
                                </td>
                                @php
                                    $this->updateState($item->id);
                                @endphp
                            @endif
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
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
