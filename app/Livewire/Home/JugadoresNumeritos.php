<?php

namespace App\Livewire\Home;

use Livewire\Component;
use App\Models\Jugadore;
use App\Models\JugadoresNumero;
use DB;

class JugadoresNumeritos extends Component
{
    public $id_jugador, $jugador;

    public function mount($id_jugador)
    {
        $this->id_jugador = $id_jugador;
    }

    public function render()
    {
        $this->jugador = Jugadore::where('id', $this->id_jugador)->first();
        
        $numeros_temporadas = DB::table('jugadores_numeros')
        ->select('jugadores_numeros.*','campeonatos.nombre as campeonato', 'categorias.categoria as categoria'
        , DB::raw('sum(jugadores_numeros.juegos) as juegos')
        , DB::raw('sum(jugadores_numeros.puntos) as puntos')
        , DB::raw('sum(jugadores_numeros.asistencias) as asistencias')
        , DB::raw('sum(jugadores_numeros.rebotes) as rebotes')
        , DB::raw('sum(jugadores_numeros.bloqueos) as bloqueos')
        , DB::raw('sum(jugadores_numeros.faltas_cometidas) as faltas_cometidas')
        , DB::raw('sum(jugadores_numeros.faltas_recibidas) as faltas_recibidas')
        , DB::raw('sum(jugadores_numeros.triples_lanzados) as triples_lanzados')
        , DB::raw('sum(jugadores_numeros.triples_convertidos) as triples_convertidos')
        , DB::raw('sum(jugadores_numeros.tiros_libre_lanzados) as tiros_libre_lanzados')
        , DB::raw('sum(jugadores_numeros.tiros_libre_convertidos) as tiros_libre_convertidos')
        , DB::raw('sum(jugadores_numeros.robos_balon) as robos_balon')
        , DB::raw('sum(jugadores_numeros.perdidas_balon) as perdidas_balon'))
        ->join('campeonatos', 'campeonatos.id', '=', 'jugadores_numeros.campeonato_id')
        ->join('categorias', 'categorias.id', '=', 'jugadores_numeros.categoria_id')
        ->where('jugadores_numeros.jugador_id', $this->id_jugador)
        ->groupBy('jugadores_numeros.campeonato_id')
        ->get();


        $juegos_totales = DB::table('jugadores_numeros')
        ->select('jugadores_numeros.*','campeonatos.nombre as campeonato','equipos.nombre as oponente', 'categorias.categoria as categoria'
        , 'jugadores_numeros.juegos as juegos'
        , 'jugadores_numeros.puntos as puntos'
        , 'jugadores_numeros.asistencias as asistencias'
        , 'jugadores_numeros.rebotes as rebotes'
        , 'jugadores_numeros.bloqueos as bloqueos'
        , 'jugadores_numeros.faltas_cometidas as faltas_cometidas'
        , 'jugadores_numeros.faltas_recibidas as faltas_recibidas'
        , 'jugadores_numeros.triples_lanzados as triples_lanzados'
        , 'jugadores_numeros.triples_convertidos as triples_convertidos'
        , 'jugadores_numeros.tiros_libre_lanzados as tiros_libre_lanzados'
        , 'jugadores_numeros.tiros_libre_convertidos as tiros_libre_convertidos'
        , 'jugadores_numeros.robos_balon as robos_balon'
        , 'jugadores_numeros.perdidas_balon as perdidas_balon')
        ->join('campeonatos', 'campeonatos.id', '=', 'jugadores_numeros.campeonato_id')
        ->join('equipos', 'equipos.id', '=', 'jugadores_numeros.oponente_id')
        ->join('categorias', 'categorias.id', '=', 'jugadores_numeros.categoria_id')
        ->where('jugadores_numeros.jugador_id', $this->id_jugador)
        ->orderBy('fecha_invertida','asc')
        ->get();

        return view('livewire.home.jugadores-numeritos')->with('numeros_temporadas', $numeros_temporadas)->with('juegos_totales', $juegos_totales);
    }
}