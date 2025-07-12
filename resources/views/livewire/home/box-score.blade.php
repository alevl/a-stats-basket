<div>
    <x-layouts.menu-home>
        <div class="bg-gray-100 max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <span class="text-2xl font-semi-bold leading-normal">{{ __('Resumen del Juego') }}</span>
            <div class="w-full flex mb-4 mt-2">
                <span class="text-2xl font-semi-bold leading-normal mr-2">{{ $datos_juego->nombre_visita." VS ".$datos_juego->nombre_casa }}</span>
            </div>
            <nav x-data="{ open: false }" class="ml-0">
                <div class="flex justify-between h-16">
                    <div class="flex" wire:ignore>
                        <div class="sm:flex">
                            <x-nav-link id="bat" class="cursor-pointer" wire:click="$set('tipo', 'bateador')" onclick="Bat()" style="border-bottom-color: #002f67; color: #002f67">
                                {{ $datos_juego->nombre_visita }}
                            </x-nav-link>
                        </div>
                        <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex">
                            <x-nav-link class="cursor-pointer" wire:click="$set('tipo', 'pitcher')" id="pit" onclick="Pit()" style="border-bottom-color: #cacfd2; color: #cacfd2">
                                {{ $datos_juego->nombre_casa }}
                            </x-nav-link>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="col-12" style="overflow-x: auto">
                @if ($tipo == "bateador")
                    <span class="text-2xl font-semi-bold leading-normal">{{ __('') }}</span>
                    <table class="w-full mt-4 table bg-white rounded-lg shadow mb-12" style="font-size: 0.8em">
                        <thead>
                            <tr class="fondo-primero text-white">
                                <th class=" p-2">Jugadores</th>
                                <th class=" p-2" title="Posición">POS</th>
                                <th class=" p-2" title="Puntos">PUNTOS</th>
                                <th class=" p-2" title="Rebotes">REB</th>
                                <th class=" p-2" title="Asistencias">ASIS.</th>
                                <th class=" p-2" title="Bloqueos">BLQ</th>
                                <th class=" p-2" title="Triples Lanzados">TPL LAZ</th>
                                <th class=" p-2" title="Triples Convertidos">TPL COV</th>
                                <th class="p-2" title="Tiros Libres Lanzados">TL LAZ</th>
                                <th class=" p-2" title="Tiros Libres Convertidos">TL COV</th>
                                <th class=" p-2" title="Robos de Balón">ROB
                                <th class=" p-2" title="Perdidas de Balón">PER</th>
                                <th class=" p-2" title="Faltas Recibidas">FLT REC</th>
                                <th class=" p-2" title="Faltas Cometidas">FLT COM</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $total_puntos=0;
                            $total_asistencias=0;
                            $total_rebotes=0;
                            $total_bloqueos=0;
                            $total_triples_lanzados=0;
                            $total_triples_convertidos=0;
                            $total_tiros_libre_lanzados=0;
                            $total_tiros_libre_convertidos=0;
                            $total_robos_balon=0;
                            $total_perdidas_balon=0;
                            $total_faltasc=0;
                            $total_faltasr=0;
                            ?>
                            @foreach($bateo_visita as $temporada)
                                <tr class="text-gray-700 odd:bg-blue-50 even:bg-red-50 hover:bg-yellow-200">
                                    <td class="border-b-2 p-2 dark:border-dark-5 text-left">
                                        {{ $temporada->jugador }}
                                    </td>
                                    <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                        {{ $temporada->posicion }}
                                    </td>
                                    <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                        @if($temporada->puntos > 0)
                                            {{ $temporada->puntos }}
                                        @endif
                                    </td>
                                    <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                        @if($temporada->rebotes > 0)
                                            {{ $temporada->rebotes }}
                                        @endif
                                    </td>
                                    <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                        @if($temporada->asistencias > 0)
                                            {{ $temporada->asistencias }}
                                        @endif
                                    </td>
                                    <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                        @if($temporada->bloqueos > 0)
                                            {{ $temporada->bloqueos }}
                                        @endif
                                    </td>
                                    <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                        @if($temporada->triples_lanzados > 0)
                                            {{ $temporada->triples_lanzados }}
                                        @endif
                                    </td>
                                    <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                        @if($temporada->triples_convertidos > 0)
                                            {{ $temporada->triples_convertidos }}
                                        @endif
                                    </td>
                                    <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                        @if($temporada->tiros_libre_lanzados > 0)
                                            {{ $temporada->tiros_libre_lanzados }}
                                        @endif
                                    </td>
                                    <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                        @if($temporada->tiros_libre_convertido > 0)
                                            {{ $temporada->tiros_libre_convertidos }}
                                        @endif
                                    </td>
                                    <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                        @if($temporada->robos_balon > 0)
                                            {{ $temporada->robo_balon }}
                                        @endif
                                    </td>
                                    <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                        @if($temporada->pedidas_balon > 0)
                                            {{ $temporada->perdidas_balon }}
                                        @endif
                                    </td>
                                    <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                        @if($temporada->faltas_cometidas > 0)
                                            {{ $temporada->faltas_cometidas }}
                                        @endif
                                    </td>
                                    <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                        @if($temporada->faltas_recibidas > 0)
                                            {{ $temporada->faltas_recibidas }}
                                        @endif
                                    </td>
                                </tr>
                                <?php
                                $total_puntos=$total_puntos+$temporada->puntos;
                                $total_asistencias=$total_asistencias+$temporada->asistencias;
                                $total_rebotes=$total_rebotes+$temporada->rebotes;
                                $total_bloqueos=$total_bloqueos+$temporada->bloqueos;
                                $total_triples_lanzados=$total_triples_lanzados+$temporada->triples_lanzados;
                                $total_triples_convertidos=$total_triples_convertidos+$temporada->triples_convertidos;
                                $total_tiros_libre_lanzados=$total_tiros_libre_lanzados+$temporada->tiros_libre_lanzados;
                                $total_tiros_libre_convertidos=$total_tiros_libre_convertidos+$temporada->tiros_libre_convertidos;
                                $total_robos_balon=$total_robos_balon+$temporada->robos_balon;
                                $total_perdidas_balon=$total_perdidas_balon+$temporada->perdidas_balon;
                                $total_faltasc=$total_faltasc+$temporada->faltas_cometidas;
                                $total_faltasr=$total_faltasr+$temporada->faltas_recibidas;
                                ?>
                            @endforeach
                            <tr class="text-gray-700 odd:bg-blue-50 even:bg-red-50 hover:bg-yellow-200">
                                <td class="border-b-2 p-2 dark:border-dark-5 text-left">
                                    <span class="font-bold">{{ "TOTALES" }}</span>
                                </td>
                                <td class="border-b-2 p-2 dark:border-dark-5 text-left"></td>
                                <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                    <span class="font-bold">{{ $total_puntos }}</span>
                                </td>
                                <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                    <span class="font-bold">{{ $total_rebotes }}</span>
                                </td>
                                <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                    <span class="font-bold">{{ $total_asistencias }}</span>
                                </td>
                                <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                    <span class="font-bold">{{ $total_bloqueos }}</span>
                                </td>
                                <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                    <span class="font-bold">{{ $total_triples_lanzados }}</span>
                                </td>
                                <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                    <span class="font-bold">{{ $total_triples_convertidos }}</span>
                                </td>
                                <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                    <span class="font-bold">{{ $total_tiros_libre_lanzados }}</span>
                                </td>
                                <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                    <span class="font-bold">{{ $total_tiros_libre_convertidos }}</span>
                                </td>
                                <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                    <span class="font-bold">{{ $total_robos_balon }}</span>
                                </td>
                                <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                    <span class="font-bold">{{ $total_perdidas_balon }}</span>
                                </td>
                                <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                    <span class="font-bold">{{ $total_faltasc }}</span>
                                </td>
                                <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                    <span class="font-bold">{{ $total_faltasr }}</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                @else
                    @if($tipo == "pitcher")
                        <span class="text-2xl font-semi-bold leading-normal">{{ __('') }}</span>
                        <table class="w-full mt-4 table bg-white rounded-lg shadow mb-12" style="font-size: 0.8em">
                            <thead>
                                <tr class="fondo-primero text-white">
                                    <th class=" p-2">Jugadores</th>
                                    <th class=" p-2" title="Posición">POS</th>
                                    <th class=" p-2" title="Puntos">PUNTOS</th>
                                    <th class=" p-2" title="Rebotes">REB</th>
                                    <th class=" p-2" title="Asistencias">ASIS.</th>
                                    <th class=" p-2" title="Bloqueos">BLQ</th>
                                    <th class=" p-2" title="Triples Lanzados">TPL LAZ</th>
                                    <th class=" p-2" title="Triples Convertidos">TPL COV</th>
                                    <th class="p-2" title="Tiros Libres Lanzados">TL LAZ</th>
                                    <th class=" p-2" title="Tiros Libres Convertidos">TL COV</th>
                                    <th class=" p-2" title="Robos de Balón">ROB
                                    <th class=" p-2" title="Perdidas de Balón">PER</th>
                                    <th class=" p-2" title="Faltas Recibidas">FLT REC</th>
                                    <th class=" p-2" title="Faltas Cometidas">FLT COM</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $total_puntos=0;
                                $total_asistencias=0;
                                $total_rebotes=0;
                                $total_bloqueos=0;
                                $total_triples_lanzados=0;
                                $total_triples_convertidos=0;
                                $total_tiros_libre_lanzados=0;
                                $total_tiros_libre_convertidos=0;
                                $total_robos_balon=0;
                                $total_perdidas_balon=0;
                                $total_faltasc=0;
                                $total_faltasr=0;
                                ?>
                                @foreach($bateo_casa as $temporada)
                                    <tr class="text-gray-700 odd:bg-blue-50 even:bg-red-50 hover:bg-yellow-200">
                                        <td class="border-b-2 p-2 dark:border-dark-5 text-left">
                                            {{ $temporada->jugador }}
                                        </td>
                                        <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                            {{ $temporada->posicion }}
                                        </td>
                                        <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                            @if($temporada->puntos > 0)
                                                {{ $temporada->puntos }}
                                            @endif
                                        </td>
                                        <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                            @if($temporada->rebotes > 0)
                                                {{ $temporada->rebotes }}
                                            @endif
                                        </td>
                                        <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                            @if($temporada->asistencias > 0)
                                                {{ $temporada->asistencias }}
                                            @endif
                                        </td>
                                        <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                            @if($temporada->bloqueos > 0)
                                                {{ $temporada->bloqueos }}
                                            @endif
                                        </td>
                                        <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                            @if($temporada->triples_lanzados > 0)
                                                {{ $temporada->triples_lanzados }}
                                            @endif
                                        </td>
                                        <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                            @if($temporada->triples_convertidos > 0)
                                                {{ $temporada->triples_convertidos }}
                                            @endif
                                        </td>
                                        <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                            @if($temporada->tiros_libre_lanzados > 0)
                                                {{ $temporada->tiros_libre_lanzados }}
                                            @endif
                                        </td>
                                        <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                            @if($temporada->tiros_libre_convertido > 0)
                                                {{ $temporada->tiros_libre_convertidos }}
                                            @endif
                                        </td>
                                        <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                            @if($temporada->robos_balon > 0)
                                                {{ $temporada->robo_balon }}
                                            @endif
                                        </td>
                                        <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                            @if($temporada->pedidas_balon > 0)
                                                {{ $temporada->perdidas_balon }}
                                            @endif
                                        </td>
                                        <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                            @if($temporada->faltas_cometidas > 0)
                                                {{ $temporada->faltas_cometidas }}
                                            @endif
                                        </td>
                                        <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                            @if($temporada->faltas_recibidas > 0)
                                                {{ $temporada->faltas_recibidas }}
                                            @endif
                                        </td>
                                    </tr>
                                    <?php
                                    $total_puntos=$total_puntos+$temporada->puntos;
                                    $total_asistencias=$total_asistencias+$temporada->asistencias;
                                    $total_rebotes=$total_rebotes+$temporada->rebotes;
                                    $total_bloqueos=$total_bloqueos+$temporada->bloqueos;
                                    $total_triples_lanzados=$total_triples_lanzados+$temporada->triples_lanzados;
                                    $total_triples_convertidos=$total_triples_convertidos+$temporada->triples_convertidos;
                                    $total_tiros_libre_lanzados=$total_tiros_libre_lanzados+$temporada->tiros_libre_lanzados;
                                    $total_tiros_libre_convertidos=$total_tiros_libre_convertidos+$temporada->tiros_libre_convertidos;
                                    $total_robos_balon=$total_robos_balon+$temporada->robos_balon;
                                    $total_perdidas_balon=$total_perdidas_balon+$temporada->perdidas_balon;
                                    $total_faltasc=$total_faltasc+$temporada->faltas_cometidas;
                                    $total_faltasr=$total_faltasr+$temporada->faltas_recibidas;
                                    ?>
                                @endforeach
                                <tr class="text-gray-700 odd:bg-blue-50 even:bg-red-50 hover:bg-yellow-200">
                                    <td class="border-b-2 p-2 dark:border-dark-5 text-left">
                                        <span class="font-bold">{{ "TOTALES" }}</span>
                                    </td>
                                    <td class="border-b-2 p-2 dark:border-dark-5 text-left"></td>
                                    <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                        <span class="font-bold">{{ $total_puntos }}</span>
                                    </td>
                                    <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                        <span class="font-bold">{{ $total_rebotes }}</span>
                                    </td>
                                    <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                        <span class="font-bold">{{ $total_asistencias }}</span>
                                    </td>
                                    <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                        <span class="font-bold">{{ $total_bloqueos }}</span>
                                    </td>
                                    <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                        <span class="font-bold">{{ $total_triples_lanzados }}</span>
                                    </td>
                                    <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                        <span class="font-bold">{{ $total_triples_convertidos }}</span>
                                    </td>
                                    <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                        <span class="font-bold">{{ $total_tiros_libre_lanzados }}</span>
                                    </td>
                                    <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                        <span class="font-bold">{{ $total_tiros_libre_convertidos }}</span>
                                    </td>
                                    <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                        <span class="font-bold">{{ $total_robos_balon }}</span>
                                    </td>
                                    <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                        <span class="font-bold">{{ $total_perdidas_balon }}</span>
                                    </td>
                                    <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                        <span class="font-bold">{{ $total_faltasc }}</span>
                                    </td>
                                    <td class="border-b-2 p-2 dark:border-dark-5 text-center">
                                        <span class="font-bold">{{ $total_faltasr }}</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    @endif
                @endif
            </div>
        </div>
    </x-layouts.menu-home>
    <script>
        const bat = document.querySelector("#bat")
        const pit = document.querySelector("#pit")

        function Bat() 
        {
            bat.style.color="#002f67";
            pit.style.color="#cacfd2";

            bat.style.borderColor="#002f67";
            pit.style.borderColor="#cacfd2";
        }
        function Pit() 
        {
            bat.style.color="#cacfd2";
            pit.style.color="#002f67";

            bat.style.borderColor="#cacfd2";
            pit.style.borderColor="#002f67";
        }
    </script>
</div>
