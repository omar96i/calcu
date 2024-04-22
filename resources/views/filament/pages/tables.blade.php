<x-filament-panels::page>
    @foreach ($tables as $table)
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <th colspan="9">{{ $table->name }}</th>
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    @if ($table->gender == 'M')
                        <th scope="col" class="px-6 py-3">x</th>
                        <th scope="col" class="px-6 py-3">lx</th>
                        <th scope="col" class="px-6 py-3">dx</th>
                        <th scope="col" class="px-6 py-3">qx</th>
                        <th scope="col" class="px-6 py-3">Px</th>
                        <th scope="col" class="px-6 py-3"></th>
                        <th scope="col" class="px-6 py-3">ex</th>
                        <th scope="col" class="px-6 py-3">µx</th>
                        <th scope="col" class="px-6 py-3">x</th>
                        <th scope="col" class="px-6 py-3 bg-gray-500"></th>
                        <th scope="col" class="px-6 py-3">x</th>
                        <th scope="col" class="px-6 py-3">Dx</th>
                        <th scope="col" class="px-6 py-3">Cx</th>
                        <th scope="col" class="px-6 py-3">Nx</th>
                        <th scope="col" class="px-6 py-3">Mx</th>
                        <th scope="col" class="px-6 py-3">ax</th>
                        <th scope="col" class="px-6 py-3">ax</th>
                        <th scope="col" class="px-6 py-3">ax(12)</th>
                        <th scope="col" class="px-6 py-3">ax(2)</th>
                        <th scope="col" class="px-6 py-3">ax(12)</th>
                        <th scope="col" class="px-6 py-3">axISS</th>
                        <th scope="col" class="px-6 py-3">"P0"</th>
                        <th scope="col" class="px-6 py-3">"P1"</th>
                        <th scope="col" class="px-6 py-3">Ax</th>
                        <th scope="col" class="px-6 py-3"></th>
                        <th scope="col" class="px-6 py-3">x</th>
                    @else
                        <th scope="col" class="px-6 py-3">y</th>
                        <th scope="col" class="px-6 py-3">ly</th>
                        <th scope="col" class="px-6 py-3">dy</th>
                        <th scope="col" class="px-6 py-3">qy</th>
                        <th scope="col" class="px-6 py-3">Py</th>
                        <th scope="col" class="px-6 py-3"></th>
                        <th scope="col" class="px-6 py-3">ey</th>
                        <th scope="col" class="px-6 py-3">µy</th>
                        <th scope="col" class="px-6 py-3">y</th>
                        <th scope="col" class="px-6 py-3 bg-gray-500"></th>
                        <th scope="col" class="px-6 py-3">y</th>
                        <th scope="col" class="px-6 py-3">Dy</th>
                        <th scope="col" class="px-6 py-3">Cy</th>
                        <th scope="col" class="px-6 py-3">Ny</th>
                        <th scope="col" class="px-6 py-3">My</th>
                        <th scope="col" class="px-6 py-3">ay</th>
                        <th scope="col" class="px-6 py-3">ax</th>
                        <th scope="col" class="px-6 py-3">ay(12)</th>
                        <th scope="col" class="px-6 py-3">ay(2)</th>
                        <th scope="col" class="px-6 py-3">ay(12)</th>
                        <th scope="col" class="px-6 py-3">ay(2)</th>
                        <th scope="col" class="px-6 py-3">"P0"</th>
                        <th scope="col" class="px-6 py-3">"P1"</th>
                        <th scope="col" class="px-6 py-3">Ay</th>
                        <th scope="col" class="px-6 py-3"></th>
                        <th scope="col" class="px-6 py-3">y</th>
                    @endif
                </thead>
                <tbody>
                    @foreach ($table->table_values as $item)
                        <tr>
                            <th scope="col" class="px-6 py-3">{{ $item->s }}</th>
                            <td scope="col" class="px-6 py-3">{{ $item->ls }}</td>
                            <td scope="col" class="px-6 py-3">{{ $item->ds }}</td>
                            <td scope="col" class="px-6 py-3">{{ $item->qs }}</td>
                            <td scope="col" class="px-6 py-3">{{ $item->ps }}</td>
                            <td scope="col" class="px-6 py-3">{{ $item->empty }}</td>
                            <td scope="col" class="px-6 py-3">{{ $item->es }}</td>
                            <td scope="col" class="px-6 py-3">{{ $item->mus }}</td>
                            <td scope="col" class="px-6 py-3">{{ $item->s }}</td>
                            <td scope="col" class="px-6 py-3"></td>
                            <td scope="col" class="px-6 py-3">{{$item->s}}</td>
                            <td scope="col" class="px-6 py-3">{{$item->ds_}}</td>
                            <td scope="col" class="px-6 py-3">{{$item->cs}}</td>
                            <td scope="col" class="px-6 py-3">{{$item->ns}}</td>
                            <td scope="col" class="px-6 py-3">{{$item->ms}}</td>
                            <td scope="col" class="px-6 py-3">{{$item->as}}</td>
                            <td scope="col" class="px-6 py-3">{{$item->as_}}</td>
                            <td scope="col" class="px-6 py-3">{{$item->as12}}</td>
                            <td scope="col" class="px-6 py-3">{{$item->as2}}</td>
                            <td scope="col" class="px-6 py-3">{{$item->as12_}}</td>
                            <td scope="col" class="px-6 py-3">{{$item->as2_}}</td>
                            <td scope="col" class="px-6 py-3">{{$item->p0}}</td>
                            <td scope="col" class="px-6 py-3">{{$item->p1}}</td>
                            <td scope="col" class="px-6 py-3">{{$item->as__}}</td>
                            <td scope="col" class="px-6 py-3">{{$item->empty_}}</td>
                            <td scope="col" class="px-6 py-3">{{$item->s}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endforeach
    <!-- Tables axy -->
    @foreach ($axy_tables as $axy_table)
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <th scope="col" class="px-6 py-3">{{ $axy_table->name }}</th>
                    <th scope="col" class="px-6 py-3">15</th>
                    <th scope="col" class="px-6 py-3">16</th>
                    <th scope="col" class="px-6 py-3">17</th>
                    <th scope="col" class="px-6 py-3">18</th>
                    <th scope="col" class="px-6 py-3">19</th>
                    <th scope="col" class="px-6 py-3">20</th>
                    <th scope="col" class="px-6 py-3">21</th>
                    <th scope="col" class="px-6 py-3">22</th>
                    <th scope="col" class="px-6 py-3">23</th>
                    <th scope="col" class="px-6 py-3">24</th>
                    <th scope="col" class="px-6 py-3">25</th>
                    <th scope="col" class="px-6 py-3">26</th>
                    <th scope="col" class="px-6 py-3">27</th>
                    <th scope="col" class="px-6 py-3">28</th>
                    <th scope="col" class="px-6 py-3">29</th>
                    <th scope="col" class="px-6 py-3">30</th>
                    <th scope="col" class="px-6 py-3">31</th>
                    <th scope="col" class="px-6 py-3">32</th>
                    <th scope="col" class="px-6 py-3">33</th>
                    <th scope="col" class="px-6 py-3">34</th>
                    <th scope="col" class="px-6 py-3">35</th>
                    <th scope="col" class="px-6 py-3">36</th>
                    <th scope="col" class="px-6 py-3">37</th>
                    <th scope="col" class="px-6 py-3">38</th>
                    <th scope="col" class="px-6 py-3">39</th>
                    <th scope="col" class="px-6 py-3">40</th>
                    <th scope="col" class="px-6 py-3">41</th>
                    <th scope="col" class="px-6 py-3">42</th>
                    <th scope="col" class="px-6 py-3">43</th>
                    <th scope="col" class="px-6 py-3">44</th>
                    <th scope="col" class="px-6 py-3">45</th>
                    <th scope="col" class="px-6 py-3">46</th>
                    <th scope="col" class="px-6 py-3">47</th>
                    <th scope="col" class="px-6 py-3">48</th>
                    <th scope="col" class="px-6 py-3">49</th>
                    <th scope="col" class="px-6 py-3">50</th>
                    <th scope="col" class="px-6 py-3">51</th>
                    <th scope="col" class="px-6 py-3">52</th>
                    <th scope="col" class="px-6 py-3">53</th>
                    <th scope="col" class="px-6 py-3">54</th>
                    <th scope="col" class="px-6 py-3">55</th>
                    <th scope="col" class="px-6 py-3">56</th>
                    <th scope="col" class="px-6 py-3">57</th>
                    <th scope="col" class="px-6 py-3">58</th>
                    <th scope="col" class="px-6 py-3">59</th>
                    <th scope="col" class="px-6 py-3">60</th>
                    <th scope="col" class="px-6 py-3">61</th>
                    <th scope="col" class="px-6 py-3">62</th>
                    <th scope="col" class="px-6 py-3">63</th>
                    <th scope="col" class="px-6 py-3">64</th>
                    <th scope="col" class="px-6 py-3">65</th>
                    <th scope="col" class="px-6 py-3">66</th>
                    <th scope="col" class="px-6 py-3">67</th>
                    <th scope="col" class="px-6 py-3">68</th>
                    <th scope="col" class="px-6 py-3">69</th>
                    <th scope="col" class="px-6 py-3">70</th>
                    <th scope="col" class="px-6 py-3">71</th>
                    <th scope="col" class="px-6 py-3">72</th>
                    <th scope="col" class="px-6 py-3">73</th>
                    <th scope="col" class="px-6 py-3">74</th>
                    <th scope="col" class="px-6 py-3">75</th>
                    <th scope="col" class="px-6 py-3">76</th>
                    <th scope="col" class="px-6 py-3">77</th>
                    <th scope="col" class="px-6 py-3">78</th>
                    <th scope="col" class="px-6 py-3">79</th>
                    <th scope="col" class="px-6 py-3">80</th>
                    <th scope="col" class="px-6 py-3">81</th>
                    <th scope="col" class="px-6 py-3">82</th>
                    <th scope="col" class="px-6 py-3">83</th>
                    <th scope="col" class="px-6 py-3">84</th>
                    <th scope="col" class="px-6 py-3">85</th>
                    <th scope="col" class="px-6 py-3">86</th>
                    <th scope="col" class="px-6 py-3">87</th>
                    <th scope="col" class="px-6 py-3">88</th>
                    <th scope="col" class="px-6 py-3">89</th>
                    <th scope="col" class="px-6 py-3">90</th>
                    <th scope="col" class="px-6 py-3">91</th>
                    <th scope="col" class="px-6 py-3">92</th>
                    <th scope="col" class="px-6 py-3">93</th>
                    <th scope="col" class="px-6 py-3">94</th>
                    <th scope="col" class="px-6 py-3">95</th>
                    <th scope="col" class="px-6 py-3">96</th>
                    <th scope="col" class="px-6 py-3">97</th>
                    <th scope="col" class="px-6 py-3">98</th>
                    <th scope="col" class="px-6 py-3">99</th>
                    <th scope="col" class="px-6 py-3">100</th>
                    <th scope="col" class="px-6 py-3">101</th>
                    <th scope="col" class="px-6 py-3">102</th>
                    <th scope="col" class="px-6 py-3">103</th>
                    <th scope="col" class="px-6 py-3">104</th>
                    <th scope="col" class="px-6 py-3">105</th>
                    <th scope="col" class="px-6 py-3">106</th>
                    <th scope="col" class="px-6 py-3">107</th>
                    <th scope="col" class="px-6 py-3">108</th>
                    <th scope="col" class="px-6 py-3">109</th>
                    <th scope="col" class="px-6 py-3">110</th>
                </thead>
                <tbody>

                    @foreach ($axy_table->axy_values as $value)
                        <tr>
                            <td>{{ $value->age }}</td>
                            <td>{{ number_format($value->axy_15, 6) }} </td>
                            <td>{{ number_format($value->axy_16, 6) }} </td>
                            <td>{{ number_format($value->axy_17, 6) }} </td>
                            <td>{{ number_format($value->axy_18, 6) }} </td>
                            <td>{{ number_format($value->axy_19, 6) }} </td>
                            <td>{{ number_format($value->axy_20, 6) }} </td>
                            <td>{{ number_format($value->axy_21, 6) }} </td>
                            <td>{{ number_format($value->axy_22, 6) }} </td>
                            <td>{{ number_format($value->axy_23, 6) }} </td>
                            <td>{{ number_format($value->axy_24, 6) }} </td>
                            <td>{{ number_format($value->axy_25, 6) }} </td>
                            <td>{{ number_format($value->axy_26, 6) }} </td>
                            <td>{{ number_format($value->axy_27, 6) }} </td>
                            <td>{{ number_format($value->axy_28, 6) }} </td>
                            <td>{{ number_format($value->axy_29, 6) }} </td>
                            <td>{{ number_format($value->axy_30, 6) }} </td>
                            <td>{{ number_format($value->axy_31, 6) }} </td>
                            <td>{{ number_format($value->axy_32, 6) }} </td>
                            <td>{{ number_format($value->axy_33, 6) }} </td>
                            <td>{{ number_format($value->axy_34, 6) }} </td>
                            <td>{{ number_format($value->axy_35, 6) }} </td>
                            <td>{{ number_format($value->axy_36, 6) }} </td>
                            <td>{{ number_format($value->axy_37, 6) }} </td>
                            <td>{{ number_format($value->axy_38, 6) }} </td>
                            <td>{{ number_format($value->axy_39, 6) }} </td>
                            <td>{{ number_format($value->axy_40, 6) }} </td>
                            <td>{{ number_format($value->axy_41, 6) }} </td>
                            <td>{{ number_format($value->axy_42, 6) }} </td>
                            <td>{{ number_format($value->axy_43, 6) }} </td>
                            <td>{{ number_format($value->axy_44, 6) }} </td>
                            <td>{{ number_format($value->axy_45, 6) }} </td>
                            <td>{{ number_format($value->axy_46, 6) }} </td>
                            <td>{{ number_format($value->axy_47, 6) }} </td>
                            <td>{{ number_format($value->axy_48, 6) }} </td>
                            <td>{{ number_format($value->axy_49, 6) }} </td>
                            <td>{{ number_format($value->axy_50, 6) }} </td>
                            <td>{{ number_format($value->axy_51, 6) }} </td>
                            <td>{{ number_format($value->axy_52, 6) }} </td>
                            <td>{{ number_format($value->axy_53, 6) }} </td>
                            <td>{{ number_format($value->axy_54, 6) }} </td>
                            <td>{{ number_format($value->axy_55, 6) }} </td>
                            <td>{{ number_format($value->axy_56, 6) }} </td>
                            <td>{{ number_format($value->axy_57, 6) }} </td>
                            <td>{{ number_format($value->axy_58, 6) }} </td>
                            <td>{{ number_format($value->axy_59, 6) }} </td>
                            <td>{{ number_format($value->axy_60, 6) }} </td>
                            <td>{{ number_format($value->axy_61, 6) }} </td>
                            <td>{{ number_format($value->axy_62, 6) }} </td>
                            <td>{{ number_format($value->axy_63, 6) }} </td>
                            <td>{{ number_format($value->axy_64, 6) }} </td>
                            <td>{{ number_format($value->axy_65, 6) }} </td>
                            <td>{{ number_format($value->axy_66, 6) }} </td>
                            <td>{{ number_format($value->axy_67, 6) }} </td>
                            <td>{{ number_format($value->axy_68, 6) }} </td>
                            <td>{{ number_format($value->axy_69, 6) }} </td>
                            <td>{{ number_format($value->axy_70, 6) }} </td>
                            <td>{{ number_format($value->axy_71, 6) }} </td>
                            <td>{{ number_format($value->axy_72, 6) }} </td>
                            <td>{{ number_format($value->axy_73, 6) }} </td>
                            <td>{{ number_format($value->axy_74, 6) }} </td>
                            <td>{{ number_format($value->axy_75, 6) }} </td>
                            <td>{{ number_format($value->axy_76, 6) }} </td>
                            <td>{{ number_format($value->axy_77, 6) }} </td>
                            <td>{{ number_format($value->axy_78, 6) }} </td>
                            <td>{{ number_format($value->axy_79, 6) }} </td>
                            <td>{{ number_format($value->axy_80, 6) }} </td>
                            <td>{{ number_format($value->axy_81, 6) }} </td>
                            <td>{{ number_format($value->axy_82, 6) }} </td>
                            <td>{{ number_format($value->axy_83, 6) }} </td>
                            <td>{{ number_format($value->axy_84, 6) }} </td>
                            <td>{{ number_format($value->axy_85, 6) }} </td>
                            <td>{{ number_format($value->axy_86, 6) }} </td>
                            <td>{{ number_format($value->axy_87, 6) }} </td>
                            <td>{{ number_format($value->axy_88, 6) }} </td>
                            <td>{{ number_format($value->axy_89, 6) }} </td>
                            <td>{{ number_format($value->axy_90, 6) }} </td>
                            <td>{{ number_format($value->axy_91, 6) }} </td>
                            <td>{{ number_format($value->axy_92, 6) }} </td>
                            <td>{{ number_format($value->axy_93, 6) }} </td>
                            <td>{{ number_format($value->axy_94, 6) }} </td>
                            <td>{{ number_format($value->axy_95, 6) }} </td>
                            <td>{{ number_format($value->axy_96, 6) }} </td>
                            <td>{{ number_format($value->axy_97, 6) }} </td>
                            <td>{{ number_format($value->axy_98, 6) }} </td>
                            <td>{{ number_format($value->axy_99, 6) }} </td>
                            <td>{{ number_format($value->axy_100, 6) }} </td>
                            <td>{{ number_format($value->axy_101, 6) }} </td>
                            <td>{{ number_format($value->axy_102, 6) }} </td>
                            <td>{{ number_format($value->axy_103, 6) }} </td>
                            <td>{{ number_format($value->axy_104, 6) }} </td>
                            <td>{{ number_format($value->axy_105, 6) }} </td>
                            <td>{{ number_format($value->axy_106, 6) }} </td>
                            <td>{{ number_format($value->axy_107, 6) }} </td>
                            <td>{{ number_format($value->axy_108, 6) }} </td>
                            <td>{{ number_format($value->axy_109, 6) }} </td>
                            <td>{{ number_format($value->axy_110, 6) }} </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endforeach
</x-filament-panels::page>
