<?php

namespace App\Livewire;

use App\Models\TitleCalculation;
use App\Models\TitleSalary;
use Livewire\Component;
use Carbon\Carbon;
use Livewire\WithPagination;

class TitleCalculationTable extends Component
{
    use WithPagination;

    public int | string $perPage = 10;

    public $parametrosOP = [
        "1994" => 1000,
        "1995" => 1000,
        "1996" => 1000,
        "1997" => 1000,
        "1998" => 1000,
        "1999" => 1000,
        "2000" => 1000,
        "2001" => 1000,
        "2002" => 1000,
        "2003" => 1000,
        "2004" => 1000,
        "2005" => 1050,
        "2006" => 1075,
        "2007" => 1100,
        "2008" => 1125,
        "2009" => 1150,
        "2010" => 1175,
        "2011" => 1200,
        "2012" => 1225,
        "2013" => 1250,
        "2014" => 1275,
        "2015" => 1300,
        "2016" => 1300,
        "2017" => 1300,
        "2018" => 1300,
        "2019" => 1300,
        "2020" => 1300,
        "2021" => 1300,
        "2022" => 1300,
        "2023" => 1300,
        "2024" => 1300,
        "2025" => 1300,
        "2026" => 1300,
        "2027" => 1300,
        "2028" => 1300,
        "2029" => 1300,
        "2030" => 1300,
        "2031" => 1300,
        "2032" => 1300,
        "2033" => 1300,
        "2034" => 1300,
        "2035" => 1300,
        "2036" => 1300,
        "2037" => 1300,
        "2038" => 1300,
        "2039" => 1300,
        "2040" => 1300,
        "2041" => 1300,
        "2042" => 1300,
        "2043" => 1300,
        "2044" => 1300,
        "2045" => 1300,
        "2046" => 1300,
        "2047" => 1300,
        "2048" => 1300,
        "2049" => 1300,
        "2050" => 1300
    ];

    public $salarioMedioNalAB = [
        12 => 1.000000,
        13 => 1.066649,
        14 => 1.135599,
        15 => 1.206678,
        16 => 1.279752,
        17 => 1.354687,
        18 => 1.431251,
        19 => 1.509273,
        20 => 1.588504,
        21 => 1.668693,
        22 => 1.749612,
        23 => 1.830933,
        24 => 1.912388,
        25 => 1.993652,
        26 => 2.074416,
        27 => 2.154318,
        28 => 2.233031,
        29 => 2.310209,
        30 => 2.385489,
        31 => 2.458524,
        32 => 2.528971,
        33 => 2.596463,
        34 => 2.660676,
        35 => 2.721264,
        36 => 2.777921,
        37 => 2.830357,
        38 => 2.878287,
        39 => 2.921441,
        40 => 2.959570,
        41 => 2.992482,
        42 => 3.020004,
        43 => 3.041946,
        44 => 3.058210,
        45 => 3.068682,
        46 => 3.073323,
        47 => 3.072096,
        48 => 3.065019,
        49 => 3.052111,
        50 => 3.033468,
        51 => 3.009187,
        52 => 2.979401,
        53 => 2.944284,
        54 => 2.904026,
        55 => 2.858858,
        56 => 2.809030,
        57 => 2.754790,
        58 => 2.696446,
        59 => 2.634304,
        60 => 2.568691,
        61 => 2.499933,
        62 => 2.428355,
        63 => 2.354341,
        64 => 2.278237,
        65 => 2.200368,
        66 => 2.121119,
        67 => 2.040814,
        68 => 1.959800,
        69 => 1.878421,
        70 => 1.796985,
        71 => 1.715798,
        72 => 1.715798,
        73 => 1.715798,
        74 => 1.715798,
        75 => 1.715798,
        76 => 1.715798,
        77 => 1.715798,
        78 => 1.715798,
        79 => 1.715798,
        80 => 1.715798,
        81 => 1.715798,
        82 => 1.715798,
        83 => 1.715798,
        84 => 1.715798,
        85 => 1.715798,
        86 => 1.715798,
        87 => 1.715798,
        88 => 1.715798,
        89 => 1.715798,
        90 => 1.715798,
        91 => 1.715798,
        92 => 1.715798,
        93 => 1.715798,
        94 => 1.715798,
        95 => 1.715798,
        96 => 1.715798,
        97 => 1.715798,
        98 => 1.715798,
        99 => 1.715798,
        100 => 1.715798,
        101 => 1.715798,
        102 => 1.715798,
        103 => 1.715798,
        104 => 1.715798,
        105 => 1.715798,
        106 => 1.715798,
        107 => 1.715798,
        108 => 1.715798,
        109 => 1.715798,
        110 => 1.715798,
        111 => 1.715798,
        112 => 1.715798,
        113 => 1.715798,
        114 => 1.715798,
        115 => 1.715798
    ];

