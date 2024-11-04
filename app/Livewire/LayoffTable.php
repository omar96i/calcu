<?php

namespace App\Livewire;

use App\Models\Layoff;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class LayoffTable extends Component
{
    use WithPagination;

    public int | string $perPage = 500;

    public $table = [
        78458793,
        24157834,
        9576134,
        60550157,
        74521267,
        37968544,
        45328182,
        37099230,
        17072742,
        150267115,
        41289525,
        0, // Representando el guión (-)
        63635080,
        105283758,
        35604210,
        160378444,
        22020184,
        0, // Representando el guión (-)
        39154642,
        126446064,
        86408793,
        970924,
        93731273,
        53903172
    ];

    public $table2 = [
        [15, 1000000, 485, 0.00049, 0.99952, 1000000, 272, 0.00027, 0.99973],
        [16, 999515, 496, 0.00050, 0.99950, 999728, 278, 0.00028, 0.99972],
        [17, 999019, 509, 0.00051, 0.99949, 999450, 285, 0.00029, 0.99971],
        [18, 998510, 522, 0.00052, 0.99948, 999165, 293, 0.00029, 0.99971],
        [19, 997988, 537, 0.00054, 0.99946, 998872, 302, 0.00030, 0.99970],
        [20, 997451, 553, 0.00055, 0.99945, 998570, 311, 0.00031, 0.99969],
        [21, 996898, 571, 0.00057, 0.99943, 998259, 321, 0.00032, 0.99968],
        [22, 996327, 591, 0.00059, 0.99941, 997938, 332, 0.00033, 0.99967],
        [23, 995736, 612, 0.00061, 0.99939, 997606, 344, 0.00034, 0.99966],
        [24, 995124, 636, 0.00064, 0.99936, 997262, 357, 0.00036, 0.99964],
        [25, 994488, 662, 0.00067, 0.99933, 996905, 372, 0.00037, 0.99963],
        [26, 993826, 690, 0.00069, 0.99931, 996533, 388, 0.00039, 0.99961],
        [27, 993136, 721, 0.00073, 0.99927, 996145, 405, 0.00041, 0.99959],
        [28, 992415, 755, 0.00076, 0.99924, 995740, 425, 0.00043, 0.99957],
        [29, 991660, 792, 0.00080, 0.99920, 995315, 446, 0.00045, 0.99955],
        [30, 990868, 832, 0.00084, 0.99916, 994869, 469, 0.00047, 0.99953],
        [31, 990036, 877, 0.00089, 0.99911, 994400, 494, 0.00050, 0.99950],
        [32, 989159, 926, 0.00094, 0.99906, 993906, 522, 0.00053, 0.99947],
        [33, 988233, 979, 0.00099, 0.99901, 993384, 552, 0.00056, 0.99944],
        [34, 987254, 1038, 0.00105, 0.99895, 992832, 585, 0.00059, 0.99941],
        [35, 986216, 1102, 0.00112, 0.99888, 992247, 622, 0.00063, 0.99937],
        [36, 985114, 1172, 0.00119, 0.99881, 991625, 662, 0.00067, 0.99933],
        [37, 983942, 1249, 0.00127, 0.99873, 990963, 705, 0.00071, 0.99929],
        [38, 982693, 1333, 0.00136, 0.99864, 990258, 753, 0.00076, 0.99924],
        [39, 981360, 1424, 0.00145, 0.99855, 989505, 806, 0.00081, 0.99919],
        [40, 979936, 1525, 0.00156, 0.99844, 988699, 863, 0.00087, 0.99913],
        [41, 978411, 1635, 0.00167, 0.99833, 987836, 926, 0.00094, 0.99906],
        [42, 976776, 1755, 0.00180, 0.99820, 986910, 994, 0.00101, 0.99899],
        [43, 975021, 1886, 0.00193, 0.99807, 985916, 1070, 0.00109, 0.99891],
        [44, 973135, 2030, 0.00209, 0.99791, 984846, 1152, 0.00117, 0.99883],
        [45, 971105, 2186, 0.00225, 0.99775, 983694, 1242, 0.00126, 0.99874],
        [46, 968919, 2358, 0.00243, 0.99757, 982452, 1341, 0.00136, 0.99864],
        [47, 966561, 2544, 0.00263, 0.99737, 981111, 1448, 0.00148, 0.99852],
        [48, 964017, 2748, 0.00285, 0.99715, 979663, 1566, 0.00160, 0.99840],
        [49, 961269, 2971, 0.00309, 0.99691, 978097, 1695, 0.00173, 0.99827],
        [50, 958298, 3213, 0.00335, 0.99665, 976402, 1836, 0.00188, 0.99812],
        [51, 955085, 3477, 0.00364, 0.99636, 974566, 1990, 0.00204, 0.99796],
        [52, 951608, 3765, 0.00396, 0.99604, 972576, 2158, 0.00222, 0.99778],
        [53, 947843, 4077, 0.00430, 0.99570, 970418, 2341, 0.00241, 0.99759],
        [54, 943766, 4418, 0.00468, 0.99532, 968077, 2541, 0.00262, 0.99738],
        [55, 939348, 4744, 0.00505, 0.99495, 965536, 2735, 0.00283, 0.99717],
        [56, 934604, 5106, 0.00546, 0.99454, 962801, 2950, 0.00306, 0.99694],
        [57, 929498, 5507, 0.00592, 0.99408, 959851, 3189, 0.00332, 0.99668],
        [58, 923991, 5952, 0.00644, 0.99356, 956662, 3456, 0.00361, 0.99639],
        [59, 918039, 6444, 0.00702, 0.99298, 953206, 3752, 0.00394, 0.99606],
        [60, 911595, 6988, 0.00767, 0.99233, 949454, 4082, 0.00430, 0.99570],
        [61, 904607, 7588, 0.00839, 0.99161, 945372, 4447, 0.00470, 0.99530],
        [62, 897019, 8250, 0.00920, 0.99080, 940925, 4853, 0.00516, 0.99484],
        [63, 888769, 9134, 0.01028, 0.98972, 936072, 5303, 0.00567, 0.99433],
        [64, 879635, 10078, 0.01146, 0.98854, 930769, 5801, 0.00623, 0.99377],
        [65, 869557, 11080, 0.01274, 0.98726, 924968, 6351, 0.00687, 0.99313],
        [66, 858477, 12143, 0.01414, 0.98586, 918617, 6959, 0.00758, 0.99242],
        [67, 846334, 13265, 0.01567, 0.98433, 911658, 7629, 0.00837, 0.99163],
        [68, 833069, 14446, 0.01734, 0.98266, 904029, 8367, 0.00926, 0.99074],
        [69, 818623, 15683, 0.01916, 0.98084, 895662, 9177, 0.01025, 0.98975],
        [70, 802940, 16972, 0.02114, 0.97886, 886485, 10065, 0.01135, 0.98865],
        [71, 785968, 18310, 0.02330, 0.97670, 876420, 11036, 0.01259, 0.98741],
        [72, 767658, 19688, 0.02565, 0.97435, 865384, 12095, 0.01398, 0.98602],
        [73, 747970, 21098, 0.02821, 0.97179, 853289, 13245, 0.01552, 0.98448],
        [74, 726872, 22530, 0.03100, 0.96900, 840044, 14490, 0.01725, 0.98275],
        [75, 704342, 23970, 0.03403, 0.96597, 825554, 15832, 0.01918, 0.98082],
        [76, 680372, 25402, 0.03734, 0.96266, 809722, 17272, 0.02133, 0.97867],
        [77, 654970, 26808, 0.04093, 0.95907, 792450, 18809, 0.02374, 0.97626],
        [78, 628162, 28168, 0.04484, 0.95516, 773641, 20439, 0.02642, 0.97358],
        [79, 599994, 29456, 0.04909, 0.95091, 753202, 22154, 0.02941, 0.97059],
        [80, 570538, 30646, 0.05371, 0.94629, 731048, 23943, 0.03275, 0.96725],
        [81, 539892, 31711, 0.05874, 0.94126, 707105, 25791, 0.03647, 0.96353],
        [82, 508181, 32619, 0.06419, 0.93581, 681314, 27677, 0.04062, 0.95938],
        [83, 475562, 33340, 0.07011, 0.92989, 653637, 29572, 0.04524, 0.95476],
        [84, 442222, 33841, 0.07652, 0.92348, 624065, 31445, 0.05039, 0.94961],
        [85, 408381, 34093, 0.08348, 0.91652, 592620, 33252, 0.05611, 0.94389],
        [86, 374288, 34069, 0.09102, 0.90898, 559368, 34945, 0.06247, 0.93753],
        [87, 340219, 33745, 0.09919, 0.90081, 524423, 36469, 0.06954, 0.93046],
        [88, 306474, 33103, 0.10801, 0.89199, 487954, 37762, 0.07739, 0.92261],
        [89, 273371, 32136, 0.11755, 0.88245, 450192, 38757, 0.08609, 0.91391],
        [90, 241235, 30844, 0.12786, 0.87214, 411435, 39386, 0.09573, 0.90427],
        [91, 210391, 29239, 0.13897, 0.86103, 372049, 39709, 0.10673, 0.89327],
        [92, 181152, 27344, 0.15095, 0.84905, 332340, 39700, 0.11946, 0.88054],
        [93, 153808, 25199, 0.16383, 0.83617, 292640, 39188, 0.13391, 0.86609],
        [94, 128609, 22851, 0.17768, 0.82232, 253452, 38041, 0.15009, 0.84991],
        [95, 105758, 20363, 0.19254, 0.80746, 215411, 36189, 0.16800, 0.83200],
        [96, 85395, 17839, 0.20890, 0.79110, 179222, 33628, 0.18763, 0.81237],
        [97, 67556, 15350, 0.22722, 0.77278, 145594, 30428, 0.20899, 0.79101],
        [98, 52206, 12921, 0.24750, 0.75250, 115166, 26728, 0.23208, 0.76792],
        [99, 39285, 10597, 0.26975, 0.73025, 88438, 22719, 0.25689, 0.74311],
        [100, 28688, 8433, 0.29396, 0.70604, 65719, 18627, 0.28343, 0.71657],
        [101, 20255, 6484, 0.32012, 0.67988, 47092, 14679, 0.31171, 0.68829],
        [102, 13771, 4796, 0.34827, 0.65173, 32413, 11075, 0.34168, 0.65832],
        [103, 8975, 3395, 0.37827, 0.62173, 21338, 7968, 0.37342, 0.62658],
        [104, 5580, 2290, 0.41039, 0.58961, 13370, 5440, 0.40688, 0.59312],
        [105, 3290, 1462, 0.44438, 0.55562, 7930, 3505, 0.44199, 0.55801],
        [106, 1828, 878, 0.48031, 0.51969, 4425, 2119, 0.47887, 0.52113],
        [107, 950, 492, 0.51789, 0.48211, 2306, 1194, 0.51778, 0.48222],
        [108, 458, 256, 0.55895, 0.44105, 1112, 620, 0.55755, 0.44245],
        [109, 202, 121, 0.59901, 0.40099, 492, 295, 0.59959, 0.40041],
        [110, 81, 81, 1.00000, 0.00000, 197, 197, 1.00000, 0.00000],
    ];

    public $B2 = '2023-12-31';

    public $B1 = '2023-01-01';

    public $V1 =  0.06899;

    public $V2 = 0.11175;

    public $V3 = 0.04;

    public $B3 = 360;

    public $W3 = 0;

    public $X3 = 1;

    public $Y3 = 2;

    public $Z3 = 3;

    public $AA3 = 4;

    public $AB3 = 5;

    public $AC3 = 6;

    public $AD3 = 7;

    public $AE3 = 8;

    public $AF3 = 9;

    public $AG3 = 10;

    public $AH3 = 11;

    public $AI3 = 12;

    public $AJ3 = 13;

    public $AK3 = 14;

    public $AL3 = 15;

    public $AM3 = 16;

    public $I;

    public $L = "Régim Anterior";

    public $K;

    public $M;

    public $N;

    public $O;

    public $P;

    public $Q;

    public $R;

    public $S;

    public $T;

    public $U;

    public $V;

    public $W;

    public $user_id;

    public $year_calculation;

    public function mount($user_id, $year){
        $this->user_id = $user_id;
        $this->year_calculation = $year;
    }
    public function render()
    {
        return view('livewire.layoff-table', ['data' => Layoff::where('user_id', $this->user_id)->where('year', $this->year_calculation)->paginate($this->perPage)]);
    }

    public function getI($E)
    {
        $this->I = $this->calculateDias360($E, $this->B2);
        return $this->calculateDias360($E, $this->B2);
    }

    private function calculateDias360($startDate, $endDate)
    {
        // Convertimos las fechas a objetos DateTime
        $start = new \DateTime($startDate);
        $end = new \DateTime($endDate);

        // Obtenemos los componentes de las fechas
        $startDay = $start->format('j');
        $startMonth = $start->format('n');
        $startYear = $start->format('Y');

        $endDay = $end->format('j');
        $endMonth = $end->format('n');
        $endYear = $end->format('Y');

        // Ajustamos el día del mes si es necesario
        if ($startDay == 31 || ($startMonth == 2 && $startDay == $start->format('t'))) {
            $startDay = 30;
        }
        if ($endDay == 31 && $startDay >= 30) {
            $endDay = 30;
        }

        // Calculamos el número de días
        $days = ($endYear - $startYear) * 360 +
                ($endMonth - $startMonth) * 30 +
                ($endDay - $startDay);

        return $days;
    }

    public function getK($E, $F)
    {
        // Asumimos que $this->I ya tiene el valor correspondiente para el cálculo
        $I6 = $this->I;

        // Lógica basada en la fórmula de Excel
        if ($this->L == "Régim Anterior") {
            $result =  $I6 - $F;
        } elseif ($E >= $this->B1) {
            $result =  $I6;
        } else {
            // Convertimos $this->B2 a un objeto DateTime
            $dateTime = new \DateTime($this->B2);
            // Obtenemos el número de mes y lo multiplicamos por 30
            $result =  $dateTime->format('n') * 30;
        }
        $this->K = $result;
        return $result;
    }

    public function getM($D)
    {
        // Convertimos $D a un objeto DateTime
        $startDate = new \DateTime($D);

        // Convertimos $this->B2 a un objeto DateTime
        $endDate = new \DateTime($this->B2);

        // Calculamos la diferencia en días
        $interval = $endDate->diff($startDate);
        $daysDifference = $interval->days;

        // Aplicamos la fórmula: ((B2 - D) / 365.25) + 0.05 y tomamos la parte entera
        $result = intval((($daysDifference / 365.25) + 0.05));
        $this->M = $result;
        return $result;
    }

    public function getN($J)
    {
        // Asumimos que $this->K y $this->B3 ya tienen los valores correspondientes
        $K6 = $this->K;
        $B3 = $this->B3;

        // Aplicamos la fórmula: (J6 * K6) / B3
        $result = ($J * $K6) / $B3;
        $this->N = number_format(round($result),0);
        return number_format(round($result),0);
    }

    public function getO($O){
        $this->O = $O;
    }

    public function getP($C, $D)
    {
        // Convertimos $D a un objeto DateTime
        $startDate = new \DateTime($D);

        // Determinamos los días a añadir basado en $C
        if ($C == "M") {
            $daysToAdd = 62 * 365.25;
        } else {
            $daysToAdd = 57 * 365.25;
        }

        // Calculamos la fecha resultante al añadir los días
        $interval = new \DateInterval('P' . intval($daysToAdd) . 'D');
        $resultDate = clone $startDate;
        $resultDate->add($interval);

        // Convertimos $this->B2 a un objeto DateTime
        $comparisonDate = new \DateTime($this->B2);

        // Obtenemos el máximo entre $comparisonDate y $resultDate
        $maxDate = max($comparisonDate, $resultDate);

        // Convertimos la fecha máxima de vuelta a una cadena de texto (opcional)
        $maxDateFormatted = $maxDate->format('Y-m-d');
        $this->P = $maxDateFormatted;
        return $maxDateFormatted;
    }

    public function getQ()
    {
        // Convertimos $this->B2 y $P a objetos DateTime
        $startDate = new \DateTime($this->B2);
        $endDate = new \DateTime($this->P);

        // Calculamos DIAS360 entre $startDate y $endDate
        $dias360 = $this->calculateDias3602($startDate, $endDate);

        // Sumamos $this->K con el resultado de DIAS360
        $result = $this->K + $dias360;
        $this->Q = $result;
        return $result;
    }

    private function calculateDias3602($startDate, $endDate)
    {
        // Obtenemos los componentes de las fechas
        $startDay = $startDate->format('j');
        $startMonth = $startDate->format('n');
        $startYear = $startDate->format('Y');

        $endDay = $endDate->format('j');
        $endMonth = $endDate->format('n');
        $endYear = $endDate->format('Y');

        // Ajustamos el día del mes si es necesario
        if ($startDay == 31 || ($startMonth == 2 && $startDay == $startDate->format('t'))) {
            $startDay = 30;
        }
        if ($endDay == 31 && $startDay >= 30) {
            $endDay = 30;
        }

        // Calculamos el número de días
        $days = ($endYear - $startYear) * 360 +
                ($endMonth - $startMonth) * 30 +
                ($endDay - $startDay);

        return $days;
    }

    public function getR()
    {
        // Convertimos $this->B2 y $this->P a objetos DateTime
        $startDate = new \DateTime($this->B2);
        $endDate = new \DateTime($this->P);

        // Obtenemos el año de $this->B2 y de $this->P
        $startYear = intval($startDate->format('Y'));
        $endYear = intval($endDate->format('Y'));

        // Incrementamos el año de $this->B2 y obtenemos el máximo entre ese valor y el año de $this->P
        $maxYear = max($startYear + 1, $endYear);
        $this->R = $maxYear;
        return $maxYear;
    }

    public function getS($D)
    {
        // Convertimos $D y $this->P a objetos DateTime
        $startDate = new \DateTime($D);
        $endDate = new \DateTime($this->P);

        // Calculamos la diferencia en días
        $interval = $endDate->diff($startDate);
        $daysDifference = $interval->days;

        // Aplicamos la fórmula: ((P6 - D6) / 365.25) + 0.05 y tomamos la parte entera
        $result = intval((($daysDifference / 365.25) + 0.05));
        $this->S = $result;
        return $result;
    }

    public function getT()
    {
        // Convertimos $this->B2 a un objeto DateTime
        $startDate = new \DateTime($this->B2);

        // Obtenemos el año de $this->B2
        $startYear = intval($startDate->format('Y'));

        // Obtenemos el año de $this->R
        $endYear = intval($this->R);

        // Restamos el año de $this->B2 al valor de $this->R
        $result = $endYear - $startYear;
        $this->T = $result;
        return $result;
    }

    public function getU($J)
    {
        // Asumiendo que $this->Q, $this->B3, $this->V3, $this->V2 y $this->T están correctamente definidos

        // Calculamos la parte numérica de la fórmula
        $parte_numerica = $J * $this->Q / $this->B3;

        // Calculamos el factor de crecimiento del numerador y denominador
        $factor_numerador = pow(1 + $this->V3, $this->T);
        $factor_denominador = pow(1 + $this->V2, $this->T);

        // Calculamos el resultado final
        $resultado = $parte_numerica * $factor_numerador / $factor_denominador;
        $this->U = intval($resultado);
        return number_format($resultado,0);
    }

    public function getV($C, $H){
        // Primero, calculamos los valores que necesitamos para la fórmula
        $parte1 = max(0, $this->U - $H);
        $P_as_number = Carbon::parse('1970-01-01')->diffInDays($this->P); // Convertimos la fecha a un número
        $B2_as_number = Carbon::parse('1970-01-01')->diffInDays($this->B2); // Convertimos la fecha a un número
        $parte2 = pow((1 + $this->V1), (($P_as_number - $B2_as_number) / 365.25));
        $parte2 = round($parte2, 9); // Redondeamos a 9 decimales
        $indice = $C == "M" ? 1 : 6;

        // Luego, buscamos los valores correspondientes en la tabla
        $valorS = $this->buscarEnTabla($this->S, $indice);
        $valorM = $this->buscarEnTabla($this->M, $indice);
        // Finalmente, calculamos el valor final
        $V = $parte1 / $parte2 * ($valorS / $valorM);
        $this->V = intval($V);
        return number_format(intval($V),0);
    }

    public function buscarEnTabla($valor, $indice){
        // Recorremos la tabla hasta encontrar el valor correspondiente
        foreach($this->table2 as $fila){
            if($fila[0] == $valor){
                return $fila[$indice];
            }
        }

        // Si no encontramos el valor, devolvemos 0
        return 0;
    }

    public function getW(){
        $result = $this->T == $this->W3 ? $this->V : 0;
        $this->W = $result;
        return number_format($result);
    }

    public $X;
    public function getX(){
        $result = $this->T == $this->X3 ? $this->V : 0;
        $this->X = $result;
        return number_format($result);
    }

    public $Y;
    public function getY(){
        $result = $this->T == $this->Y3 ? $this->V : 0;
        $this->Y = $result;
        return number_format($result);
    }

    public $Z;

    public function getZ(){
        $result = $this->T == $this->Z3 ? $this->V : 0;
        $this->Z = $result;
        return number_format($result);
    }

    public $AA;
    public function getAA(){
        $result = $this->T == $this->AA3 ? $this->V : 0;
        $this->AA = $result;
        return number_format($result);
    }

    public $AB;
    public function getAB(){
        $result = $this->T == $this->AB3 ? $this->V : 0;
        $this->AB = $result;
        return number_format($result);
    }

    public $AC;
    public function getAC(){
        $result = $this->T == $this->AC3 ? $this->V : 0;
        $this->AC = $result;
        return number_format($result);
    }

    public $AD;
    public function getAD(){
        $result = $this->T == $this->AD3 ? $this->V : 0;
        $this->AD = $result;
        return number_format($result);
    }

    public $AE;
    public function getAE(){
        $result = $this->T == $this->AE3 ? $this->V : 0;
        $this->AE = $result;
        return number_format($result);
    }

    public $AF;
    public function getAF(){
        $result = $this->T == $this->AF3 ? $this->V : 0;
        $this->AF = $result;
        return number_format($result);
    }

    public $AG;
    public function getAG(){
        $result = $this->T == $this->AG3 ? $this->V : 0;
        $this->AG = $result;
        return number_format($result);
    }

    public $AH;
    public function getAH(){
        $result = $this->T == $this->AH3 ? $this->V : 0;
        $this->AH = $result;
        return number_format($result);
    }

    public $AI;
    public function getAI(){
        $result = $this->T == $this->AI3 ? $this->V : 0;
        $this->AI = $result;
        return number_format($result);
    }

    public $AJ;
    public function getAJ(){
        $result = $this->T == $this->AJ3 ? $this->V : 0;
        $this->AJ = $result;
        return number_format($result);
    }

    public $AK;
    public function getAK(){
        $result = $this->T == $this->AK3 ? $this->V : 0;
        $this->AK = $result;
        return number_format($result);
    }

    public $AL;
    public function getAL(){
        $result = $this->T == $this->AL3 ? $this->V : 0;
        $this->AL = $result;
        return number_format($result);
    }

    public $AM;
    public function getAM(){
        $result = $this->T == $this->AM3 ? $this->V : 0;
        $this->AM = $result;
        return number_format($result);
    }

    public function updateState($id){
        $layoff = Layoff::find($id);
        $layoff->update([
            'user_id' => auth()->user()->id,
            'days_worked' => $this->I,
            'calculation_base' => $layoff->import_salary,
            'days_calculation_base' => $this->K,
            'regime' => $this->L,
            'age_fc' => $this->M,
            'severance_liquidation' => $this->N,
            'accumulated_severances' => $this->O,
            'retire_date' => $this->P,
            'days' => $this->Q,
            'retire_year' => $this->R,
            'age_fr' => $this->S,
            'year_to_work' => $this->T,
            'settlement_value' => $this->U,
            'value_charge' => $this->V,
            'liquidation_2023' => $this->W,
            'liquidation_2024' => $this->X,
            'liquidation_2025' => $this->Y,
            'liquidation_2026' => $this->Z,
            'liquidation_2027' => $this->AA,
            'liquidation_2028' => $this->AB,
            'liquidation_2029' => $this->AC,
            'liquidation_2030' => $this->AD,
            'liquidation_2031' => $this->AE,
            'liquidation_2032' => $this->AF,
            'liquidation_2033' => $this->AG,
            'liquidation_2034' => $this->AH,
            'liquidation_2035' => $this->AI,
            'liquidation_2036' => $this->AJ,
            'liquidation_2037' => $this->AK,
            'liquidation_2038' => $this->AL,
            'liquidation_2039' => $this->AM,
            'status' => 'completed'
        ]);
    }
}
