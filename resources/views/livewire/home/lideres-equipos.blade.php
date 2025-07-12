<div>
    <x-layouts.menu-home>
        <div class="bg-gray-100 max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <span class="text-2xl font-semi-bold leading-normal">{{ __('Liderato por Equipo') }}</span>
            <div class="w-full flex mb-4 mt-4">
                <div class="mr-4">
                    <span class="text-s" style="font-size: 0.9em">{{ __('Categoría') }}</span>
                    <select wire:model.live="categoria" style="font-size: 0.9em" class="ml-2 rounded-md border border-primary b-transparent bg-none pl-2 pr-2 py-2 focus:outline-none sm:text-sm text-left">
                        <option value="0">Seleccione</option>
                        @foreach($categorias as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->categoria }}</option>
                        @endforeach
                    </select>
                </div>
                <div> 
                    <span class="text-s" style="font-size: 0.9em">{{ __('Torneo') }}</span>
                    <select wire:model.live="torneo" style="font-size: 0.9em" class="ml-2 rounded-md border border-primary b-transparent bg-none pl-2 pr-2 py-2 focus:outline-none sm:text-sm text-left">
                        <option value="0">Seleccione</option>
                        @foreach($torneos as $tor)
                            <option value="{{ $tor->id }}">{{ $tor->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div style="overflow-x:auto">
                <table class="w-full mt-4 table bg-white rounded-lg shadow mb-12" style="font-size: 0.8em">
                    <thead>
                        <tr class="fondo-primero text-white">
                            <th class=" p-2 text-center">
                                {{ __('#') }}
                            </th>
                            <th class=" p-2" style="cursor:pointer" wire:click="order('nombre_equipo')">
                                {{ __('EQUIPO') }}
                                @if($sort == 'nombre_equipo')
                                    @if($direccion == 'asc')
                                        <i class="icofont icofont-caret-up float-right" style="font-size: 1.3em"></i>
                                    @else
                                        <i class="icofont icofont-caret-down float-right" style="font-size: 1.3em"></i>
                                    @endif
                                @else
                                    <i class="icofont icofont-sort float-right mt-1"></i>
                                @endif
                            </th>
                            <th class=" p-2" style="cursor:pointer" wire:click="order('juegos')" title="Juegos Jugados">
                                {{ __('J') }}
                                @if($sort == 'juegos')
                                    @if($direccion == 'asc')
                                        <i class="icofont icofont-caret-up float-right" style="font-size: 1.3em"></i>
                                    @else
                                        <i class="icofont icofont-caret-down float-right" style="font-size: 1.3em"></i>
                                    @endif
                                @else
                                    <i class="icofont icofont-sort float-right mt-1"></i>
                                @endif
                            </th>
                            <th class=" p-2" style="cursor:pointer" wire:click="order('puntos')" title="Puntos">
                                {{ __('PUNTOS') }}
                                @if($sort == 'puntos')
                                    @if($direccion == 'asc')
                                        <i class="icofont icofont-caret-up float-right" style="font-size: 1.3em"></i>
                                    @else
                                        <i class="icofont icofont-caret-down float-right" style="font-size: 1.3em"></i>
                                    @endif
                                @else
                                    <i class="icofont icofont-sort float-right mt-1"></i>
                                @endif
                            </th>
                            <th class=" p-2" style="cursor:pointer" wire:click="order('rebotes')" title="Rebotes">
                                {{ __('REB') }}
                                @if($sort == 'rebotes')
                                    @if($direccion == 'asc')
                                        <i class="icofont icofont-caret-up float-right" style="font-size: 1.3em"></i>
                                    @else
                                        <i class="icofont icofont-caret-down float-right" style="font-size: 1.3em"></i>
                                    @endif
                                @else
                                    <i class="icofont icofont-sort float-right mt-1"></i>
                                @endif
                            </th>
                            <th class=" p-2" style="cursor:pointer" wire:click="order('asistencias')" title="Asistencias">
                                {{ __('ASIS.') }}
                                @if($sort == 'asistencias')
                                    @if($direccion == 'asc')
                                        <i class="icofont icofont-caret-up float-right" style="font-size: 1.3em"></i>
                                    @else
                                        <i class="icofont icofont-caret-down float-right" style="font-size: 1.3em"></i>
                                    @endif
                                @else
                                    <i class="icofont icofont-sort float-right mt-1"></i>
                                @endif
                            </th>
                            <th class=" p-2" style="cursor:pointer" wire:click="order('bloqueos')" title="Bloqueos">
                                {{ __('BLQ') }}
                                @if($sort == 'bloqueos')
                                    @if($direccion == 'asc')
                                        <i class="icofont icofont-caret-up float-right" style="font-size: 1.3em"></i>
                                    @else
                                        <i class="icofont icofont-caret-down float-right" style="font-size: 1.3em"></i>
                                    @endif
                                @else
                                    <i class="icofont icofont-sort float-right mt-1"></i>
                                @endif
                            </th>
                            <th class=" p-2" style="cursor:pointer" wire:click="order('triples_lanzados')" title="Triples Lanzados">
                                {{ __('TPL LAZ') }}
                                @if($sort == 'triples_lanzados')
                                    @if($direccion == 'asc')
                                        <i class="icofont icofont-caret-up float-right" style="font-size: 1.3em"></i>
                                    @else
                                        <i class="icofont icofont-caret-down float-right" style="font-size: 1.3em"></i>
                                    @endif
                                @else
                                    <i class="icofont icofont-sort float-right mt-1"></i>
                                @endif
                            </th>
                            <th class=" p-2" style="cursor:pointer" wire:click="order('triples_convertidos')" title="Triples Convertidos">
                                {{ __('TPL COV') }}
                                @if($sort == 'triples_convertidos')
                                    @if($direccion == 'asc')
                                        <i class="icofont icofont-caret-up float-right" style="font-size: 1.3em"></i>
                                    @else
                                        <i class="icofont icofont-caret-down float-right" style="font-size: 1.3em"></i>
                                    @endif
                                @else
                                    <i class="icofont icofont-sort float-right mt-1"></i>
                                @endif
                            </th>
                            <th class="p-2" style="cursor:pointer" wire:click="order('tiros_libre_lanzados')" title="Tiros Libres Lanzados">
                                {{ __('TL LAZ') }}
                                @if($sort == 'tiros_libre_lanzados')
                                    @if($direccion == 'asc')
                                        <i class="icofont icofont-caret-up float-right" style="font-size: 1.3em"></i>
                                    @else
                                        <i class="icofont icofont-caret-down float-right" style="font-size: 1.3em"></i>
                                    @endif
                                @else
                                    <i class="icofont icofont-sort float-right mt-1"></i>
                                @endif
                            </th>
                            <th class=" p-2" style="cursor:pointer" wire:click="order('tiros_libre_convertidos')" title="Tiros Libres Convertidos">
                                {{ __('TL COV') }}
                                @if($sort == 'tiros_libre_convertidos')
                                    @if($direccion == 'asc')
                                        <i class="icofont icofont-caret-up float-right" style="font-size: 1.3em"></i>
                                    @else
                                        <i class="icofont icofont-caret-down float-right" style="font-size: 1.3em"></i>
                                    @endif
                                @else
                                    <i class="icofont icofont-sort float-right mt-1"></i>
                                @endif
                            </th>
                            <th class=" p-2" style="cursor:pointer" wire:click="order('robos_balon')" title="Robos de Balón">
                                {{ __('ROB') }}
                                @if($sort == 'robos_balon')
                                    @if($direccion == 'asc')
                                        <i class="icofont icofont-caret-up float-right" style="font-size: 1.3em"></i>
                                    @else
                                        <i class="icofont icofont-caret-down float-right" style="font-size: 1.3em"></i>
                                    @endif
                                @else
                                    <i class="icofont icofont-sort float-right mt-1"></i>
                                @endif
                            </th>
                            <th class=" p-2" style="cursor:pointer" wire:click="order('perdidas_balon')" title="Perdidas de Balón">
                                {{ __('PER') }}
                                @if($sort == 'perdidas_balon')
                                    @if($direccion == 'asc')
                                        <i class="icofont icofont-caret-up float-right" style="font-size: 1.3em"></i>
                                    @else
                                        <i class="icofont icofont-caret-down float-right" style="font-size: 1.3em"></i>
                                    @endif
                                @else
                                    <i class="icofont icofont-sort float-right mt-1"></i>
                                @endif
                            </th>
                            <th class=" p-2" style="cursor:pointer" wire:click="order('faltas_recibidas')" title="Faltas Recibidas">
                                {{ __('FLT REC') }}
                                @if($sort == 'faltas_recibidas')
                                    @if($direccion == 'asc')
                                        <i class="icofont icofont-caret-up float-right" style="font-size: 1.3em"></i>
                                    @else
                                        <i class="icofont icofont-caret-down float-right" style="font-size: 1.3em"></i>
                                    @endif
                                @else
                                    <i class="icofont icofont-sort float-right mt-1"></i>
                                @endif
                            </th>
                            <th class=" p-2" style="cursor:pointer" wire:click="order('faltas_cometidas')" title="Faltas Cometidas">
                                {{ __('FLT COM') }}
                                @if($sort == 'faltas_cometidas')
                                    @if($direccion == 'asc')
                                        <i class="icofont icofont-caret-up float-right" style="font-size: 1.3em"></i>
                                    @else
                                        <i class="icofont icofont-caret-down float-right" style="font-size: 1.3em"></i>
                                    @endif
                                @else
                                    <i class="icofont icofont-sort float-right mt-1"></i>
                                @endif
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $m=1?>
                        @foreach($numeros_temporadas as $temporada)
                            <tr class="text-gray-700 odd:bg-blue-50 even:bg-red-50">
                                <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                    {{ $m }}
                                </td>
                                <td class="border-b-2 p-2 dark:border-dark-5 text-left">
                                    {{ $temporada->nombre_equipo }}
                                </td>
                                <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                    {{ $temporada->juegos }}
                                </td>
                                <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                    {{ $temporada->puntos }}
                                </td>
                                <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                    {{ $temporada->rebotes }}
                                </td>
                                <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                    {{ $temporada->asistencias }}
                                </td>
                                <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                    {{ $temporada->bloqueos }}
                                </td>
                                <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                    {{ $temporada->triples_lanzados }}
                                </td>
                                <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                    {{ $temporada->triples_convertidos }}
                                </td>
                                <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                    {{ $temporada->tiros_libre_lanzados }}
                                </td>
                                <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                    {{ $temporada->tiros_libre_convertidos }}
                                </td>
                                <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                    {{ $temporada->robos_balon }}
                                </td>
                                <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                    {{ $temporada->perdidas_balon }}
                                </td>
                                <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                    {{ $temporada->faltas_recibidas }}
                                </td>
                                <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                    {{ $temporada->faltas_cometidas }}
                                </td>
                            </tr>
                            <?php $m=$m+1?>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </x-layouts.menu-home>
</div>