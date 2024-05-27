<div>
    <div class="overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th class="px-4 py-2 border">Estado</th>
                    <th class="px-4 py-2 border">TIPO DOCUM.</th>
                    <th class="px-4 py-2 border">No. DOCUMENTO</th>
                    <th class="px-4 py-2 border">APELLIDOS Y NOMBRES</th>
                    <th class="px-4 py-2 border">FECHA DE NACIMIENTO (DD/MM/AAAA)</th>
                    <th class="px-4 py-2 border">SEXO</th>
                    <th class="px-4 py-2 border">SALARIO BASE</th>
                    <th class="px-4 py-2 border">FECHA DE CORTE (DD/MM/AAAA)</th>
                    <th class="px-4 py-2 border">FECHA VINCULACION</th>
                    <th class="px-4 py-2 border">TIEMPO COTIZADO (Semanas al 30/06/95)</th>
                    <th class="px-4 py-2 border">DESDE (DD/MM/AAAA)</th>
                    <th class="px-4 py-2 border">HASTA (DD/MM/AAAA)</th>
                    <th class="px-4 py-2 border">DNR</th>
                    <th class="px-4 py-2 border">EDAD</th>
                    <th class="px-4 py-2 border">F. Pension</th>
                    <th class="px-4 py-2 border">Semanas a F. Pension</th>
                    <th class="px-4 py-2 border">Semanas minimas</th>
                    <th class="px-4 py-2 border">Tiempo adicional para Edad de Referencia</th>
                    <th class="px-4 py-2 border">Edad de Referencia 1</th>
                    <th class="px-4 py-2 border">Edad de Referencia</th>
                    <th class="px-4 py-2 border">Salario Medio Nacional (FB)</th>
                    <th class="px-4 py-2 border">Salario medio Nacional (Edad de Referencia)</th>
                    <th class="px-4 py-2 border">Salario de Referencia</th>
                    <th class="px-4 py-2 border">n</th>
                    <th class="px-4 py-2 border">t</th>
                    <th class="px-4 py-2 border">tc</th>
                    <th class="px-4 py-2 border">n + t</th>
                    <th class="px-4 py-2 border">Semanas</th>
                    <th class="px-4 py-2 border">% PR</th>
                    <th class="px-4 py-2 border">PR</th>
                    <th class="px-4 py-2 border">FAC1</th>
                    <th class="px-4 py-2 border">AF</th>
                    <th class="px-4 py-2 border">FAC2</th>
                    <th class="px-4 py-2 border">FAC3</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $aux)
                    <tr>
                        <td class="px-4 py-2 border">{{ $aux->status }}</td>
                        <td class="px-4 py-2 border">{{ $aux->type_cc }}</td>
                        <td class="px-4 py-2 border">{{ $aux->cc }}</td>
                        <td class="px-4 py-2 border">{{ $aux->full_name }}</td>
                        <td class="px-4 py-2 border">{{ $aux->date_birth }}</td>
                        <td class="px-4 py-2 border">{{ $aux->sex }}</td>
                        <td class="px-4 py-2 border">{{ $aux->salary }}</td>
                        <td class="px-4 py-2 border">{{ $aux->date_court }}</td>
                        <td class="px-4 py-2 border">{{ $aux->date_link }}</td>
                        <td class="px-4 py-2 border">{{ $aux->quoted_time }}</td>
                        <td class="px-4 py-2 border">{{ $aux->at }}</td>
                        <td class="px-4 py-2 border">{{ $aux->to }}</td>
                        <td class="px-4 py-2 border">{{ $aux->dnr }}</td>
                        <td class="px-4 py-2 border">{{ $this->getO($aux->date_birth, $aux->date_court) }}</td>
                        <td class="px-4 py-2 border">{{ $this->getP($aux->date_birth, $aux->sex, $aux->to) }}</td>
                        @php
                            $auxZ = $this->getZ($aux->at, $aux->to, $aux->dnr);
                        @endphp
                        <td class="px-4 py-2 border">{{ $this->getQ($aux->quoted_time, $aux->to) }}</td>
                        <td class="px-4 py-2 border">{{ $this->getR() }}</td>
                        <td class="px-4 py-2 border">{{ $this->getS() }}</td>
                        <td class="px-4 py-2 border">{{ $this->getT($aux->date_birth, $aux->sex) }}</td>
                        <td class="px-4 py-2 border">{{ $this->getU() }}</td>
                        <td class="px-4 py-2 border">{{ $this->getV() }}</td>
                        <td class="px-4 py-2 border">{{ $this->getW() }}</td>
                        <td class="px-4 py-2 border">{{ $this->getX($aux->salary) }}</td>
                        <td class="px-4 py-2 border">{{ $this->getY() }}</td>
                        <td class="px-4 py-2 border">{{ $auxZ }}</td>
                        <td class="px-4 py-2 border">{{ $this->getAA($aux->quoted_time) }}</td>
                        <td class="px-4 py-2 border">{{ $this->getAB() }}</td>
                        <td class="px-4 py-2 border">{{ $this->getAC() }}</td>
                        <td class="px-4 py-2 border">{{ $this->getAD() }}</td>
                        <td class="px-4 py-2 border">{{ $this->getAE($aux->to) }}</td>
                        <td class="px-4 py-2 border">{{ $this->getAF($aux->sex) }}</td>
                        <td class="px-4 py-2 border">{{ $this->getAG($aux->to) }}</td>
                        <td class="px-4 py-2 border">{{ $this->getAH($aux->sex) }}</td>
                        <td class="px-4 py-2 border">{{ $this->getAI() }}</td>
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
