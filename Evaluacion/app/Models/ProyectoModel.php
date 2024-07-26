<?php

// * Se actualiza el modelo para ser usado con datos estáticos
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProyectoModel extends Model
{
    public static $proyectos = [
        [
            'id' => 1,
            'nombre' => 'Proyecto A',
            'fecha_inicio' => '2024-01-01',
            'estado' => 'En progreso',
            'responsable' => 'Juan Perez',
            'monto' => 10000,
        ],
        [
            'id' => 2,
            'nombre' => 'Proyecto B',
            'fecha_inicio' => '2024-02-01',
            'estado' => 'Completado',
            'responsable' => 'Ana Gomez',
            'monto' => 15000,
        ],
    ];

    public static function allProjects()
    {
        return collect(self::$proyectos);
    }

    public static function findProject($id)
    {
        return collect(self::$proyectos)->firstWhere('id', $id);
    }

    public static function addProject($data)
    {
        $id = count(self::$proyectos) + 1;
        $data['id'] = $id;
        self::$proyectos[] = $data;
    }

    public static function updateProject($id, $data)
    {
        foreach (self::$proyectos as &$project) {
            if ($project['id'] == $id) {
                $project = array_merge($project, $data);
                break;
            }
        }
    }

    public static function deleteProject($id)
    {
        self::$proyectos = array_filter(self::$proyectos, function ($project) use ($id) {
            return $project['id'] != $id;
        });
    }
}
