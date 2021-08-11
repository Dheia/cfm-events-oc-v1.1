<?php namespace Umaha\Events\Models;

use Model;
use Umaha\Events\Models\Event;
use Umaha\Preachers\Models\Preacher;

/**
 * Model
 */
class Schedule extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at', 'date'];
    protected $jsonable = ['schedule'];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'umaha_events_schedules';

    public $belongsTo = [
        'event' => ['Umaha\Events\Models\Event', 'key' => 'event_slug'],
        'preacherInfo' => ['Umaha\Preachers\Models\Preacher', 'key' => 'preacher_slug', 'otherKey' => 'slug']
    ];

    public function getEventOptions() {
        return Event::pluck('name', 'slug');
    }

    public function getPreacherOptions() {
        return Preacher::pluck('name', 'name');
    }
}
