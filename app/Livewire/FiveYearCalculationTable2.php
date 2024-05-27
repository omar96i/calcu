<?php

namespace App\Livewire;

use App\Models\AuxTable;
use App\Models\FiveYearCalculation as ModelsFiveYearCalculation;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;


class FiveYearCalculationTable2 extends Component
{
    use WithPagination;

    public int | string $perPage = 10;

    public $date = '2023-12-31';
    public $yearCalcule = '2023';
    public $dayYears = 365;
    public $Q_1 = 30;
    public $Q_2 = 30.0;
    public $Q_3 = 90.0;
    public $aux_table;
    public $parametros = [
        [0, 17.13, '82.87%'],
        [1, 16.02, '83.98%'],
        [2, 15.63, '84.37%'],
        [3, 11.98, '88.02%'],
        [4, 9.87, '90.13%'],
        [5, 8.34, '91.66%'],
        [6, 7.36, '92.64%'],
        [7, 6.46, '93.54%'],
        [8, 5.88, '94.12%'],
        [9, 5.13, '94.87%'],
        [10, 4.91, '95.09%'],
        [11, 4.55, '95.45%'],
        [12, 4.16, '95.84%'],
        [13, 3.92, '96.08%'],
        [14, 3.92, '96.08%'],
        [15, 3.66, '96.34%'],
        [16, 3.45, '96.55%'],
        [17, 3.23, '96.77%'],
        [18, 2.96, '97.04%'],
        [19, 2.96, '97.04%'],
        [20, 2.81, '97.19%'],
        [21, 2.66, '97.34%'],
        [22, 2.49, '97.51%'],
        [23, 2.31, '97.69%'],
        [24, 2.31, '97.69%'],
        [25, 2.12, '97.88%'],
        [26, 2.11, '97.89%'],
        [27, 1.91, '98.09%'],
        [28, 1.75, '98.25%'],
        [29, 1.66, '98.34%'],
        [30, 1.52, '98.48%'],
        [31, 1.34, '98.66%'],
        [32, 1.31, '98.69%'],
        [33, 1.02, '98.98%'],
        [34, 0.71, '99.29%'],
        [35, 0.40, '99.60%'],
        [36, 0.20, '99.80%'],
        [37, 0.00, '100.00%'],
        [38, 0.00, '100.00%'],
        [39, 0.00, '100.00%'],
        [40, 0.00, '100.00%'],
        [41, 0.00, '100.00%'],
        [42, 0.00, '100.00%'],
        [43, 0.00, '100.00%'],
        [44, 0.00, '100.00%'],
        [45, 0.00, '100.00%'],
        [46, 0.00, '100.00%'],
        [47, 0.00, '100.00%'],
        [48, 0.00, '100.00%'],
        [49, 0.00, '100.00%'],
        [50, 0.00, '100.00%'],
        [51, 0.00, '100.00%'],
        [52, 0.00, '100.00%'],
        [53, 0.00, '100.00%'],
        [54, 0.00, '100.00%'],
        [55, 0.00, '100.00%'],
        [56, 0.00, '100.00%'],
        [57, 0.00, '100.00%'],
        [58, 0.00, '100.00%'],
        [59, 0.00, '100.00%'],
        [60, 0.00, '100.00%'],
        [61, 0.00, '100.00%'],
        [62, 0.00, '100.00%'],
        [63, 0.00, '100.00%'],
        [64, 0.00, '100.00%'],
        [65, 0.00, '100.00%'],
        [66, 0.00, '100.00%'],
        [67, 0.00, '100.00%'],
        [68, 0.00, '100.00%'],
        [69, 0.00, '100.00%'],
        [70, 0.00, '100.00%'],
        [71, 0.00, '100.00%'],
        [72, 0.00, '100.00%'],
        [73, 0.00, '100.00%'],
        [74, 0.00, '100.00%'],
        [75, 0.00, '100.00%'],
    ];
    public $L;
    public $M;
    public $N;
    public $O;
    public $P;
    public $Q;
    public $R;
    public $S;
    public $T;
    public $U;

    public $W;
    public $Y;

    public $AA;

    public $X;

    public $Z;

    public $AB;

    public function mount(){
        $this->aux_table = AuxTable::get();
    }

    public function render()
    {
        return view('livewire.five-year-calculation-table2', [
            'data' => ModelsFiveYearCalculation::paginate($this->perPage),
        ]);
    }

    public function getL($F, $G)
    {
        // Convertir $this->date y $F a instancias de Carbon
        $calculationDate = Carbon::parse($this->date);
        $F_date = Carbon::parse($F);

        // Realizar el cálculo
        $result = $calculationDate->diffInDays($F_date) - $G + 1;

        // Almacenar el resultado en la propiedad $L
        $this->L = $result;

        return $result;
    }

    public function getM(){
        $result = $this->L / $this->dayYears;
        $this->M = $result;
        return number_format($result,2);
    }

