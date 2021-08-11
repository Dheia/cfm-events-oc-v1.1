<?php namespace Umaha\Events\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use Flash;
use Redirect;
use Mail;
use Input;
use Umaha\Events\Models\Registration as RegistrationComp;
use Umaha\Events\Models\Event as EventModel;

class Registrations extends Controller
{
    public $implement = [
        'Backend\Behaviors\ListController',
        'Backend\Behaviors\FormController',
        'Backend\Behaviors\ReorderController',
        'Backend.Behaviors.ImportExportController',    
    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';
    public $importExportConfig = 'config_import_export.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Umaha.Events', 'main-menu-item', 'registrations');
    }


    // Send emails from backend
    public function onEmailSlip() {
        // dd(post());

        foreach (post('checked') as $id) {
            $reg = RegistrationComp::find($id);
            $event = EventModel::where('slug', $reg->event_slug)->first();

            // Send mail after delay of 5 seconds
             $vars = ['user' => $reg, 'event' => $event];

             Mail::later(10,'umaha.events::mail.message', $vars, function($message) use ($vars) {

                 $message->to($vars['user']->email, post('name'));
                 $message->subject($vars['event']->name.' registration');

             });
        }

        Flash::success('Registration email(s) sent');
        Redirect::back();
    }
}
