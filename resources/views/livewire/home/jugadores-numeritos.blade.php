<div>
    <x-layouts.menu-home>
        <div class="bg-gray-100 max-w-7xl mx-auto py-0 px-4 sm:px-6 lg:px-8">
            <div class="w-full">
                <img src="{{ asset('storage/sistema/fondo-jugador.png') }}" width="100%" style="height: 400px !important" >
            </div>
            <div style="position:absolute; margin-top:-190px; margin-left:10px">
                <img src="{{ asset('storage/sistema/jugador.png') }}" width="180px" class="rounded"  >
            </div>
            <div class="mt-4">
                <p class="mb-2 text-gray-800 dark:text-gray-50" style="font-size: 2em">
                    {{ $jugador->nombre." #".$jugador->numero }}  
                </p>
                <p class="mb-1 text-xl font-medium text-gray-800 dark:text-gray-50">
                    <spand class="font-bold">Nacimiento:</spand> {{ $jugador->nacimiento }}
                </p>
                <p class="mb-1 text-xl font-medium text-gray-800 dark:text-gray-50">
                    <spand class="font-bold">Lanza:</spand> {{ $jugador->batea }}
                </p>
            </div>

            <div class="mt-6">
                <span class="text-2xl font-semi-bold leading-normal">Mis Temporadas</span>
            </div>
            <div style="overflow-x:auto">
                <table class="w-full mt-4 table bg-white rounded-lg shadow mb-12" style="font-size: 0.8em">
                    <thead>
                        <tr class="fondo-primero text-white">
                            <th class=" p-2">Torneo</th>
                            <th class=" p-2">Categoría</th>
                            <th class=" p-2" title="Juegos">J</th>
                            <th class=" p-2" title="Puntos">PUNTOS</th>
                            <th class=" p-2" title="Rebotes">REB</th>
                            <th class=" p-2" title="Asistencias">ASIS.</th>
                            <th class=" p-2" title="Bloqueos">BLQ</th>
                            <th class=" p-2" title="Triples Lanzados">TPL LAZ</th>
                            <th class=" p-2" title="Triples Convertidos">TPL COV</th>
                            <th class=" p-2" title="Tiros Libres Lanzados">TL LAZ</th>
                            <th class=" p-2" title="Tiros Libres Convertidos">TL COV</th>
                            <th class=" p-2" title="Robos de Balón">ROB
                            <th class=" p-2" title="Perdidas de Balón">PER</th>
                            <th class=" p-2" title="Faltas Recibidas">FLT REC</th>
                            <th class=" p-2" title="Faltas Cometidas">FLT COM</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($numeros_temporadas as $temporada)
                            <tr class="text-gray-700 odd:bg-blue-50 even:bg-red-50">
                                <td class="border-b-2 p-2 dark:border-dark-5 text-left">
                                    {{ $temporada->campeonato }}
                                </td>
                                <td class="border-b-2 p-2 dark:border-dark-5 text-left">
                                    {{ $temporada->categoria }}
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
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-6">
                <span class="text-2xl font-semi-bold leading-normal">Mis Juegos</span>
            </div>

            <div style="overflow-x:auto">
                <table class="w-full mt-4 table bg-white rounded-lg shadow mb-12" style="font-size: 0.8em">
                    <thead>
                        <tr class="fondo-primero text-white">
                            <th class=" p-2">Fecha</th>
                            <th class=" p-2">Categoría</th>
                            <th class=" p-2">Oponente</th>
                            <th class=" p-2" title="Puntos">PUNTOS</th>
                            <th class=" p-2" title="Rebotes">REB</th>
                            <th class=" p-2" title="Asistencias">ASIS.</th>
                            <th class=" p-2" title="Bloqueos">BLQ</th>
                            <th class=" p-2" title="Triples Lanzados">TPL LAZ</th>
                            <th class=" p-2" title="Triples Convertidos">TPL COV</th>
                            <th class=" p-2" title="Tiros Libres Lanzados">TL LAZ</th>
                            <th class=" p-2" title="Tiros Libres Convertidos">TL COV</th>
                            <th class=" p-2" title="Robos de Balón">ROB
                            <th class=" p-2" title="Perdidas de Balón">PER</th>
                            <th class=" p-2" title="Faltas Recibidas">FLT REC</th>
                            <th class=" p-2" title="Faltas Cometidas">FLT COM</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($juegos_totales as $temporada)
                            @if($temporada->juegos > 0)
                                <tr class="text-gray-700 odd:bg-blue-50 even:bg-red-50">
                                    <td class="border-b-2 p-2 dark:border-dark-5 text-left">
                                        {{ $temporada->fecha }}
                                    </td>
                                    <td class="border-b-2 p-2 dark:border-dark-5 text-left">
                                        {{ $temporada->categoria }}
                                    </td>
                                    <td class="border-b-2 p-2 dark:border-dark-5 text-left">
                                        {{ $temporada->oponente }}
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
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>

            <a class="inline-flex items-center uppercase justify-center px-4 py-2 border border border-primary rounded font-semibold text-xs tracking-widest hover:text-blue-300 focus:outline-none focus:ring-2 focus:ring-offset-2 transition ease-in-out duration-150 fondo-segundo text-white mb-6" href="{{ route('jugadores') }}">
                Regresar
            </a>
        </div>
    </x-layouts.menu-home>
</div>
