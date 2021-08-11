<?php namespace Umaha\Events\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use Umaha\Events\Models\Event;
use Carbon\Carbon;

class Events extends Controller
{
    public $implement = [
        'Backend\Behaviors\ListController','Backend\Behaviors\FormController','Backend\Behaviors\ReorderController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Umaha.Events', 'main-menu-item');
    }
    
    public function index()
    {
        $events = Event::where('end_date', '>', Carbon::today())->get();

        // Call the ListController behavior index() method
        $this->asExtension('ListController')->index();
    }
}
