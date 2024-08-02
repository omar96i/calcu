<h1 class="fi-header-heading text-2xl font-bold tracking-tight text-gray-950 dark:text-white sm:text-3xl">Lista de estudios</h1>


<div class="flex flex-row">
    <div class="w-1/2 p-4">
        {{$data}}
    </div>
    <div class="w-1/2 p-4">
        <x-filament::modal id="study_dates">
            <x-slot name="trigger">
                <x-filament::button class="w-full">
                    Importar datos
                </x-filament::button>


            </x-slot>

            <div class="w-full">
                <form wire:submit="save" class="w-full flex flex-col mt-2">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="companySelect">Seleccionar Empresa</label>
                        <select id="companySelect" wire:model="company_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            <!-- Aquí puedes agregar tus opciones -->
                             
                            <option value="{{$companies->name}}">{{$companies->name}}</option>
                           
                            
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="fileUpload">Subir Archivo</label>
                        
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="fileUpload">Subir Archivo</label>
                        <input type="file" wire:model="file" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="fileUpload">
                    </div>
                    <div class="flex items-center justify-between mt-3">
                        <button style="--c-400:var(--primary-400);--c-500:var(--primary-500);--c-600:var(--primary-600);" class="fi-btn relative grid-flow-col items-center justify-center font-semibold outline-none transition duration-75 focus:ring-2 rounded-lg fi-color-custom fi-btn-color-primary fi-size-md fi-btn-size-md gap-1.5 px-3 py-2 text-sm inline-grid shadow-sm bg-custom-600 text-white hover:bg-custom-500 dark:bg-custom-500 dark:hover:bg-custom-400 focus:ring-custom-500/50 dark:focus:ring-custom-400/50 fi-ac-btn-action w-full" type="submit">
                            Subir archivo
                        </button>
                    </div>
                </form>
            </div>
        </x-filament::modal>
    </div>
</div>