    public $KTable = [
        45 => ["292,902660", "274,306470", "0,405658", "0,387976"],
        46 => ["289,363306", "270,314638", "0,416089", "0,397905"],
        47 => ["285,734466", "266,230585", "0,426699", "0,408021"],
        48 => ["282,015894", "262,054586", "0,437474", "0,418322"],
        49 => ["278,206428", "257,786433", "0,448415", "0,428811"],
        50 => ["274,306470", "253,425311", "0,459510", "0,439506"],
        51 => ["270,314638", "248,972059", "0,470754", "0,450399"],
        52 => ["266,230585", "244,428700", "0,482131", "0,461486"],
        53 => ["262,054586", "239,799200", "0,493627", "0,472732"],
        54 => ["257,786433", "235,085701", "0,505227", "0,484141"],
        55 => ["253,425311", "230,292048", "0,516908", "0,495685"],
        56 => ["248,972059", "225,421825", "0,528662", "0,507356"],
        57 => ["244,428700", "220,477770", "0,540461", "0,519147"],
        58 => ["239,799200", "215,460655", "0,552303", "0,531066"],
        59 => ["235,085701", "210,372673", "0,564157", "0,543118"],
        60 => ["230,292048", "205,217983", "0,576020", "0,555290"],
        61 => ["225,421825", "199,998605", "0,587864", "0,567590"],
        62 => ["220,477770", "194,725103", "0,599682", "0,579965"],
        63 => ["215,460655", "189,409012", "0,611469", "0,592359"],
        64 => ["210,372673", "184,063215", "0,623210", "0,604708"],
        65 => ["205,217983", "178,699332", "0,634894", "0,616965"],
        66 => ["199,998605", "173,331169", "0,646516", "0,629072"],
        67 => ["194,725103", "167,961786", "0,658065", "0,641034"],
        68 => ["189,409012", "162,595462", "0,669534", "0,652863"],
        69 => ["184,063215", "157,236743", "0,680918", "0,664559"],
        70 => ["178,699332", "151,891771", "0,692206", "0,676128"],
        71 => ["173,331169", "146,561040", "0,703377", "0,687582"],
        72 => ["167,961786", "141,246381", "0,714431", "0,698943"],
        73 => ["162,595462", "135,948647", "0,725339", "0,710243"],
        74 => ["157,236743", "130,666537", "0,736093", "0,721522"],
        75 => ["151,891771", "125,402759", "0,746653", "0,732807"],
        76 => ["146,561040", "120,234869", "0,757035", "0,743705"],
        77 => ["141,246381", "115,131856", "0,767224", "0,754410"],
        78 => ["135,948647", "110,100144", "0,777195", "0,764915"],
        79 => ["130,666537", "105,149919", "0,786943", "0,775201"],
        80 => ["125,402759", "100,288196", "0,796457", "0,785258"],
        81 => ["120,234869", "95,521571", "0,805726", "0,795074"],
        82 => ["115,131856", "90,859047", "0,814737", "0,804635"],
        83 => ["110,140014", "86,305615", "0,823491", "0,813934"],
        84 => ["105,149920", "81,868924", "0,831971", "0,822956"],
        85 => ["100,288196", "77,556154", "0,840171", "0,831692"],
        86 => ["95,521572", "73,370207", "0,848093", "0,840139"],
        87 => ["90,859047", "69,316807", "0,855727", "0,848291"],
        88 => ["86,305615", "65,398513", "0,863076", "0,856144"],
        89 => ["81,869824", "60,619947", "0,870127", "0,863687"],
        90 => ["77,556154", "57,985428", "0,876894", "0,870923"],
        91 => ["73,370207", "54,496387", "0,883365", "0,877850"],
        92 => ["69,316807", "51,153826", "0,889539", "0,884467"],
        93 => ["65,398513", "47,961606", "0,895426", "0,890770"],
        94 => ["60,619947", "44,921267", "0,901035", "0,896762"],
        95 => ["57,985428", "42,039409", "0,906350", "0,902458"],
        96 => ["54,496387", "39,327097", "0,911381", "0,907834"],
        97 => ["51,153826", "36,794566", "0,916138", "0,912885"],
        98 => ["47,961606", "34,467383", "0,920625", "0,917615"],
        99 => ["44,921267", "32,352469", "0,924845", "0,922036"],
        100 => ["42,039409", "30,229621", "0,928762", "0,926056"],
        101 => ["39,327097", "28,155691", "0,932369", "0,929640"],
        102 => ["36,794566", "25,839747", "0,935652", "0,932732"],
        103 => ["34,467383", "23,235407", "0,938449", "0,936750"],
        104 => ["32,352469", "20,823592", "0,940552", "0,938697"],
        105 => ["30,229621", "17,782625", "0,943215", "0,941832"],
        106 => ["28,155691", "17,782625", "0,945971", "0,944688"],
        107 => ["25,839747", "17,782625", "0,950410", "0,948948"],
        108 => ["23,235407", "17,782625", "0,954833", "0,954833"],
        109 => ["20,823592", "17,782625", "0,961448", "0,961448"],
        110 => ["17,782625", "17,782625", "0,980874", "0,970874"]
    ];

