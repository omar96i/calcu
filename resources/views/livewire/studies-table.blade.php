<div>
    <div class="overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th class="px-4 py-2 border">C de C</th>
                    <th class="px-4 py-2 border">Nombre</th>
                    <th class="px-4 py-2 border">Situacion Pensionado</th>
                    <th class="px-4 py-2 border">Sexo</th>
                    <th class="px-4 py-2 border">Clase Pensión</th>
                    <th class="px-4 py-2 border">Situación Pensional</th>
                    <th class="px-4 py-2 border">Estado Civil</th>
                    <th class="px-4 py-2 border">Fecha de Nacimiento</th>
                    <th class="px-4 py-2 border">Estado causante</th>
                    <th class="px-4 py-2 border">Fech. Nacim. Cónyuge</th>
                    <th class="px-4 py-2 border">Genero cónyuge</th>
                    <th class="px-4 py-2 border">Estado cónyuge</th>
                    <th class="px-4 py-2 border">Fecha de Ingreso empresa</th>
                    <th class="px-4 py-2 border">Fecha de Retiro empresa</th>
                    <th class="px-4 py-2 border">Ingreso base cotización</th>
                    <th class="px-4 py-2 border">Valor Mesada</th>
                    <th class="px-4 py-2 border">Valor Mesada adicional pensión 85</th>
                    <th class="px-4 py-2 border">Aporte Salud</th>
                    <th class="px-4 py-2 border">Monto de la prima extralegal</th>
                    <th class="px-4 py-2 border">No. De mesadas al año</th>
                    <th class="px-4 py-2 border">No.mesadas RPM</th>
                    <th class="px-4 py-2 border">Meses a cotizar desde dic 2023</th>
                    <th class="px-4 py-2 border">Auxilio Funerario</th>
                    <th class="px-4 py-2 border">Semanas adic. Min</th>
                    <th class="px-4 py-2 border">Mesada ISS</th>
                    <th class="px-4 py-2 border">Mesada 14</th>
                    <th class="px-4 py-2 border">Auxilio Escolaridad</th>
                    <th class="px-4 py-2 border">Fecha de requisitos Pensión RPM</th>
                    <th class="px-4 py-2 border">Edad Hoy X</th>
                    <th class="px-4 py-2 border">Edad Pension X</th>
                    <th class="px-4 py-2 border">Edad Pension Rpm X</th>
                    <th class="px-4 py-2 border">Edad Pension Y</th>
                    <th class="px-4 py-2 border">Dx+n/Dx</th>
                    <th class="px-4 py-2 border">Dx+n y+n/Dxy </th>
                    <th class="px-4 py-2 border">Renta + Prima 13 Mesadas AK </th> 
                    <th class="px-4 py-2 border">Mesada 14 (AL)</th> 
                    <th class="px-4 py-2 border">Auxilio Funerario(AM)</th> 
                    <th class="px-4 py-2 border">factor x/y (AN)</th> 
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $aux)
                    <tr>
                        <td class="px-4 py-2 border">{{ $aux->cc }}</td>
                        <td class="px-4 py-2 border">{{ $aux->name }}</td>
                        <td class="px-4 py-2 border">{{ $aux->actuarial_group->name }}</td>
                        <td class="px-4 py-2 border">{{ $aux->sex }}</td>
                        <td class="px-4 py-2 border">{{ $aux->pension_class }}</td>
                        <td class="px-4 py-2 border">{{ $aux->pension_situation }}</td>
                        <td class="px-4 py-2 border">{{ $aux->civil_status }}</td>
                        <td class="px-4 py-2 border">{{ $aux->birth_date }}</td>
                        <td class="px-4 py-2 border">{{ $aux->causative_state }}</td>
                        <td class="px-4 py-2 border">{{ $aux->date_of_birth_spouse }}</td>
                        <td class="px-4 py-2 border">{{ $aux->spouse_gender }}</td>
                        <td class="px-4 py-2 border">{{ $aux->spouse_status }}</td>
                        <td class="px-4 py-2 border">{{ $aux->company_entry_date }}</td>
                        <td class="px-4 py-2 border">{{ $aux->company_withdrawal_date }}</td>
                        <td class="px-4 py-2 border">{{ $aux->base_income_contribution }}</td>
                        <td class="px-4 py-2 border">{{ $aux->allowance_value }}</td>
                        <td class="px-4 py-2 border">{{ $aux->additional_allowance_value }}</td>
                        <td class="px-4 py-2 border">{{ $aux->health_contribution }}</td>
                        <td class="px-4 py-2 border">{{ $aux->extralegal_premium_amount }}</td>
                        <td class="px-4 py-2 border">{{ $aux->number_months_year }}</td>
                        <td class="px-4 py-2 border">{{ $aux->counter_rpm }}</td>
                        <td class="px-4 py-2 border">{{ $aux->months_to_quote }}</td>
                        <td class="px-4 py-2 border">{{ $aux->funeral_aid }}</td>
                        <td class="px-4 py-2 border">{{ $aux->additional_weeks }}</td>
                        <td class="px-4 py-2 border">{{ $aux->allowance_iss }}</td>
                        <td class="px-4 py-2 border">{{ $aux->allowance_14 }}</td>
                        <td class="px-4 py-2 border">{{ $aux->school_help }}</td>
                        {{-- <td class="px-4 py-2 border">{{ $aux->date_format }}</td> --}}
                        <td class="px-4 py-2 border">{{ $this->getAD($aux->sex, $aux->pension_situation, $aux->birth_date) }}</td>
                        <td class="px-4 py-2 border">{{ $this->getAE($aux->birth_date) }}</td>
                        <td class="px-4 py-2 border">{{ $this->getAF($aux->pension_class, $aux->birth_date) }}</td>
                        <td class="px-4 py-2 border">{{ $this->getAG($aux->pension_situation, $aux->birth_date) }}</td>
                         <td class="px-4 py-2 border">{{ $this->getAH($aux->date_of_birth_spouse) }}</td>
                        <td class="px-4 py-2 border">{{ $this->getAI($aux->sex, $aux->pension_situation) }}</td>
                        {{--<td class="px-4 py-2 border">{{ $this->getAJ($aux->sex, $aux->pension_situation, $aux->allowance_iss) }}</td>
                        <td class="px-4 py-2 border">{{ $this->getAK($aux->sex, $aux->pension_situation, $aux->allowance_iss) }}</td>
                        <td class="px-4 py-2 border">{{ $this->getAL($aux->sex, $aux->pension_situation, $aux->counter_rpm, $aux->allowance_iss) }}</td>
                        <td class="px-4 py-2 border">{{ $this->getAN($aux->sex, $aux->pension_class,$aux->causative_state, $aux->counter_rpm) }}</td>
                        <td class="px-4 py-2 border">{{ $this->getAO($aux->pension_situation,$aux->allowance_iss) }}</td> --}}

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-4 flex justify-center">
        <x-filament::pagination :paginator="$data" :page-options="['all']" :current-page-option-property="'perPage'" extreme-links
            class="sm:flex sm:items-between" />
    </div>
</div>
