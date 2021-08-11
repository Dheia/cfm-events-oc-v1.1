<?php namespace Umaha\Events\Models;

use Backend\Models\ExportModel;

/**
 * RegistrationsExport Model
 */
use Umaha\Events\Models\Registration;

class RegistrationsExport extends ExportModel
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'umaha_events_registrations';

    /**
     * @var array Guarded fields
     */
    protected $guarded = [];

    /**
     * @var array Fillable fields
     */
    protected $fillable = ['*', 'event', 'marital_status', 'attendance_mode', 'is_partner', 'spouse', 'children', 'accommodation', 'feeding', 'transportation', 'coming_with_car', 'assist_with_car'];

 
    public function exportData($columns, $sessionKey = null) {
        // dd($this->attendance_mode);

        $event = Event::where('slug', $this->event)->first();


        $registration = Registration::query();
        $registration = $registration->where('event_slug', $event->slug);

        if ($this->marital_status) {
            $registration = $registration->where('marital_status', $this->marital_status);
        }

        if ($this->attendance_mode) {
            $registration = $registration->where('attendance_mode', $this->attendance_mode);
        }

        if ($this->is_partner == 1) {
            $registration = $registration->where('is_partner', $this->is_partner);
        }

        if ($this->spouse == 1) {
            $registration = $registration->where('spouse', $this->spouse);
        }

        if ($this->children == 1) {
            $registration = $registration->where('children', $this->children);
        }

        if ($this->accommodation == 1) {
            $registration = $registration->where('accommodation', $this->accommodation);
        }

        if ($this->feeding == 1) {
            $registration = $registration->where('feeding', $this->feeding);
        }

        if ($this->transportation == 1) {
            $registration = $registration->where('transportation', $this->transportation);
        }

        if ($this->coming_with_car == 1) {
            $registration = $registration->where('coming_with_car', $this->coming_with_car);
        }

        if ($this->assist_with_car == 1) {
            $registration = $registration->where('assist_with_car', $this->assist_with_car);
        }

        $registration = $registration->get();

        // $registration = Registration::all();

        $registration->each(function($registration) use ($columns) {
            $registration->addVisible($columns);
        });

        return $registration->toArray();

    }

    function getEventOptions() {
        return Event::pluck('name', 'slug');
    }
}