    public $O;

    public $P;

    public $R;

    public $V;

    public $Z;

    public $Q;

    public $S;

    public $T;

    public $U;

    public $W;

    public $X;

    public $Y;

    public $AA;

    public $AB;

    public $AC;

    public $AD;

    public $AE;

    public $AF;

    public $AG;

    public $AH;

    public $user_id;

    public $year;

    public function mount($user_id, $year){
        $this->user_id = $user_id;
        $this->year = $year;
    }


    public function render()
    {
        return view('livewire.title-calculation-table', [
            'data' => TitleCalculation::where('user_id', $this->user_id)->where('year', $this->year)->paginate($this->perPage),
        ]);
    }

    public function getO($F, $I){
        // Convertir los parámetros a objetos Carbon si no lo son
        if (!$F instanceof Carbon) {
            $F = Carbon::parse($F);
        }
        if (!$I instanceof Carbon) {
            $I = Carbon::parse($I);
        }

        // Calcular la diferencia en años
        $diferencia = $I->diffInDays($F) / 365;

        // Redondear hacia abajo al cuarto más cercano
        $resultado = floor($diferencia * 4) / 4;
        $this->O = $resultado;
        return $resultado;
    }

    public function getP($F, $G, $M){
        $F = \Carbon\Carbon::parse($F);
        $M = \Carbon\Carbon::parse($M);
        $daysInYear = 365.25;
        $comparisonDate = \Carbon\Carbon::parse('1900-01-01')->addDays(41640);

        if($F->eq(\Carbon\Carbon::parse('0000-00-00'))) {
            $result = $F;
        } else {
            if(intval($G) == 1) {
                if($F->copy()->addDays(60 * $daysInYear)->gt($comparisonDate)) {
                    $result = $F->copy()->addDays(62 * $daysInYear);
                } else {
                    $result = $F->copy()->addDays(60 * $daysInYear);
                }
            } else {
                if($F->copy()->addDays(55 * $daysInYear)->gt($comparisonDate)) {
                    $result = $F->copy()->addDays(57 * $daysInYear);
                } else {
                    $result = $F->copy()->addDays(55 * $daysInYear);
                }
            }
        }

        if($M->gt($result)) {
            $this->P = $M;
            return $M;
        } else {
            $this->P = $result;
            return $result;
        }
    }

