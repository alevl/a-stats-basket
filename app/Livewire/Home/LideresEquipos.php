<?php

namespace App\Livewire\Home;

use Livewire\Component;
use App\Models\Jugadore;
use App\Models\JugadoresNumero;
use App\Models\Campeonato;
use DB;

class LideresEquipos extends Component
{
    public $id_jugador, $torneo=0, $categoria=0, $torneos=[], $categorias=[];

    public $sort = 'puntos';
    public $direccion = 'desc';
    public $sort2 = 'posicion';
    public $direc = 'asc';
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
        $this->jugador = Jugadore::where('id', $this->id_jugador)->first();
        
        $numeros_temporadas = DB::table('jugadores_numeros')
        ->select('jugadores_numeros.*','campeonatos.nombre as campeonato','jugadores.nombre as jugador','jugadores.equipo_id as equipo','equipos.nombre as nombre_equipo'
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
        ->join('jugadores', 'jugadores.id', '=', 'jugadores_numeros.jugador_id')
        ->join('equipos', 'equipos.id', '=', 'jugadores.equipo_id')
        ->where('jugadores_numeros.categoria_id', $this->categoria)
        ->where('jugadores_numeros.campeonato_id', $this->torneo)
        ->groupBy('equipo_id')
        ->orderBy($this->sort, $this->direccion)
        ->get();

        return view('livewire.home.lideres-equipos')->with('numeros_temporadas', $numeros_temporadas);
    }

    public function order($sort)
    {
        if($this->sort == $sort)
        {
            if($this->direccion == 'desc') 
            {
                $this->direccion = 'asc';
            }
            else 
            {
                $this->direccion = 'desc';
            }
        }
        else
        {
            $this->sort = $sort;
            $this->direccion = 'asc';
        }
    }
    public function order2($sort)
    {
        if($this->sort2 == $sort)
        {
            if($this->direc == 'desc') 
            {
                $this->direc = 'asc';
            }
            else 
            {
                $this->direc = 'desc';
            }
        }
        else
        {
            $this->sort2 = $sort;
            $this->direc = 'asc';
        }
    }
}
