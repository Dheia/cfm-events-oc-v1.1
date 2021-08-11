<?php namespace Umaha\Events\Models;

use Model;
use Umaha\Centres\Models\Centre;
use System\Models\MailTemplate;

/**
 * Model
 */
class Event extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at', 'start_date', 'end_date'];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'umaha_events_';

    public $attachOne = [
        'flyer' => 'System\Models\File'];

    public $belongsToMany = [
        'preachers' => [
            'Umaha\Preachers\Models\Preacher',
            'table'    => 'umaha_events_event_preacher',
            'key'      => 'event_id',
            'otherKey' => 'preacher_id'
        ],
    ];

    public $belongsTo = [
        'centre' => 'Umaha\Centres\Models\Centre'
    ];

    public function getCentreIdOptions() {
        return Centre::pluck('name', 'id');
    }

    public function getEventOptions() {
        return Event::pluck('name', 'id');
    }

    public function getMailTemplateOptions() {
        return MailTemplate::listAllTemplates();
    }
}
