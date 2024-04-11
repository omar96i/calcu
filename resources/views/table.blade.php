<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>
</head>
<body>
    {{-- <table style="width: 100%">
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
                <td>{{ number_format(intval($item->col16)) }}</td>
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
                <td>{{ number_format(intval($item->col33)) }}</td>
                <td>{{ number_format(intval($item->col34)) }}</td>
                <td>{{ number_format(intval($item->col35)) }}</td>
                <td>{{ number_format(intval($item->col36)) }}</td>
                <td>{{ number_format(intval($item->col37)) }}</td>
                <td>{{ number_format(intval($item->col38)) }}</td>
                <td>{{ number_format(intval($item->col39)) }}</td>
                <td>{{ number_format(intval($item->col40)) }}</td>
                <td>{{ number_format(intval($item->col41)) }}</td>
                <td>{{ number_format(intval($item->col42)) }}</td>
                <td>{{ number_format(intval($item->col43)) }}</td>
                <td>{{ number_format(intval($item->col44)) }}</td>
                <td>{{ $item->col45 }}</td>
                <td>{{ $item->col46 }}</td>
                <td>{{ number_format(intval($item->col47)) }}</td>
                <td>{{ number_format(intval($item->col48)) }}</td>
                <td>{{ number_format(intval($item->col49)) }}</td>
                <td>{{ number_format(intval($item->col50)) }}</td>
                <td>{{ number_format(intval($item->col51)) }}</td>
                <td>{{ number_format(intval($item->col52)) }}</td>
                <td>{{ number_format(intval($item->col53)) }}</td>
                <td>{{ number_format(intval($item->col54)) }}</td>
                <td>{{ number_format(intval($item->col55)) }}</td>
                <td>{{ number_format(intval($item->col56)) }}</td>
                <td>{{ number_format(intval($item->col57)) }}</td>
                <td>{{ number_format(intval($item->col58)) }}</td>
                <td>{{ number_format(intval($item->col59)) }}</td>
                <td>{{ number_format(intval($item->col60)) }}</td>
                <td>{{ number_format(intval($item->col61)) }}</td>
                <td>{{ number_format(intval($item->col62)) }}</td>
                <td>{{ number_format(intval($item->col63)) }}</td>
                <td>{{ number_format(intval($item->col64)) }}</td>
                <td>{{ number_format(intval($item->col65)) }}</td>
                <td>{{ number_format(intval($item->col66)) }}</td>
                <td>{{ number_format(intval($item->col67)) }}</td>
                <td>{{ number_format(intval($item->col68)) }}</td>
                <td>{{ number_format(intval($item->col69)) }}</td>
                <td>{{ number_format(intval($item->col70)) }}</td>
                <td>{{ number_format(intval($item->col71)) }}</td>
                <td>{{ number_format(intval($item->col72)) }}</td>
                <td>{{ number_format(intval($item->col73)) }}</td>
                <td>{{ number_format(intval($item->col74)) }}</td>
                <td>{{ number_format(intval($item->col75)) }}</td>
            </tr>

            @endforeach

        </tbody>
    </table> --}}

    <table style="width: 100%">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <th scope="col" class="px-6 py-3" >Grupos pensionales</th>
            <th scope="col" class="px-6 py-3" >No. personas</th>
            <th scope="col" class="px-6 py-3" >Reserva Causante</th>
            <th scope="col" class="px-6 py-3" >Reserva Sobreviviente</th>
            <th scope="col" class="px-6 py-3" >Reserva Aux. Fun.</th>
            <th scope="col" class="px-6 py-3" >Suma de Reserva Empresa a  31/dic 20233</th>
            <th scope="col" class="px-6 py-3" >Cotizaciones</th>
            <th scope="col" class="px-6 py-3" >Suma de Reserva + cotizaciones a dic. De 2023</th>
        </thead>
        <tbody>
            <tr>
                <td>PERSONAL JUBILADO TOTALMENTE POR LA EMPRESA</td>
                <td>1</td>
                <td>$ 93.810.734</td>
                <td>$ 31.500.026</td>
                <td>$ 2.310.908</td>
                <td>$ 127.621.668</td>
                <td>$ 0</td>
                <td>$ 127.621.668</td>
            </tr>

            <tr>
                <td>PERSONAL JUBILADO POR LA EMPRESA Y EN EXPECTATIVA DE COLPENSIONES</td>
                <td>20</td>
                <td>$ 4.965.991.841</td>
                <td>$ 2.018.489.603</td>
                <td>$ 0</td>
                <td>$ 6.984.481.444</td>
                <td>$ 66.903.447</td>
                <td>$ 7.051.384.891</td>
            </tr>

            <tr>
                <td>PERSONAL JUBILADO CON PENSION COMPARTIDA</td>
                <td>61</td>
                <td>$ 7.724.763.158</td>
                <td>$ 2.501.969.912</td>
                <td>$ 0</td>
                <td>$ 10.226.733.070</td>
                <td>$ 0</td>
                <td>$ 10.226.733.070</td>
            </tr>

            <tr>
                <td>PERSONAL BENEFICIARIO VITALICIO COMPARTIDO CON COLPENSIONES</td>
                <td>21</td>
                <td>$ 3.293.364.356</td>
                <td>$ 0</td>
                <td>$ 0</td>
                <td>$ 3.293.364.356</td>
                <td>$ 0</td>
                <td>$ 3.293.364.356</td>
            </tr>
        </tbody>
        <tfoot  class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <th scope="col" class="px-6 py-3" >Total general</th>
            <th scope="col" class="px-6 py-3" >103</th>
            <th scope="col" class="px-6 py-3" >$ 16.077.930.090</th>
            <th scope="col" class="px-6 py-3" >$ 4.551.959.541</th>
            <th scope="col" class="px-6 py-3" >$ 2.310.908</th>
            <th scope="col" class="px-6 py-3" >$ 20.632.200.538</th>
            <th scope="col" class="px-6 py-3" >$ 66.903.447</th>
            <th scope="col" class="px-6 py-3" >$ 20.699.103.985</th>
        </tfoot>
    </table>
</body>
</html>