    public function getN($C)
    {
        // Convertir $this->date y $C a instancias de Carbon
        $calculationDate = Carbon::parse($this->date);
        $C_date = Carbon::parse($C);

        // Realizar el cálculo
        $result = ($calculationDate->diffInDays($C_date) + 1) / $this->dayYears;

        // Almacenar el resultado en la propiedad $N
        $this->N = $result;

        return number_format($result, 2); // Formatear el resultado con dos decimales
    }

    public function getO($C, $J)
    {
        // Convertir $this->yearCalcule a un valor numérico entero
        $yearCalcule = intval($this->yearCalcule);

        // Obtener el año siguiente y crear una instancia de Carbon con la fecha "Año_calculo+1-12-31"
        $nextYearDate = Carbon::create($yearCalcule + 1, 12, 31)->endOfDay();

        // Convertir $C a una instancia de Carbon
        $C_date = Carbon::parse($C);

        // Calcular C3 + Días_de_año * 65
        $calculationC = $C_date->copy()->addDays($this->dayYears * 65);

        // Calcular MAX(FECHA(Año_calculo+1;12;31);C3+Días_de_año*65)
        $maxResult = max($nextYearDate, $calculationC);

        // Si $J está vacío, retornar el resultado máximo sin hacer más comparaciones
        if (empty($J)) {
            // Almacenar el resultado en la propiedad $O
            $this->O = $maxResult;
            return $maxResult->format('Y-m-d');
        }

        // Convertir $J a una instancia de Carbon
        $J_date = Carbon::parse($J);

        // Calcular MIN(MAX(FECHA(Año_calculo+1;12;31);C3+Días_de_año*65);J3)
        $result = min($maxResult, $J_date);

        // Almacenar el resultado en la propiedad $O
        $this->O = $result;

        return $result->format('Y-m-d'); // Devolver la fecha en formato Y-m-d
    }

    public function getP($C)
    {
        // Convertir $C y $this->O a instancias de Carbon
        $C_date = Carbon::parse($C);
        $O_date = Carbon::parse($this->O);

        // Calcular la diferencia en días entre O3 y C3
        $differenceInDays = $O_date->diffInDays($C_date);

        // Sumar 1 al resultado de la diferencia en días
        $differenceInDaysPlusOne = $differenceInDays + 1;

        // Calcular la fórmula (O3-C3+1)/Días_de_año
        $result = $differenceInDaysPlusOne / $this->dayYears;

        // Tomar el máximo entre 0 y el resultado de la fórmula
        $result = max(0, $result);
        $this->P = $result;
        return number_format($result,0);
    }

    public function getQ()
    {
        if ($this->M < 1) {
            $this->Q = 0;
            return 0;
        } else {
            $result = ceil($this->M / 5);
            $this->Q = $result;
            return $result;
        }
    }

    public function getR($F)
    {
        // Convertir $F y $this->O a instancias de Carbon
        $F_date = Carbon::parse($F);
        $O_date = Carbon::parse($this->O);

        // Verificar si P3 es mayor que 0
        if ($this->P > 0) {
            // Calcular la diferencia en días entre O3 y F3, sumar 1 al resultado y redondear al entero más cercano
            $result = ceil($O_date->diffInDays($F_date) + 1);
        } else {
            // Si P3 es menor o igual que 0, retornar 0
            $result = 0;
        }
        $this->R = $result;
        return $result;
    }

    public function getS()
    {
        // Calcular el resultado de la fórmula R3/Días_de_año
        $result = $this->R / $this->dayYears;

        // Asignar el resultado a $this->S
        $this->S = $result;
        return number_format($result,0);
    }

    public function getT($F)
    {
        // Convertir $F a una instancia de Carbon
        $F_date = Carbon::parse($F);

        // Verificar si $this->Q es menor o igual que 1
        if ($this->Q <= 1) {
            // Si $this->Q es menor o igual que 1, devolver la fecha $F
            $this->T = $F_date->format('Y-m-d');
            return $F_date->format('Y-m-d');
        } else {
            // Calcular la fecha resultante sumando (Q3-1)*5*Días_de_año a la fecha $F
            $result_date = $F_date->copy()->addDays(($this->Q - 1) * 5 * $this->dayYears);
            $this->T = $result_date->format('Y-m-d');

            return $result_date->format('Y-m-d');
        }
    }

    public function getU(){
        $O_date = Carbon::parse($this->O);

        // Extraer el año de la fecha $this->O
        $year = $O_date->year;
        $this->U = $year;
        return $year;
    }

    public function getW($H)
    {
        $H_date = Carbon::parse($H);
        $yearH = $H_date->year;
        $result = max(0, $yearH - intval($this->yearCalcule));
        $this->W = $result;

        // Verificar si el resultado es menor o igual a 0
        if ($result <= 0) {
            return 0;
        } else {
            return $result;
        }
    }

    public function getY($I){
        $Y_date = Carbon::parse($I);
        $yearY = $Y_date->year;
        $result = max(0, $yearY - intval($this->yearCalcule));
        $this->Y = $result;

        // Verificar si el resultado es menor o igual a 0
        if ($result <= 0) {
            return 0;
        } else {
            return $result;
        }
    }