    public function getR(){
        $P = $this->P;

        if($P == "0") {
            $this->R = 0;
            return 0;
        } else {
            $year = \Carbon\Carbon::parse($P)->year;
            if(array_key_exists($year, $this->parametrosOP)) {
                $this->R = $this->parametrosOP[$year];
                return $this->parametrosOP[$year];
            } else {
                return "Año no encontrado en los parámetros.";
            }
        }
    }

    public function getV(){
        $O = $this->O;

        if($O == 0) {
            $this->V = 0;
            return 0;
        } else {
            if(array_key_exists($O, $this->salarioMedioNalAB)) {
                $this->V = $this->salarioMedioNalAB[$O];
                return $this->salarioMedioNalAB[$O];
            } else {
                $this->V = 1;
                return 1;
            }
        }
    }

    public function getZ($L, $M, $N){
        $L = \Carbon\Carbon::parse($L);
        $M = \Carbon\Carbon::parse($M);

        try {
            $result = round((($M->diffInDays($L) - $N + 1) / 365.25), 4);
        } catch (\Exception $e) {
            $result = "";
        }
        $this->Z = $result;
        return number_format($result, 4);
    }

    public function getQ($K, $M){
        $P = \Carbon\Carbon::parse($this->P);
        $M = \Carbon\Carbon::parse($M);
        $Z = $this->Z;

        if($P->eq(\Carbon\Carbon::parse('0000-00-00'))) {
            $result = 0;
        } else {
            $result = ($P->diffInDays($M) / 7) + ($Z * 52) + $K;
        }

        $this->Q = round($result, 2);
        return round($result,2);
    }

    public function getS(){
        $Q = $this->Q; // numero
        $R = $this->R; // numero

        if($Q > $R) {
            $this->S = 0;
            return 0;
        } else {
            $result = ceil(($R - $Q) / 52);
            $this->S = $result;
            return $result;
        }
    }

    public function getT($F, $G){
        $S = $this->S; // es un numero
        $F = \Carbon\Carbon::parse($F); // es una fecha
        $daysInYear = 365.25;
        $comparisonDate = \Carbon\Carbon::parse('1900-01-01')->addDays(41640);

        if($F->eq(\Carbon\Carbon::parse('0000-00-00'))) {
            return 0;
        } else {
            if(intval($G) == 1) {
                if($F->copy()->addDays(60 * $daysInYear)->gt($comparisonDate)) {
                    $result = 62;
                } else {
                    $result = 60;
                }
            } else {
                if($F->copy()->addDays(55 * $daysInYear)->gt($comparisonDate)) {
                    $result = 57;
                } else {
                    $result = 55;
                }
            }
        }
        $this->T = $result + $S;
        return $result + $S;
    }

    public function getU(){
        $O = $this->O;
        $S = $this->S;
        $T = $this->T;

        $result = max($T, $O + $S);
        $this->U = $result;
        return $result;
    }

    public function getW(){
        $U = intval($this->U);

        if($U == 0) {
            $this->W = 0;
            return 0;
        } else {
            if(array_key_exists($U, $this->salarioMedioNalAB)) {
                $this->W = $this->salarioMedioNalAB[$U];
                return $this->salarioMedioNalAB[$U];
            } else {
                $this->W = 1;
                return 1;
            }
        }
    }

