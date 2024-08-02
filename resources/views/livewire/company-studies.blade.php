<div>
    <div class="overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th class="px-4 py-2 border">Company</th>
                    <th class="px-4 py-2 border">Grupo actuarial</th>
                    <th class="px-4 py-2 border">Cedula</th>
                    <th class="px-4 py-2 border">Nombre completo</th>
                    <th class="px-4 py-2 border">Genero</th>
                    <th class="px-4 py-2 border">Estado civil</th>
                    <th class="px-4 py-2 border">Fecha nacimiento</th>
                    <th class="px-4 py-2 border">Estado causante</th>
                    <th class="px-4 py-2 border">Fecha Nacimiento cónguye</th>
                    <th class="px-4 py-2 border">Genero cónguye</th>
                    <th class="px-4 py-2 border">Estado cónyuge</th>
                    <th class="px-4 py-2 border">Fecha Ingreso empresa</th>
                    <th class="px-4 py-2 border">Fecha retiro empresa</th>
                    <th class="px-4 py-2 border">Ingreso base cotización</th>
                    <th class="px-4 py-2 border">Valor mesada</th>
                    
                    <th class="px-4 py-2 border">Mesada 14 </th>
            
                </tr>
            </thead>
            <tbody>
           
                @foreach ($data as $aux)
                <tr>
                <th class="px-4 py-2 border">{{$aux->company->name}}</th> 
                <th class="px-4 py-2 border">{{$aux->actuarial_group->name}}</th>
                <th class="px-4 py-2 border">{{$aux->cc}}</th>
                <th class="px-4 py-2 border">{{$aux->full_name}}</th>
                <th class="px-4 py-2 border">{{$aux->sex}}</th>
                <th class="px-4 py-2 border">{{$aux->civil_status}}</th>
                <th class="px-4 py-2 border">{{$aux->birth_date}}</th>
                <th class="px-4 py-2 border">{{$aux->causing_state}}</th>
                <th class="px-4 py-2 border">{{$aux->date_of_birth_spouse}}</th>
                <th class="px-4 py-2 border">{{$aux->spouse_gender}}</th>
                <th class="px-4 py-2 border">{{$aux->spouse_status}}</th>
                <th class="px-4 py-2 border">{{$aux->company_entry_date}}</th>
                <th class="px-4 py-2 border">{{$aux->company_withdrawal_date}}</th>
                <th class="px-4 py-2 border">{{$aux->income_base_quotation}}</th>
                <th class="px-4 py-2 border">${{number_format($aux->allowance_value)}}</th>
                <th class="px-4 py-2 border">${{number_format($aux->allowance_14)}}</th>
                
                    
                   
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
