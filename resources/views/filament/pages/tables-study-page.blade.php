<x-filament-panels::page>
    {{-- <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <th scope="col" class="px-6 py-3" >Situacion del pensionado</th>
                <th scope="col" class="px-6 py-3" >CC</th>
                <th scope="col" class="px-6 py-3" >Nombre</th>
                <th scope="col" class="px-6 py-3" >Sexo</th>
                <th scope="col" class="px-6 py-3" >Estado civil</th>
                <th scope="col" class="px-6 py-3" >fecha nacimiento</th>
                <th scope="col" class="px-6 py-3" >Estado causante</th>
                <th scope="col" class="px-6 py-3" >fecha nacimiento conyuge</th>
                <th scope="col" class="px-6 py-3" >genero conyuge</th>
                <th scope="col" class="px-6 py-3" >estado conyuge</th>
                <th scope="col" class="px-6 py-3" >fecha ingreso a empresa</th>
                <th scope="col" class="px-6 py-3" >fecha de retiro empresa</th>
                <th scope="col" class="px-6 py-3" >ingreso base cotizacion</th>
                <th scope="col" class="px-6 py-3" >valor mesada</th>
                <th scope="col" class="px-6 py-3" >mesada 14</th>
                <th scope="col" class="px-6 py-3" >Clase pension</th>
                <th scope="col" class="px-6 py-3" >situacion pensional</th>

                <th scope="col" class="px-6 py-3" >Fecha de requisitos Pensión RPM</th>
                <th scope="col" class="px-6 py-3" >Edad hoy</th>
                <th scope="col" class="px-6 py-3" >Edad pension empresa</th>
                <th scope="col" class="px-6 py-3" >Edad pensión RPM x</th>
                <th scope="col" class="px-6 py-3" >Edad hoy y</th>
                <th scope="col" class="px-6 py-3" >Dx+n/Dx RPM</th>
                <th scope="col" class="px-6 py-3" >Dx+n y+n/Dxy RPM</th>

            </thead>
            <tbody>
                @foreach ($company->company_estudies as $study)
                <tr>
                    <td>{{ $study->actuarial_group->name }}</td>
                    <td>{{ $study->cc }}</td>
                    <td>{{ $study->full_name }}</td>
                    <td>{{ $study->sex }}</td>
                    <td>{{ $study->civil_status }}</td>
                    <td>{{ $study->birth_date }}</td>
                    <td>{{ $study->causing_state }}</td>
                    <td>{{ $study->date_of_birth_spouse }}</td>
                    <td>{{ $study->spouse_gender }}</td>
                    <td>{{ $study->spouse_status }}</td>
                    <td>{{ $study->company_entry_date }}</td>
                    <td>{{ $study->company_withdrawal_date }}</td>
                    <td>{{ $study->income_base_quotation }}</td>
                    <td>{{ $study->allowance_value }}</td>
                    <td>{{ $study->allowance_14 }}</td>
                    <td>{{ $study->pension_class }}</td>
                    <td>{{ $study->pension_situation }}</td>
                    @php
                        $pensionSituation = intval($study->pension_situation);
                        $sex = intval($study->sex);
                        $birthDate = $study->birth_date;
                        $pensionClass = $study->pension_class;
                        $fechaCalculo = "2023-12-31"; // Fecha de cálculo
                        $diasAnio = 365.25;
                        $dateOfBirthSpouse = $study->date_of_birth_spouse;
                    @endphp
                    <!-- Fecha de requisitos Pensión RPM -->
                    @if ($pensionSituation == 3)
                        @php
                            $yearsToAdd = ($sex == 1) ? 62 : 57;
                            $resultDate = date('Y-m-d', strtotime("+$yearsToAdd years", strtotime($birthDate)));
                            $dateAd =  $resultDate;
                        @endphp
                        <td>{{ $resultDate }}</td>
                    @else
                        @php
                            $dateAd =  0;
                        @endphp
                        <td>{{ $resultDate }}</td>
                    @endif
                    <!-- Edad hoy -->
                    @if ($birthDate > 0)
                        @php
                            $fechaNacimiento = new DateTime($birthDate);
                            $fechaActual = new DateTime($fechaCalculo);
                            $diferencia = $fechaNacimiento->diff($fechaActual);

                            // Calculamos la edad
                            $edad = $diferencia->y;

                            // Si ya pasó medio año desde el cumpleaños, sumamos uno
                            if ($fechaActual >= $fechaNacimiento->modify('+' . $edad . ' years')) {
                                $edad++;
                            }

                            $resultado = ($edad < 15) ? 15 : $edad;
                            $resultEH = $resultado;
                        @endphp

                        <td>{{ $resultado }}</td>
                    @else
                        @php
                            $resultEH = 0;
                        @endphp
                        <td>{{ 0 }}</td>
                    @endif
                    <!-- Edad pension empresa -->
                    @if ($pensionClass == 6)
                        @php
                            $fechaNacimiento = new DateTime($birthDate);
                            $fechaActual = new DateTime($fechaCalculo);

                            // Calculamos la diferencia en años
                            $diferencia = $fechaNacimiento->diff($fechaActual);
                            $edadAnios = $diferencia->y;

                            $resultado = $edadAnios;
                            $resultEPE = $resultado;
                        @endphp
                        <td>{{ $resultado }}</td>
                    @else
                        @php
                            $resultEPE = 0
                        @endphp
                        <td>{{ 0 }}</td>
                    @endif
                    <!-- Edad pensión RPM x -->
                    @if ($pensionSituation == 3)
                        @php
                            $fechaJubilacion = new DateTime($dateAd);
                            $fechaNacimiento = new DateTime($birthDate);

                            // Calculamos la diferencia en años
                            $diferencia = $fechaJubilacion->diff($fechaNacimiento);
                            $edadAnios = floor($diferencia->days / $diasAnio);

                            $resultado = $edadAnios;
                            $resultEPRX = $resultado;
                        @endphp
                        <td>{{ $resultado }}</td>
                    @else
                        @php
                            $resultEPRX = 0;
                        @endphp
                        {{ 0 }}
                    @endif
                    <!-- Edad hoy Y -->
                    @if ($dateOfBirthSpouse > 0)
                        @php
                            $fechaNacimientoSpouse = new DateTime($dateOfBirthSpouse);
                            $fechaActual = new DateTime($fechaCalculo);

                            // Calculamos la diferencia en años
                            $diferencia = $fechaNacimientoSpouse->diff($fechaActual);
                            $edadAnios = floor($diferencia->days / $diasAnio);

                            $resultado = $edadAnios;
                            $resultEHY = $resultado;
                        @endphp
                        <td>{{ $resultado }}</td>
                    @else
                        @php
                            $resultEHY = 0;
                        @endphp
                        <td>{{ 0 }}</td>
                    @endif
                    <!-- Dx+n/Dx RPM -->
                    @if ($pensionSituation == 3)
                        @if ($resultEPRX > 0)
                            <td>{{ $this->calculateValueColumnAI($sex,$resultEH,$resultEPRX) }}</td>
                        @else
                            <td>{{ 0 }}</td>
                        @endif
                    @else
                        <td>{{ 0 }}</td>
                    @endif
                </tr>

                @endforeach
            </tbody>
        </table>
    </div> --}}
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <th scope="col" class="px-6 py-3" >C de C</th>
                <th scope="col" class="px-6 py-3" >NOMBRE</th>
                <th scope="col" class="px-6 py-3" >SITUACION PENSIONADO</th>
                <th scope="col" class="px-6 py-3" >Sexo</th>
                <th scope="col" class="px-6 py-3" >'Clase Pensión</th>
                <th scope="col" class="px-6 py-3" >'Situación Pensional</th>
                <th scope="col" class="px-6 py-3" >'Estado Civil</th>
                <th scope="col" class="px-6 py-3" >'Fecha de Nacimiento</th>
                <th scope="col" class="px-6 py-3" >'Estado causante</th>
                <th scope="col" class="px-6 py-3" >'Fech. Nacim. Cónyuge</th>
                <th scope="col" class="px-6 py-3" >'Genero cónyuge</th>
                <th scope="col" class="px-6 py-3" >'Estado cónyuge</th>
                <th scope="col" class="px-6 py-3" >'Fecha de Ingreso empresa</th>
                <th scope="col" class="px-6 py-3" >'Fecha de Retiro empresa</th>
                <th scope="col" class="px-6 py-3" >'Ingreso base cotización</th>
                <th scope="col" class="px-6 py-3" >'Valor  Mesada</th>
                <th scope="col" class="px-6 py-3" >'Valor Mesada adicional pensión 85</th>
                <th scope="col" class="px-6 py-3" >'Aporte Salud</th>
                <th scope="col" class="px-6 py-3" >'Monto de la prima extralegal</th>
                <th scope="col" class="px-6 py-3" >'No. De mesadas al año</th>
                <th scope="col" class="px-6 py-3" >No.mesadas RPM</th>
                <th scope="col" class="px-6 py-3" >Meses a cotizar desde dic 2023</th>
                <th scope="col" class="px-6 py-3" >Auxilio Funerario </th>
                <th scope="col" class="px-6 py-3" >Semanas adic. Min</th>
                <th scope="col" class="px-6 py-3" >Mesada ISS</th>
                <th scope="col" class="px-6 py-3" >Mesada 14 </th>
                <th scope="col" class="px-6 py-3" >Auxilio Escolaridad</th>
                <th scope="col" class="px-6 py-3" >Fecha de requisitos Pensión RPM</th>
                <th scope="col" class="px-6 py-3" >Edad Hoy x</th>
                <th scope="col" class="px-6 py-3" >Edad pensión empresa x</th>
                <th scope="col" class="px-6 py-3" >Edad pensión RPM x</th>
                <th scope="col" class="px-6 py-3" >Edad Hoy y</th>
                <th scope="col" class="px-6 py-3" >Dx+n/Dx RPM</th>
                <th scope="col" class="px-6 py-3" >Dx+n y+n/Dxy RPM</th>
                <th scope="col" class="px-6 py-3" >Renta + Prima 13 Mesadas</th>
                <th scope="col" class="px-6 py-3" >Mesada 14</th>
                <th scope="col" class="px-6 py-3" >Auxilio Funerario</th>
                <th scope="col" class="px-6 py-3" >factor x/y</th>
                <th scope="col" class="px-6 py-3" >Renta + Prima 13 Mesadas</th>
                <th scope="col" class="px-6 py-3" >factor x/y mesada 14</th>
                <th scope="col" class="px-6 py-3" >Mesada 14</th>
                <th scope="col" class="px-6 py-3" >Renta + Primas</th>
                <th scope="col" class="px-6 py-3" >Rentas RPM Mesada 14</th>
                <th scope="col" class="px-6 py-3" >Auxilio Funerario</th>
                <th scope="col" class="px-6 py-3" >Inició pensión empresa</th>
                <th scope="col" class="px-6 py-3" >Final pensión empresa</th>
                <th scope="col" class="px-6 py-3" >n=15-x</th>
                <th scope="col" class="px-6 py-3" >S12:jm+S2:js</th>
                <th scope="col" class="px-6 py-3" >an:i</th>
                <th scope="col" class="px-6 py-3" >25-xEx</th>
                <th scope="col" class="px-6 py-3" >Dx+n/Dx Empresa</th>
                <th scope="col" class="px-6 py-3" >Reserva Renta + Primas</th>
                <th scope="col" class="px-6 py-3" >Mesada 14 pago junio</th>
                <th scope="col" class="px-6 py-3" >Reserva Monto de la prima extralegal</th>
                <th scope="col" class="px-6 py-3" >Reserva incremento Salud</th>
                <th scope="col" class="px-6 py-3" >Auxilio  Funerario</th>
                <th scope="col" class="px-6 py-3" >Reserva Auxlio Escolaridad</th>
                <th scope="col" class="px-6 py-3" >factor x/y</th>
                <th scope="col" class="px-6 py-3" >Renta + Primas</th>
                <th scope="col" class="px-6 py-3" >factor x/y mesada 14</th>
                <th scope="col" class="px-6 py-3" > mesada 14  pago Junio</th>
                <th scope="col" class="px-6 py-3" >Sobrevivencia Monto de la prima extralegal</th>
                <th scope="col" class="px-6 py-3" >sobrevivencia incremento salud</th>
                <th scope="col" class="px-6 py-3" >Reserva Auxlio Escolaridad</th>
                <th scope="col" class="px-6 py-3" >Reserva Empresa a  31 dic / 2023</th>
                <th scope="col" class="px-6 py-3" >Renta + Primas</th>
                <th scope="col" class="px-6 py-3" >Mesada 14</th>
                <th scope="col" class="px-6 py-3" >Reserva de la prima extralegal</th>
                <th scope="col" class="px-6 py-3" >Auxilio Funerario</th>
                <th scope="col" class="px-6 py-3" >Reserva Auxlio Escolaridad</th>
                <th scope="col" class="px-6 py-3" >Reserva Empresa</th>
                <th scope="col" class="px-6 py-3" >Causante</th>
                <th scope="col" class="px-6 py-3" >Sobreviviente</th>
                <th scope="col" class="px-6 py-3" >Auxilio Funerario</th>
                <th scope="col" class="px-6 py-3" >Reserva Empresa a  31/dic 2023</th>
            </thead>
            <tbody>
                @foreach ($company as $item)
                <tr>
                    <td>{{ $item->col1 }}</td>
                    <td>{{ $item->col2 }}</td>
                    <td>{{ $item->col3 }}</td>
                    <td>{{ $item->col4 }}</td>
                    <td>{{ $item->col5 }}</td>
                    <td>{{ $item->col6 }}</td>
                    <td>{{ $item->col7 }}</td>
                    <td>{{ $item->col8 }}</td>
                    <td>{{ $item->col9 }}</td>
                    <td>{{ $item->col10 }}</td>
                    <td>{{ $item->col11 }}</td>
                    <td>{{ $item->col12 }}</td>
                    <td>{{ $item->col13 }}</td>
                    <td>{{ $item->col14 }}</td>
                    <td>{{ $item->col15 }}</td>
                    <td>{{ $item->col16 }}</td>
                    <td>{{ $item->col17 }}</td>
                    <td>{{ $item->col18 }}</td>
                    <td>{{ $item->col19 }}</td>
                    <td>{{ $item->col20 }}</td>
                    <td>{{ $item->col21 }}</td>
                    <td>{{ $item->col22 }}</td>
                    <td>{{ $item->col23 }}</td>
                    <td>{{ $item->col24 }}</td>
                    <td>{{ $item->col25 }}</td>
                    <td>{{ $item->col26 }}</td>
                    <td>{{ $item->col27 }}</td>
                    <td>{{ $item->col28 }}</td>
                    <td>{{ $item->col29 }}</td>
                    <td>{{ $item->col30 }}</td>
                    <td>{{ $item->col31 }}</td>
                    <td>{{ $item->col32 }}</td>
                    <td>{{ $item->col33 }}</td>
                    <td>{{ $item->col34 }}</td>
                    <td>{{ $item->col35 }}</td>
                    <td>{{ $item->col36 }}</td>
                    <td>{{ $item->col37 }}</td>
                    <td>{{ $item->col38 }}</td>
                    <td>{{ $item->col39 }}</td>
                    <td>{{ $item->col40 }}</td>
                    <td>{{ $item->col41 }}</td>
                    <td>{{ $item->col42 }}</td>
                    <td>{{ $item->col43 }}</td>
                    <td>{{ $item->col44 }}</td>
                    <td>{{ $item->col45 }}</td>
                    <td>{{ $item->col46 }}</td>
                    <td>{{ $item->col47 }}</td>
                    <td>{{ $item->col48 }}</td>
                    <td>{{ $item->col49 }}</td>
                    <td>{{ $item->col50 }}</td>
                    <td>{{ $item->col51 }}</td>
                    <td>{{ $item->col52 }}</td>
                    <td>{{ $item->col53 }}</td>
                    <td>{{ $item->col54 }}</td>
                    <td>{{ $item->col55 }}</td>
                    <td>{{ $item->col56 }}</td>
                    <td>{{ $item->col57 }}</td>
                    <td>{{ $item->col58 }}</td>
                    <td>{{ $item->col59 }}</td>
                    <td>{{ $item->col60 }}</td>
                    <td>{{ $item->col61 }}</td>
                    <td>{{ $item->col62 }}</td>
                    <td>{{ $item->col63 }}</td>
                    <td>{{ $item->col64 }}</td>
                    <td>{{ $item->col65 }}</td>
                    <td>{{ $item->col66 }}</td>
                    <td>{{ $item->col67 }}</td>
                    <td>{{ $item->col68 }}</td>
                    <td>{{ $item->col69 }}</td>
                    <td>{{ $item->col70 }}</td>
                    <td>{{ $item->col71 }}</td>
                    <td>{{ $item->col72 }}</td>
                    <td>{{ $item->col73 }}</td>
                    <td>{{ $item->col74 }}</td>
                    <td>{{ $item->col75 }}</td>
                </tr>

                @endforeach

            </tbody>
        </table>
    </div>
</x-filament-panels::page>
