<?php namespace Umaha\Events\Models;

use Model;
use Umaha\Events\Models\Event;

/**
 * Model
 */
class Registration extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;
    
//    use \October\Rain\Database\Traits\Sortable;
    
//    use \October\Rain\Database\Traits\NestedTree;

    protected $dates = ['deleted_at'];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'umaha_events_registrations';

    public $belongsTo = [
        'event' => ['Umaha\Events\Models\Event', 'key' => 'event_slug', 'otherKey' => 'slug']
    ];

    public function getEventSlugOptions() {
        return Event::pluck('name', 'slug');
    }
}
