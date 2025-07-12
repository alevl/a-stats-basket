<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Condicione::create(['condicion'=>'Si']);
        \App\Models\Condicione::create(['condicion'=>'No']);

        \App\Models\Deporte::create(['deporte'=>'Basket']);

        \App\Models\Nivele::create(['nivel'=>'Administrador']);
        \App\Models\Nivele::create(['nivel'=>'Recopilador']);

        \App\Models\EstatusTorneo::create(['estatus'=>'Activo']);
        \App\Models\EstatusTorneo::create(['estatus'=>'Inactivo']);

        \App\Models\Liga::create(['liga'=>'Zamora', 'ubicacion'=>'Guatire', 'deporte_id'=>1 ]);

        \App\Models\Categoria::create(['categoria'=>'Juvenil A', 'liga_id'=>1, 'deporte_id'=>1 ]);

        \App\Models\Campeonato::create(['nombre'=>'Juv-A 2025-2026', 'liga_id'=>1, 'categoria_id'=>1, 'fecha_inicio'=>'01/09/2024','estatus_id'=>1 ]);

        \App\Models\Grupo::create(['grupo'=>'Final']);
        \App\Models\Grupo::create(['grupo'=>'Semifinal']);
        \App\Models\Grupo::create(['grupo'=>'Semifinal A']);
        \App\Models\Grupo::create(['grupo'=>'Semifinal B']);
        \App\Models\Grupo::create(['grupo'=>'Play Off']);
        \App\Models\Grupo::create(['grupo'=>'Play Off A']);
        \App\Models\Grupo::create(['grupo'=>'Play Off B']);
        \App\Models\Grupo::create(['grupo'=>'Play Off C']);
        \App\Models\Grupo::create(['grupo'=>'Play Off D']);
        \App\Models\Grupo::create(['grupo'=>'Unico']);
        \App\Models\Grupo::create(['grupo'=>'A']);
        \App\Models\Grupo::create(['grupo'=>'B']);
        \App\Models\Grupo::create(['grupo'=>'C']);
        \App\Models\Grupo::create(['grupo'=>'D']);
        \App\Models\Grupo::create(['grupo'=>'E']);
        \App\Models\Grupo::create(['grupo'=>'F']);
        \App\Models\Grupo::create(['grupo'=>'G']);
        \App\Models\Grupo::create(['grupo'=>'H']);

        \App\Models\Equipo::create([
            'nombre' => 'Callejon Garcia',
            'abreviacion' => 'CAL',
            'deporte_id' => 1,
            'campeonato_id' => 1,
            'liga_id' => 1,
            'categoria_id' => 1,
        ]);
        \App\Models\Equipo::create([
            'nombre' => 'El Saco',
            'abreviacion' => 'SAC',
            'deporte_id' => 1,
            'campeonato_id' => 1,
            'liga_id' => 1,
            'categoria_id' => 1,
        ]);
        \App\Models\Equipo::create([
            'nombre' => 'Bolivariano BC',
            'abreviacion' => 'BOL',
            'deporte_id' => 1,
            'campeonato_id' => 1,
            'liga_id' => 1,
            'categoria_id' => 1,
        ]);
        \App\Models\Equipo::create([
            'nombre' => 'Alto Grande',
            'abreviacion' => 'ALT',
            'deporte_id' => 1,
            'campeonato_id' => 1,
            'liga_id' => 1,
            'categoria_id' => 1,
        ]);
        \App\Models\Equipo::create([
            'nombre' => 'Furia de la 22',
            'abreviacion' => 'FUR',
            'deporte_id' => 1,
            'campeonato_id' => 1,
            'liga_id' => 1,
            'categoria_id' => 1,
        ]);
        \App\Models\Equipo::create([
            'nombre' => 'Agua Viva BC',
            'abreviacion' => 'AGU',
            'deporte_id' => 1,
            'campeonato_id' => 1,
            'liga_id' => 1,
            'categoria_id' => 1,
        ]);
        \App\Models\Equipo::create([
            'nombre' => 'Escuela Alberto Sanabria',
            'abreviacion' => 'ALB',
            'deporte_id' => 1,
            'campeonato_id' => 1,
            'liga_id' => 1,
            'categoria_id' => 1,
        ]);
        \App\Models\Equipo::create([
            'nombre' => 'Escuela Guardianes BC',
            'abreviacion' => 'GUA',
            'deporte_id' => 1,
            'campeonato_id' => 1,
            'liga_id' => 1,
            'categoria_id' => 1,
        ]);
        \App\Models\Equipo::create([
            'nombre' => 'Los Osos de la Bermudez',
            'abreviacion' => 'LOS',
            'deporte_id' => 1,
            'campeonato_id' => 1,
            'liga_id' => 1,
            'categoria_id' => 1,
        ]);
        \App\Models\Equipo::create([
            'nombre' => 'Nitro BC',
            'abreviacion' => 'NIT',
            'deporte_id' => 1,
            'campeonato_id' => 1,
            'liga_id' => 1,
            'categoria_id' => 1,
        ]);

        \App\Models\User::create(['name'=>'Alejandro Velasquez',
        'username'=>'alejandro',
        'password'=>'$2y$10$P7g2rGQ9aXM6qgJAgOmecuV5LwBNUC4d2bqtRU5RRbPIpi61mdTEW',
        'nivel_id'=>'1',
        'estatus_id'=>'1'
        ]);

        \App\Models\Noticia::create([
            'titulo' => 'Tiburones lidera la tabla tras una victoria contundente',
            'desarrollo' => 'En un emocionante encuentro disputado el pasado fin de semana, Tiburones derrotó 74-67 a Leones del Caribe, consolidándose como el líder absoluto del campeonato con 15 puntos en 5 jornadas. La figura del partido fue Carlos Márquez, quien marcó 19 puntos y brindó 10 asistencias.',
            'estatus_id' => 1,
        ]);
        \App\Models\Noticia::create([
            'titulo' => 'Águilas del Sur remonta en el último cuarto y se mete en la pelea',
            'desarrollo' => 'Con 25 puntos en el último cuarto, Águilas del Sur venció 100-98 a Guerreros Unidos en un duelo vibrante que mantuvo en vilo a los aficionados hasta el final. El juvenil Jesús Valero, quien sumo 35 puntos fue el MVP del partido.',
            'estatus_id' => 1,
        ]);

        \App\Models\Anotadore::create(['nombre'=>'Alejandro Graterol',
        'telefono'=>'',
        ]);
        \App\Models\Anotadore::create(['nombre'=>'Jose Luis garcias',
        'telefono'=>'',
        ]);
        \App\Models\Anotadore::create(['nombre'=>'Roman Equenique',
        'telefono'=>'',
        ]);
        \App\Models\Anotadore::create(['nombre'=>'No Indicado',
        'telefono'=>'',
        ]);

        \App\Models\Arbitro::create(['nombre'=>'Luis Garcia',
        'telefono'=>'',
        ]);
        \App\Models\Arbitro::create(['nombre'=>'Carlos Rondon',
        'telefono'=>'',
        ]);
        \App\Models\Arbitro::create(['nombre'=>'Santiago Pelaez',
        'telefono'=>'',
        ]);
        \App\Models\Arbitro::create(['nombre'=>'Cristobal Rangel',
        'telefono'=>'',
        ]);
        \App\Models\Arbitro::create(['nombre'=>'Williams Azuaje',
        'telefono'=>'',
        ]);
        \App\Models\Arbitro::create(['nombre'=>'Pedro Alfonzo',
        'telefono'=>'',
        ]);
        \App\Models\Arbitro::create(['nombre'=>'Jesus Gonzalez',
        'telefono'=>'',
        ]);
        \App\Models\Arbitro::create(['nombre'=>'No Indicado',
        'telefono'=>'',
        ]);

        \App\Models\Posicione::create([
            'categoria_id' => 1,
            'campeonato_id' => 1,
            'grupo_id' => 10,
            'equipo_id' => 1,
            'jugados' => 30,
            'ganados' => 25,
            'perdidos' => 4,
            'empatados' => 1,
            'puntos' => 76,
        ]);
        \App\Models\Posicione::create([
            'categoria_id' => 1,
            'campeonato_id' => 1,
            'grupo_id' => 10,
            'equipo_id' => 2,
            'jugados' => 30,
            'ganados' => 20,
            'perdidos' => 10,
            'empatados' => 0,
            'puntos' => 60,
        ]);
        \App\Models\Posicione::create([
            'categoria_id' => 1,
            'campeonato_id' => 1,
            'grupo_id' => 10,
            'equipo_id' => 3,
            'jugados' => 30,
            'ganados' => 22,
            'perdidos' => 4,
            'empatados' => 4,
            'puntos' => 70,
        ]);
        \App\Models\Posicione::create([
            'categoria_id' => 1,
            'campeonato_id' => 1,
            'grupo_id' => 10,
            'equipo_id' => 4,
            'jugados' => 30,
            'ganados' => 25,
            'perdidos' => 4,
            'empatados' => 1,
            'puntos' => 76,
        ]);
        \App\Models\Posicione::create([
            'categoria_id' => 1,
            'campeonato_id' => 1,
            'grupo_id' => 10,
            'equipo_id' => 5,
            'jugados' => 30,
            'ganados' => 15,
            'perdidos' => 10,
            'empatados' => 5,
            'puntos' => 50,
        ]);
        \App\Models\Posicione::create([
            'categoria_id' => 1,
            'campeonato_id' => 1,
            'grupo_id' => 10,
            'equipo_id' => 6,
            'jugados' => 30,
            'ganados' => 25,
            'perdidos' => 15,
            'empatados' => 5,
            'puntos' => 80,
        ]);
        \App\Models\Posicione::create([
            'categoria_id' => 1,
            'campeonato_id' => 1,
            'grupo_id' => 10,
            'equipo_id' => 7,
            'jugados' => 30,
            'ganados' => 18,
            'perdidos' => 12,
            'empatados' => 0,
            'puntos' => 54,
        ]);
        \App\Models\Posicione::create([
            'categoria_id' => 1,
            'campeonato_id' => 1,
            'grupo_id' => 10,
            'equipo_id' => 8,
            'jugados' => 30,
            'ganados' => 19,
            'perdidos' => 11,
            'empatados' => 0,
            'puntos' => 57,
        ]);
        \App\Models\Posicione::create([
            'categoria_id' => 1,
            'campeonato_id' => 1,
            'grupo_id' => 10,
            'equipo_id' => 9,
            'jugados' => 30,
            'ganados' => 10,
            'perdidos' => 20,
            'empatados' => 0,
            'puntos' => 30,
        ]);
        \App\Models\Posicione::create([
            'categoria_id' => 1,
            'campeonato_id' => 1,
            'grupo_id' => 10,
            'equipo_id' => 10,
            'jugados' => 30,
            'ganados' => 17,
            'perdidos' => 10,
            'empatados' => 3,
            'puntos' => 54,
        ]);

        \App\Models\Estadio::create(['nombre'=>'Polideportivo Angel Rojas']);
        \App\Models\Estadio::create(['nombre'=>'Cancha Cerro Verde']);
        \App\Models\Estadio::create(['nombre'=>'Cancha Octavio Azuaje']);
        \App\Models\Estadio::create(['nombre'=>'Colegio Salto Angel']);
        \App\Models\Estadio::create(['nombre'=>'No Indicado']);

        \App\Models\Jugadore::factory(100)->create();
        \App\Models\Calendario::factory(100)->create();
        \App\Models\JugadoresNumero::factory(2000)->create();
    }
}
