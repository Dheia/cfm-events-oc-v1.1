<?php namespace Umaha\Events\Models;

use Backend\Models\ImportModel;
use Umaha\Events\Models\Event;
use Umaha\Events\Models\Registration;

/**
 * RegistrationsImport Model
 */
class RegistrationsImport extends ImportModel
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'umaha_events_registrations';

    /**
     * @var array Attributes to be cast to Argon (Carbon) instances
     */
    protected $dates = [
        'created_at',
        'updated_at'
    ];
    
    public $attachOne = [
        'import_file' => 'System\Models\File'
    ];

    /**
     * @var array The rules to be applied to the data.
     */
    public $rules = [
        'email' => 'required|email',
        'event' => 'required',
    ];

    public function importData($results, $sessionKey = null) {

        $event = Event::find($this->event);

        foreach ($results as $row => $data) {

            try {
                $reg = new Registration;
                $reg->title          = isset($data['title']) ? $data['title'] : null;
                $reg->name           = isset($data['name']) ? $data['name'] : null;
                $reg->gender         = isset($data['gender']) ? $data['gender'] : null;
                $reg->marital_status = isset($data['marital_status']) ? $data['marital_status'] : null;
                $reg->phone          = isset($data['phone']) ? $data['phone'] : null;
                $reg->email          = isset($data['email']) ? $data['email'] : null;
                $reg->is_partner     = isset($data['is_partner']) ? $data['is_partner'] : null;
                $reg->occupation     = isset($data['occupation']) ? $data['occupation'] : null;
                $reg->address        = isset($data['address']) ? $data['address'] : null;
                $reg->church_name    = isset($data['church_name']) ? $data['church_name'] : null;
                $reg->pastor_name    = isset($data['pastor_name']) ? $data['pastor_name'] : null;
                $reg->spouse         = isset($data['spouse']) ? $data['spouse'] : null;
                $reg->children       = isset($data['children']) ? $data['children'] : null;
                $reg->children_no    = isset($data['children_no']) ? $data['children_no'] : null;
                $reg->children_ages  = isset($data['children_ages']) ? $data['children_ages'] : null;
                $reg->arrival_date   = isset($data['arrival_date']) ? $data['arrival_date'] : null;
                $reg->departure_date = isset($data['departure_date']) ? $data['departure_date'] : null;
                $reg->accommodation  = isset($data['accommodation']) ? $data['accommodation'] : null;
                $reg->feeding        = isset($data['feeding']) ? $data['feeding'] : null;
                $reg->transportation = isset($data['transportation']) ? $data['transportation'] : null;
                $reg->coming_with_car = isset($data['coming_with_car']) ? $data['coming_with_car'] : null;
                $reg->assist_with_car = isset($data['assist_with_car']) ? $data['assist_with_car'] : null;
                $reg->event_slug     = $event->slug;
                $reg->event_id       = $event->id;
                $reg->save();

                $this->logCreated();
            }
            catch (\Exception $ex) {
                $this->logError($row, $ex->getMessage());
            }

        }
    }

    function getEventOptions() {
        return Event::pluck('name', 'id');
    }
}