    public function getX($H){
        $W = $this->W; // es un numero
        $V = $this->V; // es un numero

        try {
            $result = $H * ($W / $V);
        } catch (\Exception $e) {
            $result = 0;
        }

        $this->X = $result;
        return number_format($result,2);
    }

    public function getY(){
        $O = $this->O; // es un numero
        $U = $this->U; // es un numero

        $result = $U - $O;
        $this->Y = $result;
        return number_format($result,2);
    }

    public function getAA($K){
        $result = $K / 52;
        $this->AA = $result;
        return number_format($result,4);
    }

    public function getAB(){
        $Y = $this->Y; // es un numero
        $Z = $this->Z; // es un numero
        $result = $Y + $Z;
        $this->AB = $result;
        return number_format($result,4);
    }

    public function getAC(){
        $AB = $this->AB; // es un numero

        $result = $AB * 52;
        $this->AC = $result;
        return number_format($result,2);
    }

    public function getAD(){
        $AC = $this->AC; // es un numero

        if($AC > 1400) {
            $result =  0.85;
        } elseif($AC > 1200) {
            $result =  0.73 + floor(($AC - 1200) / 50) * 0.03;
        } elseif($AC > 1000) {
            $result =  0.65 + floor(($AC - 1000) / 50) * 0.02;
        } else {
            $result =  0;
        }
        $this->AD = $result;
        return $result;
    }

    public function getAE($M){
        $X = $this->X; // es un numero
        $AD = $this->AD; // es un numero
        $M = \Carbon\Carbon::parse($M); // es una fecha

        $year = $M->year;

        // Obtén el valor correspondiente al año en la tabla de salarios
        $salary = TitleSalary::where('year', $year)->first();

        if($salary) {
            $B = $salary->amount;
        } else {
            $result =  0;
            return $result;
        }

        if($X * $AD < $B) {
            $result =  $B;
        } elseif($X * $AD > $B * 15) {
            $result =  $B * 15;
        } else {
            $result =  $X * $AD;
        }
        $this->AE = $result;
        return number_format($result,2);
    }

    public function getAF($G){
        $U = intval($this->U);

        if(array_key_exists($U, $this->KTable)) {
            $values = $this->KTable[$U];
            if(intval($G) == 1) {
                $result =  $values[0];
            } else {
                $result =  $values[1];
            }
        } else {
            $result =  0;
        }

        $this->AF = $result;

        return $result;
    }

    public function getAG($M){
        $AE = $this->AE; // es un numero
        $M = \Carbon\Carbon::parse($M); // es una fecha

        $year = $M->year;

        // Obtén el valor correspondiente al año en la tabla de salarios
        $salary = TitleSalary::where('year', $year)->first();

        if($salary) {
            $B = $salary->amount;
        } else {
            $this->AG = 0;
            return 0;
        }

        if($AE > $B * 10) {
            $result =  $B * 10;
        } elseif($AE < $B * 5) {
            $result =  $B * 5;
        } else {
            $result =  $AE;
        }

        $this->AG = $result;
        return number_format($result);
    }

    public function getAH($G){
        $U = intval($this->U); // es un numero sin redondear por lo cual toca volverlo entero antes de hacer las demas consultas
        if(array_key_exists($U, $this->KTable)) {
            $values = $this->KTable[$U];
            if(intval($G) == 1) {
                return $values[2];
            } else {
                return $values[3];
            }
        } else {
            return 0;
        }
    }

    public function getAI(){
        $Z = $this->Z; // es un numero
        $AA = $this->AA; // es un numero
        $AB = $this->AB; // es un numero

        try {
            $result = ((pow(1.03, ($Z + $AA)) - 1) / (pow(1.03, $AB) - 1)) * ($Z / ($AA + $Z));
        } catch (\Exception $e) {
            $result = 0;
        }

        return number_format($result,7);
    }

}
