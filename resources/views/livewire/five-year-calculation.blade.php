<div>
    <div class="overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th class="px-4 py-2 border">Identificación</th>
                    <th class="px-4 py-2 border">Apellidos y Nombres</th>
                    <th class="px-4 py-2 border">Fecha de Nacimiento</th>
                    <th class="px-4 py-2 border">Sexo</th>
                    <th class="px-4 py-2 border">SALARIO BASICO 2023</th>
                    <th class="px-4 py-2 border">Fecha Nombramiento</th>
                    <th class="px-4 py-2 border">Licencias</th>
                    <th class="px-4 py-2 border">5 AÑOS</th>
                    <th class="px-4 py-2 border">10 AÑOS</th>
                    <th class="px-4 py-2 border">15 AÑOS</th>
                    <th class="px-4 py-2 border">COMENTARIO</th>
                    <th class="px-4 py-2 border">Tiempo trabajado a FC (días)</th>
                    <th class="px-4 py-2 border">Tiempo trabajado a FC (años)</th>
                    <th class="px-4 py-2 border">Edad a FC</th>
                    <th class="px-4 py-2 border">Fecha de requisitos</th>
                    <th class="px-4 py-2 border">Edad de retiro</th>
                    <th class="px-4 py-2 border">No. Quinquenio</th>
                    <th class="px-4 py-2 border">Total días trabajados</th>
                    <th class="px-4 py-2 border">Total Años trabajados</th>
                    <th class="px-4 py-2 border">Fecha último quinquenio</th>
                    <th class="px-4 py-2 border">Año retiro</th>
                    <th class="px-4 py-2 border">Total a cargo empresa a FC</th>
                    <th class="px-4 py-2 border">n_1</th>
                    <th class="px-4 py-2 border">Valor Quinquienio 1</th>
                    <th class="px-4 py-2 border">n_2</th>
                    <th class="px-4 py-2 border">Valor Quinquienio 2</th>
                    <th class="px-4 py-2 border">n_3</th>
                    <th class="px-4 py-2 border">Valor Quinquienio 3</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $aux)
                    @php
                        $auxW = $this->getW($aux->{'5_year'});
                        $auxY = $this->getY($aux->{'10_year'});
                        $auxAA = $this->getAA($aux->{'15_year'});

                    @endphp
                    <tr>
                        <td class="px-4 py-2 border">{{ $aux->cc }}</td>
                        <td class="px-4 py-2 border">{{ $aux->full_name }}</td>
                        <td class="px-4 py-2 border">{{ $aux->birth_date }}</td>
                        <td class="px-4 py-2 border">{{ $aux->sex }}</td>
                        <td class="px-4 py-2 border">{{ $aux->basic_salary }}</td>
                        <td class="px-4 py-2 border">{{ $aux->named_date }}</td>
                        <td class="px-4 py-2 border">{{ $aux->licence }}</td>
                        <td class="px-4 py-2 border">{{ $aux->{'5_year'} }}</td>
                        <td class="px-4 py-2 border">{{ $aux->{'10_year'} }}</td>
                        <td class="px-4 py-2 border">{{ $aux->{'15_year'} }}</td>
                        <td class="px-4 py-2 border">{{ $aux->coment }}</td>
                        <td class="px-4 py-2 border">{{ $this->getL($aux->named_date, $aux->licence) }}</td>
                        <td class="px-4 py-2 border">{{ $this->getM() }}</td>
                        <td class="px-4 py-2 border">{{ $this->getN($aux->birth_date) }}</td>
                        <td class="px-4 py-2 border">{{ $this->getO($aux->birth_date, $aux->{'15_year'}) }}</td>
                        <td class="px-4 py-2 border">{{ $this->getP($aux->birth_date) }}</td>
                        <td class="px-4 py-2 border">{{ $this->getQ() }}</td>
                        <td class="px-4 py-2 border">{{ $this->getR($aux->named_date) }}</td>
                        <td class="px-4 py-2 border">{{ $this->getS() }}</td>
                        <td class="px-4 py-2 border">{{ $this->getT($aux->named_date) }}</td>
                        <td class="px-4 py-2 border">{{ $this->getU() }}</td>
                        @php
                            $auxX = $this->getX($aux->sex, $aux->basic_salary, $aux->{'5_year'});
                            $auxZ = $this->getZ($aux->sex, $aux->basic_salary, $aux->{'10_year'});
                            $auxAB = $this->getAB($aux->sex, $aux->basic_salary, $aux->{'15_year'});
                        @endphp
                        <td class="px-4 py-2 border">{{ $this->getV() }}</td>
                        <td class="px-4 py-2 border">{{ $auxW }}</td>
                        <td class="px-4 py-2 border">{{ $auxX }}</td>
                        <td class="px-4 py-2 border">{{ $auxY }}</td>
                        <td class="px-4 py-2 border">{{ $auxZ }}</td>
                        <td class="px-4 py-2 border">{{ $auxAA }}</td>
                        <td class="px-4 py-2 border">{{ $auxAB }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-4 flex justify-center">
        <x-filament::pagination
            :paginator="$data"
            :page-options="[5, 10, 20, 50, 100, 'all']"
            :current-page-option-property="'perPage'"
            extreme-links
            class="sm:flex sm:items-between"
        />
    </div>
</div>
