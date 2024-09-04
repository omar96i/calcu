<x-filament-panels::page>
    <x-filament::tabs>
        <x-filament::tabs.item wire:click="setPage('calculopension')" :active="$page === 'calculopension'" icon="heroicon-m-clipboard">
            Información Base
        </x-filament::tabs.item>
        <x-filament::tabs.item icon="heroicon-m-arrow-up-tray" wire:click="openModal()">
            Importar datos
        </x-filament::tabs.item>
    </x-filament::tabs>
    @if ($page == 'calculopension')
        {{-- Calculo content --}}
        <x-filament::section>
            <x-slot name="heading">
                Información Base
            </x-slot>
            <div class="gap-4">
                <div>
                    <label for="">Selecciona el año</label>
                    <x-filament::input.wrapper>
                        <x-filament::input.select wire:model.live="year_calculation" wire:change="closeTable()">
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                            <option value="2026">2026</option>
                            <option value="2027">2027</option>
                            <option value="2028">2028</option>
                            <option value="2029">2029</option>
                            <option value="2030">2030</option>
                        </x-filament::input.select>
                    </x-filament::input.wrapper>
                </div>
                <div class="mt-3">
                    <label for="">Calcular?</label>
                    <x-filament::input.wrapper>
                        <x-filament::input.select wire:model.live="calcular">
                            <option value="SI">SI</option>
                            <option value="NO">NO</option>
                        </x-filament::input.select>
                    </x-filament::input.wrapper>
                </div>
                @if ($calcular == 'SI')
                    <x-filament::fieldset class="mt-3">
                        <x-slot name="label">
                            Valores requeridos para calcular
                        </x-slot>
                        <div class="grid grid-cols-3 gap-4">
                            <div class="mt-3">
                                <label for="">Parametros</label>
                                <x-filament::input.wrapper>
                                    <x-filament::input type="text" wire:model.live="parametrosd17" />
                                </x-filament::input.wrapper>
                            </div>
                            <div class="mt-3">
                                <label for="">SMMLV</label>
                                <x-filament::input.wrapper>
                                    <x-filament::input type="text" wire:model.live="smmlv" />
                                </x-filament::input.wrapper>
                            </div>
                            <div class="mt-3">
                                <label for="">K_</label>

                                <x-filament::input.wrapper>
                                    <x-filament::input type="text" wire:model.live="K_" />
                                </x-filament::input.wrapper>
                            </div>
                            <div class="mt-3">
                                <label for="">J</label>
                                <x-filament::input.wrapper>
                                    <x-filament::input type="text" wire:model.live="j" />
                                </x-filament::input.wrapper>
                            </div>
                            <div class="mt-3">
                                <label for="">JS</label>
                                <x-filament::input.wrapper>
                                    <x-filament::input type="text" wire:model.live="js" />
                                </x-filament::input.wrapper>
                            </div>
                            <div class="mt-3">
                                <label for="">JM</label>
                                <x-filament::input.wrapper>
                                    <x-filament::input type="text" wire:model.live="jm" />
                                </x-filament::input.wrapper>
                            </div>
                            <div class="mt-3">
                                <label for="">I</label>
                                <x-filament::input.wrapper>
                                    <x-filament::input type="text" wire:model.live="i" />
                                </x-filament::input.wrapper>
                            </div>
                            <div class="mt-3">
                                <label for="">TTM</label>
                                <x-filament::input.wrapper>
                                    <x-filament::input type="text" wire:model.live="TTM" />
                                </x-filament::input.wrapper>
                            </div>
                        </div>

                    </x-filament::fieldset>
                @endif


            </div>
            <x-filament::button class="w-full mt-3" icon="heroicon-m-magnifying-glass" wire:click="showTableFunct()">
                Buscar
            </x-filament::button>
            @if ($showTable)
                <livewire:studies-table :fecha="$year_calculation" :parametro="$parametrosd17" :smmlv="$smmlv" :k="$K_" :j="$j" :js="$js" :jm="$jm" :i="$i" :ttm="$TTM" :recalcular="$calcular"/>
            @endif

        </x-filament::section>
    @endif

    <!-- Upload file segment -->
    <x-filament::modal id="upload-file">
        <x-slot name="heading">
            Importar datos
        </x-slot>
        <div class="mt-3">
            <label for="">Año a calcular</label>

            <x-filament::input.wrapper>
                <x-filament::input type="text" wire:model.live="yeartoimport" />
            </x-filament::input.wrapper>
        </div>
        <x-filament::fieldset>
            <x-slot name="label">
                Archivo
            </x-slot>
            <x-filament::input.wrapper>
                <x-filament::input type="file" wire:model="file" />
            </x-filament::input.wrapper>

        </x-filament::fieldset>
        @if ($loading)
            <x-filament::button disabled>
                <x-filament::loading-indicator class="h-5 w-5" />
            </x-filament::button>
        @else
            <x-filament::button wire:click="importData()">
                Importar
            </x-filament::button>
        @endif
    </x-filament::modal>
</x-filament-panels::page>
