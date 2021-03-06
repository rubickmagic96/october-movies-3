<?php namespace Rasyidcode\Movies\Models;

use Model;

/**
 * Model
 */
class Movie extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'rasyidcode_movies_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /* Relations */
    public $attachOne = [
        'poster' => 'System\Models\File'
    ];

    public $attachMany = [
        'gallery' => 'System\Models\File'
    ];

    public $belongsToMany = [
        'genre' => [
            'Rasyidcode\Movies\Models\Genre',
            'table' => 'rasyidcode_movies_movies_genres',
            'order' => 'name'
        ],
        'actors' => [
            'Rasyidcode\Movies\Models\Actor',
            'table' => 'rasyidcode_movies_actors_movies',
            'order' => 'name'
        ]
    ];

    //protected $jsonable = ['actors'];
}
