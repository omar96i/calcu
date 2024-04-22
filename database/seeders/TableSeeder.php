<?php

namespace Database\Seeders;

use App\Models\InterestRate;
use App\Models\InterestRates;
use App\Models\Table;
use App\Models\TableValues;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $table1 = Table::create([
            'name' => 'TABLA DE MORTALIDAD GENERAL (Res.1555 de 2010 Superfinanciera)- sexo Masculino',
        ]);
        $table2 = Table::create([
            'name' => 'TABLA DE MORTALIDAD GENERAL (Res.1555 de 2010 Superfinanciera)- sexo Femenino',
        ]);
        $table3 = Table::create([
            'name' => 'TABLA DE MORTALIDAD INVALIDOS (Res.585 de 1994 Superbancaria)- sexo Masculino',
        ]);
        $table4 = Table::create([
            'name' => 'TABLA DE MORTALIDAD INVALIDOS (Res.585 de 1994 Superbancaria)- sexo Femenino',
        ]);

        $tables_values1 = [
            ['s' => 15, 'ls' => 1000000],
            ['s' => 16, 'ls' => 999515],
            ['s' => 17, 'ls' => 999019],
            ['s' => 18, 'ls' => 998510],
            ['s' => 19, 'ls' => 997988],
            ['s' => 20, 'ls' => 997451],
            ['s' => 21, 'ls' => 996898],
            ['s' => 22, 'ls' => 996327],
            ['s' => 23, 'ls' => 995736],
            ['s' => 24, 'ls' => 995124],
            ['s' => 25, 'ls' => 994488],
            ['s' => 26, 'ls' => 993826],
            ['s' => 27, 'ls' => 993136],
            ['s' => 28, 'ls' => 992415],
            ['s' => 29, 'ls' => 991660],
            ['s' => 30, 'ls' => 990868],
            ['s' => 31, 'ls' => 990036],
            ['s' => 32, 'ls' => 989159],
            ['s' => 33, 'ls' => 988233],
            ['s' => 34, 'ls' => 987254],
            ['s' => 35, 'ls' => 986216],
            ['s' => 36, 'ls' => 985114],
            ['s' => 37, 'ls' => 983942],
            ['s' => 38, 'ls' => 982693],
            ['s' => 39, 'ls' => 981360],
            ['s' => 40, 'ls' => 979936],
            ['s' => 41, 'ls' => 978411],
            ['s' => 42, 'ls' => 976776],
            ['s' => 43, 'ls' => 975021],
            ['s' => 44, 'ls' => 973135],
            ['s' => 45, 'ls' => 971105],
            ['s' => 46, 'ls' => 968919],
            ['s' => 47, 'ls' => 966561],
            ['s' => 48, 'ls' => 964017],
            ['s' => 49, 'ls' => 961269],
            ['s' => 50, 'ls' => 958298],
            ['s' => 51, 'ls' => 955085],
            ['s' => 52, 'ls' => 951608],
            ['s' => 53, 'ls' => 947843],
            ['s' => 54, 'ls' => 943766],
            ['s' => 55, 'ls' => 939348],
            ['s' => 56, 'ls' => 934604],
            ['s' => 57, 'ls' => 929498],
            ['s' => 58, 'ls' => 923991],
            ['s' => 59, 'ls' => 918039],
            ['s' => 60, 'ls' => 911595],
            ['s' => 61, 'ls' => 904607],
            ['s' => 62, 'ls' => 897019],
            ['s' => 63, 'ls' => 888769],
            ['s' => 64, 'ls' => 879635],
            ['s' => 65, 'ls' => 869557],
            ['s' => 66, 'ls' => 858477],
            ['s' => 67, 'ls' => 846334],
            ['s' => 68, 'ls' => 833069],
            ['s' => 69, 'ls' => 818623],
            ['s' => 70, 'ls' => 802940],
            ['s' => 71, 'ls' => 785968],
            ['s' => 72, 'ls' => 767658],
            ['s' => 73, 'ls' => 747970],
            ['s' => 74, 'ls' => 726872],
            ['s' => 75, 'ls' => 704342],
            ['s' => 76, 'ls' => 680372],
            ['s' => 77, 'ls' => 654970],
            ['s' => 78, 'ls' => 628162],
            ['s' => 79, 'ls' => 599994],
            ['s' => 80, 'ls' => 570538],
            ['s' => 81, 'ls' => 539892],
            ['s' => 82, 'ls' => 508181],
            ['s' => 83, 'ls' => 475562],
            ['s' => 84, 'ls' => 442222],
            ['s' => 85, 'ls' => 408381],
            ['s' => 86, 'ls' => 374288],
            ['s' => 87, 'ls' => 340219],
            ['s' => 88, 'ls' => 306474],
            ['s' => 89, 'ls' => 273371],
            ['s' => 90, 'ls' => 241235],
            ['s' => 91, 'ls' => 210391],
            ['s' => 92, 'ls' => 181152],
            ['s' => 93, 'ls' => 153808],
            ['s' => 94, 'ls' => 128609],
            ['s' => 95, 'ls' => 105758],
            ['s' => 96, 'ls' => 85395],
            ['s' => 97, 'ls' => 67556],
            ['s' => 98, 'ls' => 52206],
            ['s' => 99, 'ls' => 39285],
            ['s' => 100, 'ls' => 28688],
            ['s' => 101, 'ls' => 20255],
            ['s' => 102, 'ls' => 13771],
            ['s' => 103, 'ls' => 8975],
            ['s' => 104, 'ls' => 5580],
            ['s' => 105, 'ls' => 3290],
            ['s' => 106, 'ls' => 1828],
            ['s' => 107, 'ls' => 950],
            ['s' => 108, 'ls' => 458],
            ['s' => 109, 'ls' => 202],
            ['s' => 110, 'ls' => 81],
        ];

        $tables_values2 = [
            ['s' => 15, 'ls' => 1000000,],
            ['s' => 16, 'ls' => 999728,],
            ['s' => 17, 'ls' => 999450,],
            ['s' => 18, 'ls' => 999165,],
            ['s' => 19, 'ls' => 998872,],
            ['s' => 20, 'ls' => 998570,],
            ['s' => 21, 'ls' => 998259,],
            ['s' => 22, 'ls' => 997938,],
            ['s' => 23, 'ls' => 997606,],
            ['s' => 24, 'ls' => 997262,],
            ['s' => 25, 'ls' => 996905,],
            ['s' => 26, 'ls' => 996533,],
            ['s' => 27, 'ls' => 996145,],
            ['s' => 28, 'ls' => 995740,],
            ['s' => 29, 'ls' => 995315,],
            ['s' => 30, 'ls' => 994869,],
            ['s' => 31, 'ls' => 994400,],
            ['s' => 32, 'ls' => 993906,],
            ['s' => 33, 'ls' => 993384,],
            ['s' => 34, 'ls' => 992832,],
            ['s' => 35, 'ls' => 992247,],
            ['s' => 36, 'ls' => 991625,],
            ['s' => 37, 'ls' => 990963,],
            ['s' => 38, 'ls' => 990258,],
            ['s' => 39, 'ls' => 989505,],
            ['s' => 40, 'ls' => 988699,],
            ['s' => 41, 'ls' => 987836,],
            ['s' => 42, 'ls' => 986910,],
            ['s' => 43, 'ls' => 985916,],
            ['s' => 44, 'ls' => 984846,],
            ['s' => 45, 'ls' => 983694,],
            ['s' => 46, 'ls' => 982452,],
            ['s' => 47, 'ls' => 981111,],
            ['s' => 48, 'ls' => 979663,],
            ['s' => 49, 'ls' => 978097,],
            ['s' => 50, 'ls' => 976402,],
            ['s' => 51, 'ls' => 974566,],
            ['s' => 52, 'ls' => 972576,],
            ['s' => 53, 'ls' => 970418,],
            ['s' => 54, 'ls' => 968077,],
            ['s' => 55, 'ls' => 965536,],
            ['s' => 56, 'ls' => 962801,],
            ['s' => 57, 'ls' => 959851,],
            ['s' => 58, 'ls' => 956662,],
            ['s' => 59, 'ls' => 953206,],
            ['s' => 60, 'ls' => 949454,],
            ['s' => 61, 'ls' => 945372,],
            ['s' => 62, 'ls' => 940925,],
            ['s' => 63, 'ls' => 936072,],
            ['s' => 64, 'ls' => 930769,],
            ['s' => 65, 'ls' => 924968,],
            ['s' => 66, 'ls' => 918617,],
            ['s' => 67, 'ls' => 911658,],
            ['s' => 68, 'ls' => 904029,],
            ['s' => 69, 'ls' => 895662,],
            ['s' => 70, 'ls' => 886485,],
            ['s' => 71, 'ls' => 876420,],
            ['s' => 72, 'ls' => 865384,],
            ['s' => 73, 'ls' => 853289,],
            ['s' => 74, 'ls' => 840044,],
            ['s' => 75, 'ls' => 825554,],
            ['s' => 76, 'ls' => 809722,],
            ['s' => 77, 'ls' => 792450,],
            ['s' => 78, 'ls' => 773641,],
            ['s' => 79, 'ls' => 753202,],
            ['s' => 80, 'ls' => 731048,],
            ['s' => 81, 'ls' => 707105,],
            ['s' => 82, 'ls' => 681314,],
            ['s' => 83, 'ls' => 653637,],
            ['s' => 84, 'ls' => 624065,],
            ['s' => 85, 'ls' => 592620,],
            ['s' => 86, 'ls' => 559368,],
            ['s' => 87, 'ls' => 524423,],
            ['s' => 88, 'ls' => 487954,],
            ['s' => 89, 'ls' => 450192,],
            ['s' => 90, 'ls' => 411435,],
            ['s' => 91, 'ls' => 372049,],
            ['s' => 92, 'ls' => 332340,],
            ['s' => 93, 'ls' => 292640,],
            ['s' => 94, 'ls' => 253452,],
            ['s' => 95, 'ls' => 215411,],
            ['s' => 96, 'ls' => 179222,],
            ['s' => 97, 'ls' => 145594,],
            ['s' => 98, 'ls' => 115166,],
            ['s' => 99, 'ls' => 88438,],
            ['s' => 100, 'ls' => 65719,],
            ['s' => 101, 'ls' => 47092,],
            ['s' => 102, 'ls' => 32413,],
            ['s' => 103, 'ls' => 21338,],
            ['s' => 104, 'ls' => 13370,],
            ['s' => 105, 'ls' => 7930,],
            ['s' => 106, 'ls' => 4425,],
            ['s' => 107, 'ls' => 2306,],
            ['s' => 108, 'ls' => 1112,],
            ['s' => 109, 'ls' => 492,],
            ['s' => 110, 'ls' => 197,],
        ];

        $tables_values3 = [
            ['s' => 0, 'ls' =>   1000000.0000],
            ['s' => 1, 'ls' =>   985213.8259],
            ['s' => 2, 'ls' =>   970629.3239],
            ['s' => 3, 'ls' =>   956242.7956],
            ['s' => 4, 'ls' =>   942050.5533],
            ['s' => 5, 'ls' =>   928043.9182],
            ['s' => 6, 'ls' =>   914234.2176],
            ['s' => 7, 'ls' =>   900602.7822],
            ['s' => 8, 'ls' =>   887150.9435],
            ['s' => 9, 'ls' =>   873875.0310],
            ['s' => 10, 'ls' =>   860771.3693],
            ['s' => 11, 'ls' =>   847836.2753],
            ['s' => 12, 'ls' =>   835066.0549],
            ['s' => 13, 'ls' =>   822457.0000],
            ['s' => 14, 'ls' =>   810005.3853],
            ['s' => 15, 'ls' =>   797707.4650],
            ['s' => 16, 'ls' =>   785559.4693],
            ['s' => 17, 'ls' =>   773557.6010],
            ['s' => 18, 'ls' =>   761698.0318],
            ['s' => 19, 'ls' =>   749976.8990],
            ['s' => 20, 'ls' =>   738390.3012],
            ['s' => 21, 'ls' =>   726934.2951],
            ['s' => 22, 'ls' =>   715604.8914],
            ['s' => 23, 'ls' =>   704398.0508],
            ['s' => 24, 'ls' =>   693309.6805],
            ['s' => 25, 'ls' =>   682335.6299],
            ['s' => 26, 'ls' =>   671471.6869],
            ['s' => 27, 'ls' =>   660713.5742],
            ['s' => 28, 'ls' =>   650056.9452],
            ['s' => 29, 'ls' =>   639497.3807],
            ['s' => 30, 'ls' =>   629030.3852],
            ['s' => 31, 'ls' =>   618651.3837],
            ['s' => 32, 'ls' =>   608355.7185],
            ['s' => 33, 'ls' =>   598138.6467],
            ['s' => 34, 'ls' =>   587995.3380],
            ['s' => 35, 'ls' =>   577920.8723],
            ['s' => 36, 'ls' =>   567910.2392],
            ['s' => 37, 'ls' =>   557958.3367],
            ['s' => 38, 'ls' =>   548059.9720],
            ['s' => 39, 'ls' =>   538209.8625],
            ['s' => 40, 'ls' =>   528402.6379],
            ['s' => 41, 'ls' =>   518632.8440],
            ['s' => 42, 'ls' =>   508894.9475],
            ['s' => 43, 'ls' =>   499183.3428],
            ['s' => 44, 'ls' =>   489492.3605],
            ['s' => 45, 'ls' =>   479816.2782],
            ['s' => 46, 'ls' =>   470149.3370],
            ['s' => 47, 'ls' =>   460485.7407],
            ['s' => 48, 'ls' =>   450819.7080],
            ['s' => 49, 'ls' =>   441145.4620],
            ['s' => 50, 'ls' =>   431457.2726],
            ['s' => 51, 'ls' =>   421749.4839],
            ['s' => 52, 'ls' =>   412016.5492],
            ['s' => 53, 'ls' =>   402253.0710],
            ['s' => 54, 'ls' =>   392453.8466],
            ['s' => 55, 'ls' =>   382613.9199],
            ['s' => 56, 'ls' =>   372728.6388],
            ['s' => 57, 'ls' =>   362793.7204],
            ['s' => 58, 'ls' =>   352805.3225],
            ['s' => 59, 'ls' =>   342760.1229],
            ['s' => 60, 'ls' =>   332655.4065],
            ['s' => 61, 'ls' =>   322489.1598],
            ['s' => 62, 'ls' =>   312260.1734],
            ['s' => 63, 'ls' =>   301968.1520],
            ['s' => 64, 'ls' =>   291613.8316],
            ['s' => 65, 'ls' =>   281199.1024],
            ['s' => 66, 'ls' =>   270727.1378],
            ['s' => 67, 'ls' =>   260202.5268],
            ['s' => 68, 'ls' =>   249631.4078],
            ['s' => 69, 'ls' =>   239021.6024],
            ['s' => 70, 'ls' =>   228382.7453],
            ['s' => 71, 'ls' =>   217726.4066],
            ['s' => 72, 'ls' =>   206853.3731],
            ['s' => 73, 'ls' =>   195788.9953],
            ['s' => 74, 'ls' =>   184564.1646],
            ['s' => 75, 'ls' =>   173215.5987],
            ['s' => 76, 'ls' =>   161786.0147],
            ['s' => 77, 'ls' =>   150324.1570],
            ['s' => 78, 'ls' =>   138884.6452],
            ['s' => 79, 'ls' =>   127527.6044],
            ['s' => 80, 'ls' =>   116318.0422],
            ['s' => 81, 'ls' =>   105324.9440],
            ['s' => 82, 'ls' =>   94620.0633],
            ['s' => 83, 'ls' =>   84276.4009],
            ['s' => 84, 'ls' =>   74366.3839],
            ['s' => 85, 'ls' =>   64959.7775],
            ['s' => 86, 'ls' =>   56121.3950],
            ['s' => 87, 'ls' =>   47908.6950],
            ['s' => 88, 'ls' =>   40369.3937],
            ['s' => 89, 'ls' =>   33539.2394],
            ['s' => 90, 'ls' =>   27440.1238],
            ['s' => 91, 'ls' =>   22078.7047],
            ['s' => 92, 'ls' =>   17445.7084],
            ['s' => 93, 'ls' =>   13516.0459],
            ['s' => 94, 'ls' =>   10249.8212],
            ['s' => 95, 'ls' =>   7594.2337],
            ['s' => 96, 'ls' =>   5486.2864],
            ['s' => 97, 'ls' =>   3856.1150],
            ['s' => 98, 'ls' =>   2630.6701],
            ['s' => 99, 'ls' =>   1737.4259],
            ['s' => 100, 'ls' =>   1107.7740],
            ['s' => 101, 'ls' =>   679.7936],
            ['s' => 102, 'ls' =>   400.1708],
            ['s' => 103, 'ls' =>   225.1610],
            ['s' => 104, 'ls' =>   120.6207],
            ['s' => 105, 'ls' =>   61.2612],
            ['s' => 106, 'ls' =>   29.3616],
            ['s' => 107, 'ls' =>   13.2138],
            ['s' => 108, 'ls' =>   5.5534],
            ['s' => 109, 'ls' =>   2.1667],
            ['s' => 110, 'ls' =>   0.7798],
        ];

        $tables_values4 = [
            ['s' => 0, 'ls' =>   1000000.0000,],
            ['s' => 1, 'ls' =>   990888.1492,],
            ['s' => 2, 'ls' =>   981851.3500,],
            ['s' => 3, 'ls' =>   972888.4430,],
            ['s' => 4, 'ls' =>   963998.2462,],
            ['s' => 5, 'ls' =>   955179.5531,],
            ['s' => 6, 'ls' =>   946431.1303,],
            ['s' => 7, 'ls' =>   937751.7157,],
            ['s' => 8, 'ls' =>   929140.0152,],
            ['s' => 9, 'ls' =>   920594.7010,],
            ['s' => 10, 'ls' =>   912114.4085,],
            ['s' => 11, 'ls' =>   903697.7330,],
            ['s' => 12, 'ls' =>   895343.2272,],
            ['s' => 13, 'ls' =>   887049.3974,],
            ['s' => 14, 'ls' =>   878814.7004,],
            ['s' => 15, 'ls' =>   870637.5394,],
            ['s' => 16, 'ls' =>   862516.2603,],
            ['s' => 17, 'ls' =>   854449.1474,],
            ['s' => 18, 'ls' =>   846434.4188,],
            ['s' => 19, 'ls' =>   838470.2220,],
            ['s' => 20, 'ls' =>   830554.6286,],
            ['s' => 21, 'ls' =>   822685.6294,],
            ['s' => 22, 'ls' =>   814861.1283,],
            ['s' => 23, 'ls' =>   807078.9368,],
            ['s' => 24, 'ls' =>   799336.7678,],
            ['s' => 25, 'ls' =>   791632.2284,],
            ['s' => 26, 'ls' =>   783962.8141,],
            ['s' => 27, 'ls' =>   776325.9003,],
            ['s' => 28, 'ls' =>   768718.7357,],
            ['s' => 29, 'ls' =>   761138.4336,],
            ['s' => 30, 'ls' =>   753581.9639,],
            ['s' => 31, 'ls' =>   746046.1441,],
            ['s' => 32, 'ls' =>   738527.6304,],
            ['s' => 33, 'ls' =>   731022.9081,],
            ['s' => 34, 'ls' =>   723528.2817,],
            ['s' => 35, 'ls' =>   716039.8649,],
            ['s' => 36, 'ls' =>   708553.5699,],
            ['s' => 37, 'ls' =>   701065.0971,],
            ['s' => 38, 'ls' =>   693569.9236,],
            ['s' => 39, 'ls' =>   686063.2926,],
            ['s' => 40, 'ls' =>   678540.2018,],
            ['s' => 41, 'ls' =>   670995.3924,],
            ['s' => 42, 'ls' =>   663423.3383,],
            ['s' => 43, 'ls' =>   655818.2347,],
            ['s' => 44, 'ls' =>   648173.9880,],
            ['s' => 45, 'ls' =>   640484.2061,],
            ['s' => 46, 'ls' =>   632742.1890,],
            ['s' => 47, 'ls' =>   624940.9209,],
            ['s' => 48, 'ls' =>   617073.0637,],
            ['s' => 49, 'ls' =>   609130.9518,],
            ['s' => 50, 'ls' =>   601106.5894,],
            ['s' => 51, 'ls' =>   592991.6499,],
            ['s' => 52, 'ls' =>   584777.4786,],
            ['s' => 53, 'ls' =>   576455.0989,],
            ['s' => 54, 'ls' =>   568015.2230,],
            ['s' => 55, 'ls' =>   559448.2673,],
            ['s' => 56, 'ls' =>   550744.3736,],
            ['s' => 57, 'ls' =>   541893.4372,],
            ['s' => 58, 'ls' =>   532885.1430,],
            ['s' => 59, 'ls' =>   523709.0097,],
            ['s' => 60, 'ls' =>   514354.4450,],
            ['s' => 61, 'ls' =>   504810.8112,],
            ['s' => 62, 'ls' =>   495067.5045,],
            ['s' => 63, 'ls' =>   485114.0475,],
            ['s' => 64, 'ls' =>   474940.1980,],
            ['s' => 65, 'ls' =>   464536.0752,],
            ['s' => 66, 'ls' =>   453892.3040,],
            ['s' => 67, 'ls' =>   443000.1797,],
            ['s' => 68, 'ls' =>   431851.8547,],
            ['s' => 69, 'ls' =>   420440.5474,],
            ['s' => 70, 'ls' =>   408760.7745,],
            ['s' => 71, 'ls' =>   396808.6078,],
            ['s' => 72, 'ls' =>   384175.8805,],
            ['s' => 73, 'ls' =>   370850.0849,],
            ['s' => 74, 'ls' =>   356825.7036,],
            ['s' => 75, 'ls' =>   342105.7433,],
            ['s' => 76, 'ls' =>   326703.3736,],
            ['s' => 77, 'ls' =>   310643.6391,],
            ['s' => 78, 'ls' =>   293965.1837,],
            ['s' => 79, 'ls' =>   276721.9103,],
            ['s' => 80, 'ls' =>   258984.4718,],
            ['s' => 81, 'ls' =>   240841.4633,],
            ['s' => 82, 'ls' =>   222400.1636,],
            ['s' => 83, 'ls' =>   203786.6524,],
            ['s' => 84, 'ls' =>   185145.1137,],
            ['s' => 85, 'ls' =>   166636.1437,],
            ['s' => 86, 'ls' =>   148433.8937,],
            ['s' => 87, 'ls' =>   130721.9293,],
            ['s' => 88, 'ls' =>   113687.7642,],
            ['s' => 89, 'ls' =>   97516.1352,],
            ['s' => 90, 'ls' =>   82381.2333,],
            ['s' => 91, 'ls' =>   68438.2752,],
            ['s' => 92, 'ls' =>   55814.9785,],
            ['s' => 93, 'ls' =>   44603.6690,],
            ['s' => 94, 'ls' =>   34854.8574,],
            ['s' => 95, 'ls' =>   26573.1467,],
            ['s' => 96, 'ls' =>   19716.2228,],
            ['s' => 97, 'ls' =>   14197.4239,],
            ['s' => 98, 'ls' =>   9891.9816,],
            ['s' => 99, 'ls' =>   6646.5193,],
            ['s' => 100, 'ls' =>   4290.8637,],
            ['s' => 101, 'ls' =>   2650.7878,],
            ['s' => 102, 'ls' =>   1560.0803,],
            ['s' => 103, 'ls' =>   870.4146,],
            ['s' => 104, 'ls' =>   457.8907,],
            ['s' => 105, 'ls' =>   225.7692,],
            ['s' => 106, 'ls' =>   103.6533,],
            ['s' => 107, 'ls' =>   43.9923,],
            ['s' => 108, 'ls' =>   17.1233,],
            ['s' => 109, 'ls' =>   6.0590,],
            ['s' => 110, 'ls' =>   1.9303,],
        ];

        $tables_values1 = array_reverse($tables_values1);
        $tables_values2 = array_reverse($tables_values2);
        $tables_values3 = array_reverse($tables_values3);
        $tables_values4 = array_reverse($tables_values4);

        foreach ($tables_values1 as $index => $record) {
            $interes_rate = InterestRate::first();

            $i = $interes_rate->i;
            $k = $interes_rate->k;

            $last_record = TableValues::orderBy('id', 'desc')->where('table_id', $table1->id)->first();
            $next_record =  isset($tables_values1[$index + 1]) ? $tables_values1[$index + 1] : ['s' => 0, 'ls' => 0];

            $table_value = new TableValues;
            $table_value->table_id = $table1->id;
            $table_value->interest_rate_id = $interes_rate->id;
            $table_value->s = $record['s'];
            $table_value->ls = $record['ls'];

            if (isset($last_record)) {
                $table_value->ds = $record['ls'] - $last_record->ls;
                $table_value->qs = $table_value->ds / $table_value->ls;
                $table_value->ps = 1 - $table_value->qs;
                $table_value->empty = $last_record->empty + $table_value->ls;
                $table_value->es = ($last_record->empty / $table_value->ls) + 0.5;
                $table_value->mus =  ($next_record['ls'] - $last_record->ls) / (2 * $table_value->ls);
                $table_value->ds_ = (1 / ($i + 1) ** $table_value->s) * $table_value->ls; // =SUM(1/($D$5+1)^C19)*D19
                $table_value->cs = (1 / ($i + 1) ** ($table_value->s + 1)) * $table_value->ds;
                $table_value->ns = $last_record->ns + $table_value->ds_;
                $table_value->ms = $last_record->ms + $table_value->cs;
                $table_value->as = ($last_record->ns / $table_value->ds_) + 1;
                $table_value->as_ = +$table_value->as - 1;
                $table_value->as12 = (1 + (11 / 24) * $k) * ($table_value->as_) + ((11 / 24) * (1 + $k)); //(1+(11/24)*$D$4)*(S19)+((11/24)*(1+$D$4))
                $table_value->as2 = (1 + (1 / 4) * $k) * ($table_value->as - 1) + ((1 / 4) * (1 + $k)); // (1+(1/4)*$D$4)*(R19-1)+((1/4)*(1+$D$4))
                $table_value->as12_ = ((1 + (11 / 24) * $k) / (1 + $k)) * ($table_value->as - 1) + ((11 / 24)); // ( (1+ (11/24) *$D$4) / (1+$D$4) )*(R114-1)+((11/24)))
                $table_value->as2_ = (1 / (1 + $k)) * ($table_value->as - 1); // (1/(1+$D$4))*(R114-1)
                $table_value->p0 = $table_value->as12 * 12 + $table_value->as2 * 2; // T114*12+U114*2
                $table_value->p1 = $table_value->as12 * 12 + $table_value->as_; // T114*12+S114
                $table_value->as__ = $table_value->ms / $table_value->ds_; // Q19/N19
                $table_value->empty_ = 2 * $table_value->as2 - $table_value->as_; // Q19/N19

            } else {
                $table_value->ds = $record['ls'] - 0;
                $table_value->qs = $table_value->ds / $table_value->ls;
                $table_value->ps = 1 - $table_value->qs;
                $table_value->empty = 0 + $table_value->ls;
                $table_value->es = (0 / $table_value->ls) + 0.5;
                $table_value->mus =  ((isset($next_record['ls']) ? $next_record['ls'] : 0) - 0) / (2 * $table_value->ls);
                $table_value->ds_ = (1 / ($i + 1) ** $table_value->s) * $table_value->ls;
                $table_value->cs = (1 / ($i + 1) ** ($table_value->s + 1)) * $table_value->ds;
                $table_value->ns = 0 + $table_value->ds_;
                $table_value->ms = 0 + $table_value->cs;
                $table_value->as = (0 / $table_value->ds_) + 1;
                $table_value->as_ = +$table_value->as - 1;
                $table_value->as12 = (1 + (11 / 24) * $k) * ($table_value->as_) + ((11 / 24) * (1 + $k)); //(1+(11/24)*$D$4)*(S114)+((11/24)*(1+$D$4)))
                $table_value->as2 = (1 + (1 / 4) * $k) * ($table_value->as - 1) + ((1 / 4) * (1 + $k)); // (1+(1/4)*$D$4)*(R19-1)+((1/4)*(1+$D$4))
                $table_value->as12_ = ((1 + (11 / 24) * $k) / (1 + $k)) * ($table_value->as - 1) + ((11 / 24)); // (((1+(11/24)*$D$4)/(1+$D$4))*(R19-1)+((11/24))
                $table_value->as2_ = (1 / (1 + $k)) * ($table_value->as - 1); // (1/(1+$D$4))*(R114-1)
                $table_value->p0 = $table_value->as12 * 12 + $table_value->as2 * 2; // T114*12+U114*2
                $table_value->p1 = $table_value->as12 * 12 + $table_value->as_; // T114*12+S114
                $table_value->as__ = $table_value->ms / $table_value->ds_; // Q19/N19
                $table_value->empty_ = 2 * $table_value->as2 - $table_value->as_; // 2*U19-S19
            }

            $table_value->save();
        }

        foreach ($tables_values2 as $index => $record) {
            $interes_rate = InterestRate::first();

            $i = $interes_rate->i;
            $k = $interes_rate->k;

            $last_record = TableValues::orderBy('id', 'desc')->where('table_id', $table2->id)->first();
            $next_record =  isset($tables_values2[$index + 1]) ? $tables_values2[$index + 1] : ['s' => 0, 'ls' => 0];

            $table_value = new TableValues;
            $table_value->table_id = $table2->id;
            $table_value->interest_rate_id = $interes_rate->id;
            $table_value->s = $record['s'];
            $table_value->ls = $record['ls'];

            if (isset($last_record)) {
                $table_value->ds = $record['ls'] - $last_record->ls;
                $table_value->qs = $table_value->ds / $table_value->ls;
                $table_value->ps = 1 - $table_value->qs;
                $table_value->empty = $last_record->empty + $table_value->ls;
                $table_value->es = ($last_record->empty / $table_value->ls) + 0.5;
                $table_value->mus =  ($next_record['ls'] - $last_record->ls) / (2 * $table_value->ls);
                $table_value->ds_ = (1 / ($i + 1) ** $table_value->s) * $table_value->ls; // =SUM(1/($D$5+1)^C19)*D19
                $table_value->cs = (1 / ($i + 1) ** ($table_value->s + 1)) * $table_value->ds;
                $table_value->ns = $last_record->ns + $table_value->ds_;
                $table_value->ms = $last_record->ms + $table_value->cs;
                $table_value->as = ($last_record->ns / $table_value->ds_) + 1;
                $table_value->as_ = +$table_value->as - 1;
                $table_value->as12 = (1 + (11 / 24) * $k) * ($table_value->as_) + ((11 / 24) * (1 + $k)); //(1+(11/24)*$D$4)*(S19)+((11/24)*(1+$D$4))
                $table_value->as2 = (1 + (1 / 4) * $k) * ($table_value->as - 1) + ((1 / 4) * (1 + $k)); // (1+(1/4)*$D$4)*(R19-1)+((1/4)*(1+$D$4))
                $table_value->as12_ = ((1 + (11 / 24) * $k) / (1 + $k)) * ($table_value->as - 1) + ((11 / 24)); // ( (1+ (11/24) *$D$4) / (1+$D$4) )*(R114-1)+((11/24)))
                $table_value->as2_ = (1 / (1 + $k)) * ($table_value->as - 1); // (1/(1+$D$4))*(R114-1)
                $table_value->p0 = $table_value->as12 * 12 + $table_value->as2 * 2; // T114*12+U114*2
                $table_value->p1 = $table_value->as12 * 12 + $table_value->as_; // T114*12+S114
                $table_value->as__ = $table_value->ms / $table_value->ds_; // Q19/N19
                $table_value->empty_ = 2 * $table_value->as2 - $table_value->as_; // Q19/N19

            } else {
                $table_value->ds = $record['ls'] - 0;
                $table_value->qs = $table_value->ds / $table_value->ls;
                $table_value->ps = 1 - $table_value->qs;
                $table_value->empty = 0 + $table_value->ls;
                $table_value->es = (0 / $table_value->ls) + 0.5;
                $table_value->mus =  ((isset($next_record['ls']) ? $next_record['ls'] : 0) - 0) / (2 * $table_value->ls);
                $table_value->ds_ = (1 / ($i + 1) ** $table_value->s) * $table_value->ls;
                $table_value->cs = (1 / ($i + 1) ** ($table_value->s + 1)) * $table_value->ds;
                $table_value->ns = 0 + $table_value->ds_;
                $table_value->ms = 0 + $table_value->cs;
                $table_value->as = (0 / $table_value->ds_) + 1;
                $table_value->as_ = +$table_value->as - 1;
                $table_value->as12 = (1 + (11 / 24) * $k) * ($table_value->as_) + ((11 / 24) * (1 + $k)); //(1+(11/24)*$D$4)*(S114)+((11/24)*(1+$D$4)))
                $table_value->as2 = (1 + (1 / 4) * $k) * ($table_value->as - 1) + ((1 / 4) * (1 + $k)); // (1+(1/4)*$D$4)*(R19-1)+((1/4)*(1+$D$4))
                $table_value->as12_ = ((1 + (11 / 24) * $k) / (1 + $k)) * ($table_value->as - 1) + ((11 / 24)); // (((1+(11/24)*$D$4)/(1+$D$4))*(R19-1)+((11/24))
                $table_value->as2_ = (1 / (1 + $k)) * ($table_value->as - 1); // (1/(1+$D$4))*(R114-1)
                $table_value->p0 = $table_value->as12 * 12 + $table_value->as2 * 2; // T114*12+U114*2
                $table_value->p1 = $table_value->as12 * 12 + $table_value->as_; // T114*12+S114
                $table_value->as__ = $table_value->ms / $table_value->ds_; // Q19/N19
                $table_value->empty_ = 2 * $table_value->as2 - $table_value->as_; // 2*U19-S19
            }

            $table_value->save();
        }

        foreach ($tables_values3 as $index => $record) {
            $interes_rate = InterestRate::first();

            $i = $interes_rate->i;
            $k = $interes_rate->k;

            $last_record = TableValues::orderBy('id', 'desc')->where('table_id', $table3->id)->first();
            $next_record =  isset($tables_values3[$index + 1]) ? $tables_values3[$index + 1] : ['s' => 0, 'ls' => 0];

            $table_value = new TableValues;
            $table_value->table_id = $table3->id;
            $table_value->interest_rate_id = $interes_rate->id;
            $table_value->s = $record['s'];
            $table_value->ls = $record['ls'];

            if (isset($last_record)) {
                $table_value->ds = $record['ls'] - $last_record->ls;
                $table_value->qs = $table_value->ds / $table_value->ls;
                $table_value->ps = 1 - $table_value->qs;
                $table_value->empty = $last_record->empty + $table_value->ls;
                $table_value->es = ($last_record->empty / $table_value->ls) + 0.5;
                $table_value->mus =  ($next_record['ls'] - $last_record->ls) / (2 * $table_value->ls);
                $table_value->ds_ = (1 / ($i + 1) ** $table_value->s) * $table_value->ls; // =SUM(1/($D$5+1)^C19)*D19
                $table_value->cs = (1 / ($i + 1) ** ($table_value->s + 1)) * $table_value->ds;
                $table_value->ns = $last_record->ns + $table_value->ds_;
                $table_value->ms = $last_record->ms + $table_value->cs;
                $table_value->as = ($last_record->ns / $table_value->ds_) + 1;
                $table_value->as_ = +$table_value->as - 1;
                $table_value->as12 = (1 + (11 / 24) * $k) * ($table_value->as_) + ((11 / 24) * (1 + $k)); //(1+(11/24)*$D$4)*(S19)+((11/24)*(1+$D$4))
                $table_value->as2 = (1 + (1 / 4) * $k) * ($table_value->as - 1) + ((1 / 4) * (1 + $k)); // (1+(1/4)*$D$4)*(R19-1)+((1/4)*(1+$D$4))
                $table_value->as12_ = ((1 + (11 / 24) * $k) / (1 + $k)) * ($table_value->as - 1) + ((11 / 24)); // ( (1+ (11/24) *$D$4) / (1+$D$4) )*(R114-1)+((11/24)))
                $table_value->as2_ = (1 / (1 + $k)) * ($table_value->as - 1); // (1/(1+$D$4))*(R114-1)
                $table_value->p0 = $table_value->as12 * 12 + $table_value->as2 * 2; // T114*12+U114*2
                $table_value->p1 = $table_value->as12 * 12 + $table_value->as_; // T114*12+S114
                $table_value->as__ = $table_value->ms / $table_value->ds_; // Q19/N19
                $table_value->empty_ = 2 * $table_value->as2 - $table_value->as_; // Q19/N19

            } else {
                $table_value->ds = $record['ls'] - 0;
                $table_value->qs = $table_value->ds / $table_value->ls;
                $table_value->ps = 1 - $table_value->qs;
                $table_value->empty = 0 + $table_value->ls;
                $table_value->es = (0 / $table_value->ls) + 0.5;
                $table_value->mus =  ((isset($next_record['ls']) ? $next_record['ls'] : 0) - 0) / (2 * $table_value->ls);
                $table_value->ds_ = (1 / ($i + 1) ** $table_value->s) * $table_value->ls;
                $table_value->cs = (1 / ($i + 1) ** ($table_value->s + 1)) * $table_value->ds;
                $table_value->ns = 0 + $table_value->ds_;
                $table_value->ms = 0 + $table_value->cs;
                $table_value->as = (0 / $table_value->ds_) + 1;
                $table_value->as_ = +$table_value->as - 1;
                $table_value->as12 = (1 + (11 / 24) * $k) * ($table_value->as_) + ((11 / 24) * (1 + $k)); //(1+(11/24)*$D$4)*(S114)+((11/24)*(1+$D$4)))
                $table_value->as2 = (1 + (1 / 4) * $k) * ($table_value->as - 1) + ((1 / 4) * (1 + $k)); // (1+(1/4)*$D$4)*(R19-1)+((1/4)*(1+$D$4))
                $table_value->as12_ = ((1 + (11 / 24) * $k) / (1 + $k)) * ($table_value->as - 1) + ((11 / 24)); // (((1+(11/24)*$D$4)/(1+$D$4))*(R19-1)+((11/24))
                $table_value->as2_ = (1 / (1 + $k)) * ($table_value->as - 1); // (1/(1+$D$4))*(R114-1)
                $table_value->p0 = $table_value->as12 * 12 + $table_value->as2 * 2; // T114*12+U114*2
                $table_value->p1 = $table_value->as12 * 12 + $table_value->as_; // T114*12+S114
                $table_value->as__ = $table_value->ms / $table_value->ds_; // Q19/N19
                $table_value->empty_ = 2 * $table_value->as2 - $table_value->as_; // 2*U19-S19
            }

            $table_value->save();
        }

        foreach ($tables_values4 as $index => $record) {
            $interes_rate = InterestRate::first();

            $i = $interes_rate->i;
            $k = $interes_rate->k;

            $last_record = TableValues::orderBy('id', 'desc')->where('table_id', $table4->id)->first();
            $next_record =  isset($tables_values4[$index + 1]) ? $tables_values4[$index + 1] : ['s' => 0, 'ls' => 0];

            $table_value = new TableValues;
            $table_value->table_id = $table4->id;
            $table_value->interest_rate_id = $interes_rate->id;
            $table_value->s = $record['s'];
            $table_value->ls = $record['ls'];

            if (isset($last_record)) {
                $table_value->ds = $record['ls'] - $last_record->ls;
                $table_value->qs = $table_value->ds / $table_value->ls;
                $table_value->ps = 1 - $table_value->qs;
                $table_value->empty = $last_record->empty + $table_value->ls;
                $table_value->es = ($last_record->empty / $table_value->ls) + 0.5;
                $table_value->mus =  ($next_record['ls'] - $last_record->ls) / (2 * $table_value->ls);
                $table_value->ds_ = (1 / ($i + 1) ** $table_value->s) * $table_value->ls; // =SUM(1/($D$5+1)^C19)*D19
                $table_value->cs = (1 / ($i + 1) ** ($table_value->s + 1)) * $table_value->ds;
                $table_value->ns = $last_record->ns + $table_value->ds_;
                $table_value->ms = $last_record->ms + $table_value->cs;
                $table_value->as = ($last_record->ns / $table_value->ds_) + 1;
                $table_value->as_ = +$table_value->as - 1;
                $table_value->as12 = (1 + (11 / 24) * $k) * ($table_value->as_) + ((11 / 24) * (1 + $k)); //(1+(11/24)*$D$4)*(S19)+((11/24)*(1+$D$4))
                $table_value->as2 = (1 + (1 / 4) * $k) * ($table_value->as - 1) + ((1 / 4) * (1 + $k)); // (1+(1/4)*$D$4)*(R19-1)+((1/4)*(1+$D$4))
                $table_value->as12_ = ((1 + (11 / 24) * $k) / (1 + $k)) * ($table_value->as - 1) + ((11 / 24)); // ( (1+ (11/24) *$D$4) / (1+$D$4) )*(R114-1)+((11/24)))
                $table_value->as2_ = (1 / (1 + $k)) * ($table_value->as - 1); // (1/(1+$D$4))*(R114-1)
                $table_value->p0 = $table_value->as12 * 12 + $table_value->as2 * 2; // T114*12+U114*2
                $table_value->p1 = $table_value->as12 * 12 + $table_value->as_; // T114*12+S114
                $table_value->as__ = $table_value->ms / $table_value->ds_; // Q19/N19
                $table_value->empty_ = 2 * $table_value->as2 - $table_value->as_; // Q19/N19

            } else {
                $table_value->ds = $record['ls'] - 0;
                $table_value->qs = $table_value->ds / $table_value->ls;
                $table_value->ps = 1 - $table_value->qs;
                $table_value->empty = 0 + $table_value->ls;
                $table_value->es = (0 / $table_value->ls) + 0.5;
                $table_value->mus =  ((isset($next_record['ls']) ? $next_record['ls'] : 0) - 0) / (2 * $table_value->ls);
                $table_value->ds_ = (1 / ($i + 1) ** $table_value->s) * $table_value->ls;
                $table_value->cs = (1 / ($i + 1) ** ($table_value->s + 1)) * $table_value->ds;
                $table_value->ns = 0 + $table_value->ds_;
                $table_value->ms = 0 + $table_value->cs;
                $table_value->as = (0 / $table_value->ds_) + 1;
                $table_value->as_ = +$table_value->as - 1;
                $table_value->as12 = (1 + (11 / 24) * $k) * ($table_value->as_) + ((11 / 24) * (1 + $k)); //(1+(11/24)*$D$4)*(S114)+((11/24)*(1+$D$4)))
                $table_value->as2 = (1 + (1 / 4) * $k) * ($table_value->as - 1) + ((1 / 4) * (1 + $k)); // (1+(1/4)*$D$4)*(R19-1)+((1/4)*(1+$D$4))
                $table_value->as12_ = ((1 + (11 / 24) * $k) / (1 + $k)) * ($table_value->as - 1) + ((11 / 24)); // (((1+(11/24)*$D$4)/(1+$D$4))*(R19-1)+((11/24))
                $table_value->as2_ = (1 / (1 + $k)) * ($table_value->as - 1); // (1/(1+$D$4))*(R114-1)
                $table_value->p0 = $table_value->as12 * 12 + $table_value->as2 * 2; // T114*12+U114*2
                $table_value->p1 = $table_value->as12 * 12 + $table_value->as_; // T114*12+S114
                $table_value->as__ = $table_value->ms / $table_value->ds_; // Q19/N19
                $table_value->empty_ = 2 * $table_value->as2 - $table_value->as_; // 2*U19-S19
            }

            $table_value->save();
        }
    }
}