    public function getAA($J){
        $Y_date = Carbon::parse($J);
        $yearY = $Y_date->year;
        $result = max(0, $yearY - intval($this->yearCalcule));
        $this->AA = $result;

        // Verificar si el resultado es menor o igual a 0
        if ($result <= 0) {
            return 0;
        } else {
            return $result;
        }
    }

    public function getX($D, $E, $H)
    {
        $this->X = 0;
        if (empty($H) || !strtotime($H)) {
            return 0;
        }

        // Convertimos $H a una instancia de Carbon
        $H = Carbon::parse($H);

        // Primero, necesitamos obtener los datos de la base de datos
        $parametros_F_H = $this->parametros;
        $parametros_J_T = $this->aux_table;

        // Luego, calculamos las partes de la fórmula
        $parte1 = $E / 30 * $this->Q_1 * ($this->M / 5);
        $parte2 = $this->buscarVArray((int)($this->M + 0.5) + ($H->year - intval($this->yearCalcule)), $parametros_F_H, 2);
        $parte3 = $this->buscarVDB((int)($this->N + 0.5) + ($H->year - intval($this->yearCalcule)), $D == "M" ? 'f' : 'l');
        $parte4 = $this->buscarVDB((int)($this->N + 0.5), $D == "M" ? 'f' : 'l');
        if (!is_null($parte3) && !is_null($parte4) && $parte4 != 0) {
            $resultado = $parte1 * $parte2 * ($parte3 / $parte4);
        } else {
            $resultado = 0;
        }
        $this->X = $resultado;

        return number_format($resultado,0);
    }




    public function getZ($D, $E, $H)
    {
        $this->Z = 0;
        if (empty($H) || !strtotime($H)) {
            return 0;
        }

        // Convertimos $H a una instancia de Carbon
        $H = Carbon::parse($H);

        // Primero, necesitamos obtener los datos de la base de datos
        $parametros_F_H = $this->parametros;
        $parametros_J_T = $this->aux_table;

        // Luego, calculamos las partes de la fórmula
        $parte1 = $E / 30 * $this->Q_2 * ($this->M / 10);
        $parte2 = $this->buscarVArray((int)($this->M + 0.5) + ($H->year - intval($this->yearCalcule)), $parametros_F_H, 2);
        $parte3 = $this->buscarVDB((int)($this->N + 0.5) + ($H->year - intval($this->yearCalcule)), $D == "M" ? 'f' : 'l');
        $parte4 = $this->buscarVDB((int)($this->N + 0.5), $D == "M" ? 'f' : 'l');
        if (!is_null($parte3) && !is_null($parte4) && $parte4 != 0) {
            $resultado = $parte1 * $parte2 * ($parte3 / $parte4);
        } else {
            $resultado = 0;
        }
        $this->Z = $resultado;
        return number_format($resultado,0);
    }

    public function getAB($D, $E, $H)
    {
        $this->AB = 0;
        if (empty($H) || !strtotime($H)) {
            return 0;
        }

        // Convertimos $H a una instancia de Carbon
        $H = Carbon::parse($H);

        // Primero, necesitamos obtener los datos de la base de datos
        $parametros_F_H = $this->parametros;
        $parametros_J_T = $this->aux_table;

        // Luego, calculamos las partes de la fórmula
        $parte1 = $E / 30 * $this->Q_3 * ($this->M / 15);
        $parte2 = $this->buscarVArray((int)($this->M + 0.5) + ($H->year - intval($this->yearCalcule)), $parametros_F_H, 2);
        $parte3 = $this->buscarVDB((int)($this->N + 0.5) + ($H->year - intval($this->yearCalcule)), $D == "M" ? 'f' : 'l');
        $parte4 = $this->buscarVDB((int)($this->N + 0.5), $D == "M" ? 'f' : 'l');
        if (!is_null($parte3) && !is_null($parte4) && $parte4 != 0) {
            $resultado = $parte1 * $parte2 * ($parte3 / $parte4);
        } else {
            $resultado = 0;
        }
        $this->AB = $resultado;
        return number_format($resultado,0);
    }

    public function buscarVArray($valor, $tabla, $indice)
    {
        // Aquí deberías buscar el valor en la tabla y retornar el valor correspondiente al índice
        // Este es solo un ejemplo, deberías adaptarlo a tu implementación
        foreach ($tabla as $fila) {
            if ($fila[0] == $valor) {
                // Si el valor es un porcentaje, lo convertimos a un número decimal
                if (strpos($fila[$indice], '%') !== false) {
                    return str_replace('%', '', $fila[$indice]) / 100;
                }
                return floatval($fila[$indice]);
            }
        }

        return null;
    }

    public function buscarVDB($valor, $indice)
    {
        $fila = AuxTable::where('a', $valor)->first();
        if ($fila) {
            return $fila->$indice;
        }

        return null;
    }

    public function getV()
    {
        // Obtener los valores de las propiedades
        $X = $this->X;
        $Z = $this->Z;
        $AB = $this->AB;

        // Sumar los valores
        $suma = $X + $Z + $AB;

        // Retornar el máximo entre 0 y la suma calculada
        return number_format(max(0, $suma),0);
    }
}
