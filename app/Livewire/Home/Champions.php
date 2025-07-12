<?php

namespace App\Livewire\Home;

use Livewire\Component;
use App\Models\Jugadore;
use App\Models\JugadoresNumero;
use App\Models\Campeonato;
use DB;

class Champions extends Component
{
    public $id_jugador, $torneo=0, $categoria=0, $torneos=[], $categorias=[];
    public $tipo = 'bateador';

    public function updatedCategoria($value)
    {
        $this->torneo = null;
    }

    public function render()
    {
        $this->categorias = Campeonato::orderBy('categoria_id','asc')
        ->select('categorias.*','campeonatos.*','categorias.id as id')
        ->join('categorias', 'categorias.id', '=', 'campeonatos.categoria_id')
        ->get();

        $this->torneos = Campeonato::where('categoria_id', $this->categoria)->orderBy('fecha_inicio', 'desc')->get();

        $puntos = DB::table('jugadores_numeros')
        ->select('jugadores_numeros.*','campeonatos.nombre as campeonato','jugadores.nombre as jugador','jugadores.equipo_id as equipo','equipos.nombre as nombre_equipo'
        , DB::raw('sum(jugadores_numeros.juegos) as juegos')
        , DB::raw('sum(jugadores_numeros.puntos) as puntos')
        , DB::raw('sum(jugadores_numeros.asistencias) as asistencias')
        , DB::raw('sum(jugadores_numeros.rebotes) as rebotes')
        , DB::raw('sum(jugadores_numeros.bloqueos) as bloqueos'))
        ->join('campeonatos', 'campeonatos.id', '=', 'jugadores_numeros.campeonato_id')
        ->join('jugadores', 'jugadores.id', '=', 'jugadores_numeros.jugador_id')
        ->join('equipos', 'equipos.id', '=', 'jugadores.equipo_id')
        ->where('jugadores_numeros.categoria_id', $this->categoria)
        ->where('jugadores_numeros.campeonato_id', $this->torneo)
        ->LIMIT(10)
        ->groupBy('jugador_id')
        ->orderBy('puntos', 'desc')
        ->get();

        $rebotes = DB::table('jugadores_numeros')
        ->select('jugadores_numeros.*','campeonatos.nombre as campeonato','jugadores.nombre as jugador','jugadores.equipo_id as equipo','equipos.nombre as nombre_equipo'
        , DB::raw('sum(jugadores_numeros.juegos) as juegos')
        , DB::raw('sum(jugadores_numeros.puntos) as puntos')
        , DB::raw('sum(jugadores_numeros.asistencias) as asistencias')
        , DB::raw('sum(jugadores_numeros.rebotes) as rebotes')
        , DB::raw('sum(jugadores_numeros.bloqueos) as bloqueos'))
        ->join('campeonatos', 'campeonatos.id', '=', 'jugadores_numeros.campeonato_id')
        ->join('jugadores', 'jugadores.id', '=', 'jugadores_numeros.jugador_id')
        ->join('equipos', 'equipos.id', '=', 'jugadores.equipo_id')
        ->where('jugadores_numeros.categoria_id', $this->categoria)
        ->where('jugadores_numeros.campeonato_id', $this->torneo)
        ->LIMIT(10)
        ->groupBy('jugador_id')
        ->orderBy('rebotes', 'desc')
        ->get();

        $asistencias = DB::table('jugadores_numeros')
        ->select('jugadores_numeros.*','campeonatos.nombre as campeonato','jugadores.nombre as jugador','jugadores.equipo_id as equipo','equipos.nombre as nombre_equipo'
        , DB::raw('sum(jugadores_numeros.juegos) as juegos')
        , DB::raw('sum(jugadores_numeros.puntos) as puntos')
        , DB::raw('sum(jugadores_numeros.asistencias) as asistencias')
        , DB::raw('sum(jugadores_numeros.rebotes) as rebotes')
        , DB::raw('sum(jugadores_numeros.bloqueos) as bloqueos'))
        ->join('campeonatos', 'campeonatos.id', '=', 'jugadores_numeros.campeonato_id')
        ->join('jugadores', 'jugadores.id', '=', 'jugadores_numeros.jugador_id')
        ->join('equipos', 'equipos.id', '=', 'jugadores.equipo_id')
        ->where('jugadores_numeros.categoria_id', $this->categoria)
        ->where('jugadores_numeros.campeonato_id', $this->torneo)
        ->LIMIT(10)
        ->groupBy('jugador_id')
        ->orderBy('asistencias', 'desc')
        ->get();

        $bloqueos = DB::table('jugadores_numeros')
        ->select('jugadores_numeros.*','campeonatos.nombre as campeonato','jugadores.nombre as jugador','jugadores.equipo_id as equipo','equipos.nombre as nombre_equipo'
        , DB::raw('sum(jugadores_numeros.juegos) as juegos')
        , DB::raw('sum(jugadores_numeros.puntos) as puntos')
        , DB::raw('sum(jugadores_numeros.asistencias) as asistencias')
        , DB::raw('sum(jugadores_numeros.rebotes) as rebotes')
        , DB::raw('sum(jugadores_numeros.bloqueos) as bloqueos'))
        ->join('campeonatos', 'campeonatos.id', '=', 'jugadores_numeros.campeonato_id')
        ->join('jugadores', 'jugadores.id', '=', 'jugadores_numeros.jugador_id')
        ->join('equipos', 'equipos.id', '=', 'jugadores.equipo_id')
        ->where('jugadores_numeros.categoria_id', $this->categoria)
        ->where('jugadores_numeros.campeonato_id', $this->torneo)
        ->LIMIT(10)
        ->groupBy('jugador_id')
        ->orderBy('bloqueos', 'desc')
        ->get();

        return view('livewire.home.champions')->with('puntos', $puntos)->with('rebotes', $rebotes)->with('asistencias', $asistencias)->with('bloqueos', $bloqueos);
    }
}
