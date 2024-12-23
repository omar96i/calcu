<?php

namespace App\Filament\Pages;

use App\Exports\TemplateExportBonusB;
use App\Imports\BonusBImport;
use App\Models\BonusB as ModelsBonusB;
use App\Models\DTFP;
use App\Models\FacB;
use App\Models\GeneralData;
use App\Models\User;
use DateInterval;
use DateTime;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Maatwebsite\Excel\Facades\Excel;

class BonusB extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.bonus-b';

    protected static ?string $navigationGroup = 'Datos Empresa';

    protected static ?int $navigationSort = 4;

    public $bonusB;

    public $baseDate = '1992-06-30';

    public $Fco = '1994-04-01';

    public $Fcal = '2022-12-31';

    public $fact;

    public $parameters;

    public $salary_min;

    public $dtfp;

    public $salary;

    public $m;

    public $n;

    public $o;

    public $s;

    public $r;

    public $q;

    public $t;

    public $u;

    public $p;

    public $v;

    public $w;

    public $x;

    public $y;

    public $aa;

    public $ab;

    public $ad;

    public $af;

    public $ae;

    public $ag;

    public $ah;

    public $ai;

    public $aj;

    public $ak;

    public $al;

    public $file;

    public $loading = false;

    public $page = 'bonus-b';

    public $step = 1;

    public $companies = [];

    public $selectedCompany = 0;

    public $year_calculation = '2023';

    public $closeTable = false;



    public function mount()
    {
        $this->dtfp = DTFP::get();
        $this->salary = GeneralData::get();
        $this->fact = FacB::get();
        $this->salary_min = [
            ['year' => 1955, 'Salario' => 60.00],
            ['year' => 1956, 'Salario' => 135.00],
            ['year' => 1957, 'Salario' => 155.40],
            ['year' => 1958, 'Salario' => 155.40],
            ['year' => 1959, 'Salario' => 155.40],
            ['year' => 1960, 'Salario' => 198.00],
            ['year' => 1961, 'Salario' => 300.00],
            ['year' => 1962, 'Salario' => 420.00],
            ['year' => 1963, 'Salario' => 420.00],
            ['year' => 1964, 'Salario' => 420.00],
            ['year' => 1965, 'Salario' => 420.00],
            ['year' => 1966, 'Salario' => 420.00],
            ['year' => 1967, 'Salario' => 420.00],
            ['year' => 1968, 'Salario' => 420.00],
            ['year' => 1969, 'Salario' => 461.00],
            ['year' => 1970, 'Salario' => 519.00],
            ['year' => 1971, 'Salario' => 519.00],
            ['year' => 1972, 'Salario' => 624.00],
            ['year' => 1973, 'Salario' => 660.00],
            ['year' => 1974, 'Salario' => 950.00],
            ['year' => 1975, 'Salario' => 1200.00],
            ['year' => 1976, 'Salario' => 1350.00],
            ['year' => 1977, 'Salario' => 1887.50],
            ['year' => 1978, 'Salario' => 2500.00],
            ['year' => 1979, 'Salario' => 3450.00],
            ['year' => 1980, 'Salario' => 4500.00],
            ['year' => 1981, 'Salario' => 5700.00],
            ['year' => 1982, 'Salario' => 7410.00],
            ['year' => 1983, 'Salario' => 9261.00],
            ['year' => 1984, 'Salario' => 11298.00],
            ['year' => 1985, 'Salario' => 13558.00],
            ['year' => 1986, 'Salario' => 16812.00],
            ['year' => 1987, 'Salario' => 20510.00],
            ['year' => 1988, 'Salario' => 25638.00],
            ['year' => 1989, 'Salario' => 32560.00],
            ['year' => 1990, 'Salario' => 41025.00],
            ['year' => 1991, 'Salario' => 51720.00],
            ['year' => 1992, 'Salario' => 65190.00],
            ['year' => 1993, 'Salario' => 81510.00],
            ['year' => 1994, 'Salario' => 98700.00],
            ['year' => 1995, 'Salario' => 118934.00],
            ['year' => 1996, 'Salario' => 142125.00],
            ['year' => 1997, 'Salario' => 172005.00],
            ['year' => 1998, 'Salario' => 203825.93],
            ['year' => 1999, 'Salario' => 236460.00],
            ['year' => 2000, 'Salario' => 260106.00],
            ['year' => 2001, 'Salario' => 286000.00],
            ['year' => 2002, 'Salario' => 309000.00],
            ['year' => 2003, 'Salario' => 332000.00],
            ['year' => 2004, 'Salario' => 358000.00],
            ['year' => 2005, 'Salario' => 381500.00],
            ['year' => 2006, 'Salario' => 408000.00],
            ['year' => 2007, 'Salario' => 433700.00],
            ['year' => 2008, 'Salario' => 461500.00],
            ['year' => 2009, 'Salario' => 496900.00],
            ['year' => 2010, 'Salario' => 515000.00],
            ['year' => 2011, 'Salario' => 535600.00],
            ['year' => 2012, 'Salario' => 566700.00],
            ['year' => 2013, 'Salario' => 589500.00],
            ['year' => 2014, 'Salario' => 616000.00],
            ['year' => 2015, 'Salario' => 644350.00],
            ['year' => 2016, 'Salario' => 689455.00],
            ['year' => 2017, 'Salario' => 737717.00],
            ['year' => 2018, 'Salario' => 781242.00],
            ['year' => 2019, 'Salario' => 828116.00],
            ['year' => 2020, 'Salario' => 877803.00],
            ['year' => 2021, 'Salario' => 908526.00],
            ['year' => 2022, 'Salario' => 1000000.00],
            ['year' => 2023, 'Salario' => 1160000.00]
        ];
        $this->parameters = [
            ['FC' => 'Telehuila', 'Fecha' => '1967-01-01'],
            ['FC' => 'Telearmenia', 'Fecha' => '1983-05-01'],
            ['FC' => 'Telecalarca', 'Fecha' => '1986-01-01'],
            ['FC' => 'Telecaqueta', 'Fecha' => '1994-04-01'],
            ['FC' => 'Telemaicao', 'Fecha' => '1994-01-01'],
            ['FC' => 'Telecom', 'Fecha' => '1994-04-01'],
            ['FC' => 'Telenariño', 'Fecha' => '1994-04-01'],
            ['FC' => 'Teletolima', 'Fecha' => '1994-04-01']
        ];

        $this->companies = User::get();
        if (auth()->user()->type_user === 'employee') {
            $this->selectedCompany = auth()->user()->user_id; // Establece el 'user_id' si es 'employee'.
        } else {
            $this->selectedCompany = auth()->user()->id; // Establece el 'id' normal si no es 'employee'.
        }
    }

    public function openModal()
    {
        $this->dispatch('open-modal', id: 'upload-file');
    }

    public function closeTableAction()
    {
        $this->closeTable = false;
    }

    public function showTableFunct()
    {
        $this->bonusB = ModelsBonusB::where('year', $this->year_calculation)->where('user_id', $this->selectedCompany)->get();
        $this->closeTable = true;
    }

    public function setPage($newPage)
    {
        $this->page = $newPage;
    }

    public function downloadTemplate()
    {
        return Excel::download(new TemplateExportBonusB, 'plantilla_bonus_b.xlsx');
    }

    public function importData()
    {

        if ($this->file) {
            $this->loading = true;
            Excel::import(new BonusBImport($this->year_calculation, $this->selectedCompany), $this->file);
            Notification::make()
                ->title('Importación completa')
                ->success()
                ->send();
            $this->dispatch('close-modal', id: 'upload-file');
            $this->file = null;
        }
        $this->loading = false;
    }

    public function getFB($date1, $date2)
    {
        if ($date1 > $this->baseDate) {
            $result = $date1;
        } elseif ($date1 <=  $this->baseDate && $date2 != '0000-00-00') {
            $result = $date2;
        } else {
            $result =  $this->baseDate;
        }
        $this->m = $result;
        return $result;
    }

    public function getFC($entity)
    {
        foreach ($this->parameters as $parameter) {
            if (mb_strtolower($parameter['FC']) == mb_strtolower($entity)) {
                $this->o = $parameter['Fecha'];
                return $parameter['Fecha'];
            }
        }
        $this->o = $this->Fco;
        return $this->Fco;
    }
    public function getSB($salary)
    {
        // Primero, buscamos los valores correspondientes en DTFP y Salarios Min.

        $dtfp_o = DTFP::whereDate('date', '<=', $this->o)
            ->orderByRaw("ABS(DATEDIFF(date, '{$this->o}'))")
            ->first();

        $dtfp_m = DTFP::whereDate('date', '<=', $this->m)
            ->orderByRaw("ABS(DATEDIFF(date, '{$this->m}'))")
            ->first();

        $salario_min = collect($this->salary_min)->firstWhere('year', date('Y', strtotime($this->o)));

        // Luego, realizamos las operaciones de BUSCARV y SI.ERROR.
        $buscarv_o = $dtfp_o ? $dtfp_o->accumulated : null;
        $buscarv_m = $dtfp_m ? $dtfp_m->accumulated : 0.9923;
        // Realizamos la multiplicación.
        $multiplicacion = $buscarv_o / $buscarv_m * $salary;
        // Finalmente, devolvemos el máximo entre la multiplicación y el salario mínimo.
        $this->n = max($multiplicacion, $salario_min['Salario']);
        return number_format(max($multiplicacion, $salario_min['Salario']));
    }

    public function getEFC($birthdate)
    {
        // Primero, convertimos las fechas a objetos DateTime.
        $date_o = new DateTime($this->o);
        $date_birthdate = new DateTime($birthdate);

        // Luego, calculamos la diferencia en años.
        $difference = $date_o->diff($date_birthdate);
        $years = $difference->y + $difference->m / 12 + $difference->d / 365.25;

        // Redondeamos el resultado a dos decimales.
        $this->p = $years;
        $years = round($years, 2);
        return $years;
    }

    public function getTT($entry_date)
    {
        // Primero, convertimos las fechas a objetos DateTime.
        $date1 = new DateTime($entry_date);
        $date2 = new DateTime('1994-04-01');

        // Luego, calculamos la diferencia en años.
        $difference = $date1->diff($date2);
        $years = $difference->y + $difference->m / 12 + $difference->d / 365.25;

        // Comparamos si la diferencia es mayor que 15 años.
        if ($years > 15) {
            $this->s = 'SI';
            return "SI";
        } else {
            $this->s = 'NO';
            return "NO";
        }
    }

    public function getTE($E2, $G2)
    {
        // Primero, convertimos las fechas a objetos DateTime.
        $date_V_L100 = new DateTime('1994-04-01');
        $date_G2 = new DateTime($G2);

        // Luego, calculamos la diferencia en años.
        $difference = $date_V_L100->diff($date_G2);
        $years = $difference->y + $difference->m / 12 + $difference->d / 365.25;

        // Comprobamos si E2 es "M" y si la diferencia es mayor que 40 o 35.
        if ($E2 == "M" && $years > 40) {
            $this->r = "SI";
            return "SI";
        } elseif ($E2 != "M" && $years > 35) {
            $this->r = "SI";
            return "SI";
        } else {
            $this->r = "NO";
            return "NO";
        }
    }

    public function getTSP()
    {
        if ($this->r == "SI" || $this->s == "SI") {
            $this->q = "SI";
            return "SI";
        } else {
            $this->q = "NO";
            return "NO";
        }
    }

    public function getFR1($E, $G)
    {
        // Primero, convertimos la fecha a un objeto DateTime.
        $date_G = new DateTime($G);

        // Luego, calculamos el número de días para sumar basado en $E y $this->q.
        if ($E == "M") {
            $days = $this->q == "SI" ? 55 : 62;
        } else {
            $days = $this->q == "SI" ? 55 : 57;
        }
        $days *= 365.25;
        // Sumamos los días a la fecha.
        $date_G->add(new DateInterval('P' . round($days) . 'D'));
        $this->t = $date_G->format('Y-m-d');
        return $date_G->format('Y-m-d');
    }

    public function getFR2($G, $I, $J, $K, $L)
    {
        // Convertir las fechas a objetos DateTime
        $I = new DateTime($I);
        $J = new DateTime($J);
        $G = new DateTime($G);

        $result = 0;

        // Calcula la diferencia entre J, I, K y L
        $difference = $J->diff($I)->days - ($K ?? 0) + ($L ?? 0);

        if ($this->q === "NO") {
            if ($difference < 7000) {
                $resultDate = clone $I;
                $resultDate->modify("+7000 days");
                $result = $resultDate->format('Y-m-d');
            } else {
                $resultDate = clone $I;
                $result = $resultDate->modify("+7000 days")->format('Y-m-d');
            }
        } else {
            $date1 = clone $G;
            $date1->modify("+55 years");

            $date2 = clone $I;
            $date2->modify("+20 years");

            if ($K !== null && $L !== null) {
                $date2->modify("+$L days");
                $date2->modify("-$K days");
            } elseif ($K !== null) {
                $date2->modify("-$K days");
            } elseif ($L !== null) {
                $date2->modify("+$L days");
            }

            $resultDate = $date1 > $date2 ? $date1 : $date2;
            $result = $resultDate->format('Y-m-d');
        }
        $this->u = $result;
        $this->t = $result;
        return $result;
    }

    public function getFRSFC()
    {
        // t == $this->t
        // u == $this->u
        $result = $this->t > $this->u ? $this->t : $this->u;
        $this->v = $result;
        return $result;
    }

    public function getER($G)
    {
        // Convertir $G a un objeto DateTime
        $GDate = new DateTime($G);

        // Calcular la diferencia en días entre V y G
        $difference = (new DateTime($this->v))->diff($GDate)->days;

        // Calcular el valor de (V-G)/365.25
        $result = $difference / 365.25;

        // Comprobar si el resultado es menor que $this->p
        if ($result < $this->p) {
            $this->w = $this->p;
            return number_format($this->p, 2); // Redondear a dos decimales
        } else {
            $this->w = number_format($result, 2);
            return number_format($result, 2); // Redondear a dos decimales
        }
    }

    public function getInt()
    {
        // Redondear hacia abajo y eliminar la parte decimal de $this->w
        $integerPart = intval($this->w);

        // Calcular la diferencia entre $this->w y su parte entera
        $difference = $this->w - $integerPart;
        $this->x = $difference;
        if ($this->x >= 1) {
            $this->x = 0;
            return number_format(0, 4);
        }
        return number_format($difference, 4);
    }

    public function getTimeTotal($I, $K, $L)
    {
        $IDate = new DateTime($I);
        $ODate = new DateTime($this->o);

        // Calcular la diferencia en días entre las fechas y sumar los valores $K, $L y 1
        $difference = $ODate->diff($IDate)->days + $K + $L + 1;

        // Obtener el valor máximo entre 0 y la diferencia calculada
        $result = max(0, $difference);
        $this->y = $result;
        return $result;
    }

    public $z;
    public function getTimeTotalYears()
    {
        $result = $this->y / 365.25;
        $this->z = $result;
        return $result;
    }

    public function getN1()
    {
        $ODate = new DateTime($this->o);
        $VDate = new DateTime($this->v);

        // Invertimos el orden de las fechas si $ODate es posterior a $VDat

        // Obtiene la diferencia entre las fechas (con el orden corregido)
        $interval = $VDate->diff($ODate);

        // Obtiene la cantidad de días en la diferencia
        $daysDifference = $interval->days;
        if ($ODate > $VDate) {
            $this->aa = 0;
            return 0;
        }
        $this->aa = $daysDifference;
        return $daysDifference;
    }

    public function getTCompany($I, $J, $K, $L)
    {
        // Convertir las fechas $I, $J y $this->o a objetos DateTime
        $IDate = new DateTime($I);
        $JDate = new DateTime($J);
        $ODate = new DateTime($this->o);

        // Verificar si J es menor que O
        if ($JDate < $ODate) {
            $result = $JDate->diff($IDate)->days - $K + $L + 1;
        } else {
            $result = $ODate->diff($IDate)->days - $K + $L + 1;
        }

        // Obtener el valor máximo entre 0 y el resultado
        $result = max(0, $result);
        $this->ab = $result;
        return $result;
    }

    public $ac;
    public function getTCompanyYears()
    {
        $result = $this->ab / 365.25;
        $this->ac = $result;
        return $result;
    }

    public function getNT()
    {
        $result = $this->y + $this->aa;
        $this->ad = $result;
        return $result;
    }

    public function getF()
    {
        // Obtener los valores de $this->ad y $this->q
        $ad = $this->ad;
        $q = $this->q;

        // Realizar cálculos basados en las condiciones proporcionadas
        if ($q == "NO") {
            if ($ad <= 8400) {
                $result = 0.65 + 0.02 * ($ad - 7000) / 350;
            } elseif ($ad <= 9800) {
                $result = 0.73 + 0.03 * (($ad - 8400) / 350);
            } else {
                $result = 0.85;
            }
        } else {
            $result = 0.75;
        }
        $this->ae = $result;
        return $result;
    }
    // Esta funcion es generica
    public function getAF()
    {
        $this->af = $this->n;
        $this->af++; // Incrementa af en 1
        return $this->af;
    }

    public function getAG()
    {
        // Obtener el año de la fecha $this->o
        $year = (int)date('Y', strtotime($this->o));

        // Buscar el salario mínimo correspondiente al año
        $salary = 0;
        foreach ($this->salary_min as $item) {
            if ($item['year'] == $year) {
                $salary = $item['Salario'];
                break;
            }
        }

        // Realizar cálculos basados en las condiciones proporcionadas
        if ($this->af < $salary) {
            $result = $salary;
        } elseif ($this->af > $salary * 20) {
            $result = $salary * 20;
        } else {
            $result = $this->af;
        }
        $this->ag = $result;
        return $result;
    }

    public function getAH()
    {
        // Obtener el año de la fecha $this->o
        $year = (int)date('Y', strtotime($this->o));

        // Buscar el salario mínimo correspondiente al año
        $salary = 0;
        foreach ($this->salary_min as $item) {
            if ($item['year'] == $year) {
                $salary = $item['Salario'];
                break;
            }
        }

        // Realizar cálculos basados en las condiciones proporcionadas
        $result = 0;
        $calculation = $this->af * $this->ae;

        if ($calculation < $salary) {
            $result = $salary;
        } elseif ($calculation > $salary * 15) {
            $result = $salary * 15;
        } else {
            $result = $calculation;
        }
        $this->ah = $result;
        return $result;
    }

    public function getAI()
    {
        // Obtener el año de la fecha $this->o
        $year = (int)date('Y', strtotime($this->o));

        // Buscar el salario mínimo correspondiente al año
        $salary = 0;
        foreach ($this->salary_min as $item) {
            if ($item['year'] == $year) {
                $salary = $item['Salario'];
                break;
            }
        }

        // Realizar cálculos basados en las condiciones proporcionadas
        $result = 0;
        $calculation = $this->af * $this->ae;

        if ($calculation < $salary * 5) {
            $result = $salary * 5;
        } elseif ($calculation > $salary * 10) {
            $result = $salary * 10;
        } else {
            $result = $calculation;
        }
        $this->ai = $result;
        return $result;
    }

    public function getAJ($E)
    {
        // Redondear el valor de $this->w para convertirlo en un entero
        $w = round($this->w);

        // Obtener el valor de $this->x
        $x = $this->x;

        // Realizar cálculos basados en la condición proporcionada
        if ($E == "M") {
            $result = $this->getSearchValue($w, 'm_fac_1') * (1 - $x)
                + $this->getSearchValue($w + 1, 'm_fac_1') * $x;
        } else {
            $result = $this->getSearchValue($w, 'f_fac_1') * (1 - $x)
                + $this->getSearchValue($w + 1, 'f_fac_1') * $x;
        }
        $this->aj = $result;
        return $result;
    }

    private function getSearchValue($year, $column)
    {
        // Valor predeterminado en caso de que la propiedad no exista
        $defaultValue = 0;

        // Buscar el valor correspondiente al año en el rango de datos
        foreach ($this->fact as $item) {
            if ($item->age == $year) {
                // Acceder directamente a la propiedad del objeto
                if (isset($item->$column)) {
                    return $item->$column;
                } else {
                    // Mostrar un mensaje de advertencia si la propiedad no existe
                    return $defaultValue;
                }
            }
        }

        // Mostrar un mensaje de advertencia si el año no se encuentra
        return $defaultValue;
    }

    public function getAK($E)
    {
        // Redondear el valor de $this->w para convertirlo en un entero
        $w = round($this->w);

        // Obtener el valor de $this->x
        $x = $this->x;

        // Determinar la columna basada en la condición
        $column = ($E == "M") ? 'm_fac_2' : 'f_fac_2';

        // Realizar cálculos basados en la condición proporcionada
        $result = $this->getSearchValueAK($w, $column) * (1 - $x)
            + $this->getSearchValueAK($w + 1, $column) * $x;

        $this->ak = $result;

        return $result;
    }

    private function getSearchValueAK($year, $column)
    {
        // Valor predeterminado en caso de que la propiedad no exista
        $defaultValue = 0;

        // Buscar el valor correspondiente al año en el rango de datos de FacB
        foreach ($this->fact as $item) {
            // Verificar si el año coincide
            if ($item->age == $year) {
                return $item->$column;
            }
        }
        // Mostrar un mensaje de advertencia si el año no se encuentra
        return $defaultValue;
    }

    public function getAL()
    {
        // Obtener el valor de $this->aa
        $aa = $this->aa;

        // Calcular el resultado de la fórmula
        $result = (pow(1.055, ($aa / 365.25)) - 1) / 0.04471699;
        $this->al = $result;
        return $result;
    }
    public $am;
    public function getAM()
    {
        // Obtener los valores de las columnas relevantes
        $AH = $this->ah;
        $AJ = $this->aj;
        $AI = $this->ai;
        $AK = $this->ak;
        $N = $this->n;
        $AL = $this->al;
        $AA = $this->aa;

        // Calcular el resultado de la fórmula
        $numerator = ($AH * $AJ) + ($AI * $AK) - ($N * $AL);
        $denominator = pow(1.03, ($AA / 365.25));

        $result = $numerator / $denominator;

        // Verificar si el resultado es menor que 0
        if ($result < 0) {
            $this->am = 0;
            return 0;
        } else {
            $this->am = $result;
            return $result;
        }
    }
    public $an;
    public function getAN($G)
    {
        // Convertir la cadena de fecha a un objeto DateTime
        $dateG = new DateTime($G);

        // Calcular la cantidad de días y sumarlo a la fecha
        $days = round($this->w * 365.25);
        $dateG->modify("+$days days");

        // Devolver la fecha formateada como "Y-m-d"
        $this->an = $dateG->format('Y-m-d');
        return $dateG->format('Y-m-d');
    }

    public $ao;
    public function getAO($G)
    {
        //Fcal = $this->Fcal
        $dateFcal = new DateTime($this->Fcal);
        $dateBonoBG2 = new DateTime($G);

        // Calcular la diferencia de días y sumar 1
        $daysDifference = $dateFcal->diff($dateBonoBG2)->days + 1;

        // Calcular el número de años dividido por 365.25
        $years = $daysDifference / 365.25;
        $this->ao = $years;
        return $years;
    }
    public $ap;
    public function getAP($E)
    {
        if (($E == "M" && $this->ao > 75) || ($E == "F" && $this->ao > 70)) {
            $this->ap = 0.5;
            return 0.5;
        } else {
            $this->ap = 1;
            return 1;
        }
    }
    public $aq;
    public function getAQ()
    {
        // Obtener los valores de las variables

        $an2 = new DateTime($this->an);
        $Fcal = new DateTime('2022-12-31'); // Objeto DateTime
        $O2 = new DateTime($this->o);
        $am2 = $this->am;
        $ap =  $this->ap;
        // 68.448,93706

        // 2.870,65126
        $busqueda2 = $this->getDTFP($O2->format('Y-m-d'))->dtfp_4;

        // Calcular el resultado de la fórmula
        $resultado = 0;
        if ($an2 > $Fcal) {
            $busqueda1 = $this->getDTFP($Fcal->format('Y-m-d'))->dtfp_4;
            $resultado = $am2 * ($busqueda1 / $busqueda2);
        } else {
            $busqueda1 = $this->getDTFP($an2->format('Y-m-d'))->dtfp_4;
            $valorFcal = $this->getDTFP($Fcal->format('Y-m-d'))->accumulated;
            // 4677.377384
            $valorAn2 = $this->getDTFP($an2->format('Y-m-d'))->accumulated;

            //1958,862419
            $resultado = $am2 * $busqueda1 / $busqueda2 * $valorFcal / $valorAn2 * $this->ap;
        }
        // ¿Qué sucede si ninguna de las condiciones se cumple?
        // Si no hay un caso claro, podrías agregar un else aquí.
        $this->aq = $resultado;
        return number_format(intval($resultado));
    }



    public function getDTFP($date)
    {
        $record = DTFP::where('date', '<=', $date)
            ->orderByDesc('date')
            ->first();



        return isset($record) ? $record : 0;
    }

    public $ar;
    public function getAR($I)
    {
        // Obtener el valor de $O2 desde la base de datos o de donde sea que lo estés obteniendo
        $O2 = $this->o;

        // Convertir las fechas a objetos DateTime para facilitar la comparación
        $fechaI = new DateTime($I);
        $fechaO2 = new DateTime($O2);

        // Comparar las fechas y retornar 0 si $I es posterior a $O2, de lo contrario, retornar $I
        $this->ar = ($fechaI > $fechaO2) ? 0 : $I;
        return ($fechaI > $fechaO2) ? 0 : $I;
    }
    public $as;
    public function getAS($J)
    {
        // Obtener el valor de $O2 desde la base de datos o de donde sea que lo estés obteniendo
        $O2 = $this->o;

        // Convertir las fechas a objetos DateTime para facilitar la comparación
        $fechaJ = new DateTime($J);
        $fechaO2 = new DateTime($O2);

        // Comparar las fechas y retornar $O2 si $J es posterior a $O2, de lo contrario, retornar $J
        $this->as = ($fechaJ > $fechaO2) ? $O2 : $J;
        return ($fechaJ > $fechaO2) ? $O2 : $J;
    }
    public $at;
    public function getAT($K)
    {
        // Obtener las fechas de AR2 y AS2 desde la base de datos o de donde sea que las estés obteniendo
        $ar = $this->ar;
        $as = $this->as;

        // Obtener el valor de Y2 desde la base de datos o de donde sea que lo estés obteniendo
        $Y2 = $this->y;

        // Convertir las fechas a objetos DateTime para facilitar los cálculos, solo si ar no es cero
        if ($ar != 0) {
            $fechaAR = new DateTime($ar);
        } else {
            // Si ar es cero, asignamos una fecha mínima para evitar errores en la conversión
            $fechaAR = new DateTime('0001-01-01');
        }

        $fechaAS = new DateTime($as);

        // Calcular la diferencia en días entre las fechas AR2 y AS2
        $diferenciaDias = $fechaAS->diff($fechaAR)->days;

        // Calcular el resultado de la fórmula si la diferencia en días es mayor o igual a cero y Y2 es diferente de cero
        if ($diferenciaDias >= 0 && $Y2 != 0) {
            // Realizar la operación
            $resultado = ($diferenciaDias - $K + 1) / $Y2;
        } else {
            // Devolver 0 si la diferencia en días es negativa o si Y2 es igual a cero
            $resultado = 0;
        }
        $this->at = $resultado;
        return $resultado;
    }

    public $au;
    public function getAU()
    {
        // Calcular el resultado multiplicando los dos valores
        $resultado = $this->am * $this->at;
        $this->au = $resultado;
        return $resultado;
    }
    public $av;
    public function getAV()
    {
        $resultado = $this->at * $this->aq;
        $this->av = $resultado;
        return $resultado;
    }
    public $aw;
    public function getAW()
    {
        $fechaAN = new DateTime($this->an);

        // Extraer el año de la fecha
        $year = $fechaAN->format('Y');
        $this->aw = $year;
        return $year;
    }

    public $ax;
    public function getAX()
    {
        $Fcal = new DateTime('2022-12-31');
        $valorAW2 = $this->aw;
        $valorAV2 = $this->av;
        $yearFcal = $Fcal->format('Y');
        $resultado = (intval($valorAW2) <= $yearFcal) ? $valorAV2 : 0;
        $this->ax = $resultado;
        return $resultado;
    }

    public function updateState($id)
    {
        $bonus = ModelsBonusB::find($id);
        $bonus->update([
            'user_id' => auth()->user()->id,
            'bonus_b_m' => $this->m,
            'bonus_b_n' => $this->n,
            'bonus_b_o' => $this->o,
            'bonus_b_p' => $this->p,
            'bonus_b_q' => $this->q,
            'bonus_b_r' => $this->r,
            'bonus_b_s' => $this->s,
            'bonus_b_t' => $this->t,
            'bonus_b_v' => $this->v,
            'bonus_b_w' => $this->w,
            'bonus_b_x' => $this->x,
            'bonus_b_y' => $this->y,
            'bonus_b_z' => $this->z,
            'bonus_b_aa' => $this->aa,
            'bonus_b_ab' => $this->ab,
            'bonus_b_ac' => $this->ac,
            'bonus_b_ad' => $this->ad,
            'bonus_b_af' => $this->af,
            'bonus_b_ag' => $this->ag,
            'bonus_b_ah' => $this->ah,
            'bonus_b_ai' => $this->ai,
            'bonus_b_aj' => $this->aj,
            'bonus_b_ak' => $this->ak,
            'bonus_b_al' => $this->al,
            'bonus_b_am' => $this->am,
            'bonus_b_an' => $this->an,
            'bonus_b_ao' => $this->ao,
            'bonus_b_ap' => $this->ap,
            'bonus_b_aq' => $this->aq,
            'bonus_b_ar' => $this->ar,
            'bonus_b_as' => $this->as,
            'bonus_b_at' => $this->at,
            'bonus_b_av' => $this->av,
            'bonus_b_aw' => $this->aw,
            'bonus_b_ax' => $this->ax,
        ]);
    }
}
