<?php namespace Umaha\Events\Controllers;

use BackendMenu;
use DB;
use Flash;
use Mail;
use Umaha\Events\Models\Event;
use Backend\Classes\Controller;

/**
 * Mails Back-end Controller
 */
class Mails extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Umaha.Events', 'main-menu-item', 'mails');
    }


    /**
     * Passing to form
     * */
    public function index()
    {
        $config = $this->makeConfig('$/umaha/events/models/mail/fields.yaml');
        $config->model = new Event;
        $widget = $this->makeWidget('Backend\Widgets\Form', $config);
        $this->vars['widget'] = $widget;

        $this->vars['events'] = DB::table('umaha_events_')->get();
        
        $this->asExtension('FormController')->create();

    }

    /**
     * Sending Mail
     * */
    public function onSendMail()
    {
        /**
         * Getting form results
         * */
        $event_id = post('event');
        $subject = post('subject');
        $msg = post('message');
        $test_email = post('testEmail');

        /**
         * Checking if there's no data
         * */
        if($subject == "" || $msg == ""):
            Flash::error('All fields are required');
            return ;
        endif;

        /**
         * Striping tags for the plain version of mail
         * */
        $msgPlain = strip_tags(post('message'));

        /**
         * Setting vars array for mail template
         * */
        $vars = [
            'subject' => $subject,
            'msg' => $msg,
            'msgPlain' => $msgPlain,
            ];

        /**
         * Check if the administrator want to send only a test message
         * */
        if($test_email != "")
        {
            //email and subject array
            $array = [
            'email' => $test_email,
            'subject'=>$subject
            ];

            //Sending mail
            if(filter_var($array['email'], FILTER_VALIDATE_EMAIL)) {
                try{
                    Mail::queue([
                                'text' => $msgPlain,
                                'html' => $msg,
                                'raw' => true
                            ], $vars, function($message) use ($array){
                            $message->subject($array['subject']);
                        $message->to($array['email'], "Test Reciever");
                    });
                } catch (\Exception $e) {
                    Flash::error('Please enter a valid email address.');
                    return ;
                }
            } else {
              Flash::error('Please enter a valid email address.');
              return ;
            }

            /**
             * Success message
             * */
            Flash::success('Message has been sent successfully');
            return ;
        }

        /**
         * Check if the administrator want to send to every single unique email ever registered
         * */
        if(post('all_registrants') == 1)
        {
            //email and subject array
            $array = [
            'email' => $test_email,
            'subject'=>$subject
            ];

            //Sending mail

            //Fetching users ids
            $users = DB::table('umaha_events_registrations')->get();
            $users = $users->unique('email');

            /**
            * Looping to send mail to every user
            * */

            foreach($users as $user){

              if ($user->email) {

                if(filter_var($user->email, FILTER_VALIDATE_EMAIL)) {
                    //User and subject array
                    $array = [
                      'user' => $user,
                      'subject'=>$subject
                    ];
                    //Sending mail
                    try {
                        Mail::queue([
                                    'text' => $msgPlain,
                                    'html' => $msg,
                                    'raw' => true
                                ], $vars, function($message) use ($array){
                                $message->subject($array['subject']);
                            $message->to($array['user']->email, $array['user']->name);
                        });
                    } catch (\Exception $e) {
                        // Do nothing
                    }
                }

              }

            }

            /**
             * Success message
             * */
            Flash::success('Message has been sent successfully');
            return ;
        }



        /**
         * Getting users count in this group
         * */
        $users_count = DB::table('umaha_events_registrations')->where('event_id', $event_id)->count();

        /**
         * Checking if there's users in the group
         * */
            if($users_count != 0):
                //Fetching users ids
                $users = DB::table('umaha_events_registrations')->where('event_id', $event_id)->get();

                /**
                 * Looping to send mail to every user
                 * */

                foreach($users as $user){

                    if ($user->email) {

                      if(filter_var($user->email, FILTER_VALIDATE_EMAIL)) {
                        //User and subject array
                        $array = [
                        'user' => $user,
                        'subject'=>$subject
                        ];
                        //Sending mail
                        try {
                            Mail::queue([
                                        'text' => $msgPlain,
                                        'html' => $msg,
                                        'raw' => true
                                    ], $vars, function($message) use ($array){
                                    $message->subject($array['subject']);
                                $message->to($array['user']->email, $array['user']->name);
                            });
                        } catch ( \Exception $e) {
                            // Do nothing
                        }
                        
                      }

                    }

                }
            /**
             * Success Message
             * */
            Flash::success('Message has been sent successfully to '.$users_count.' users');
        else:
            /**
             * Warning message that there's no users in this group
             * */
            Flash::warning('There\'s no body in this group');
        endif;

    }

    /**
     * This function checks if there's a value in test email field.
     * if there's any value the send button to all group will be hidden
     * */
    public function onCheckTestEmail()
    {
        if(post('testEmail') == ""){

            return  ['correct'=> 0];

        } else {

            return  ['correct'=> 1];

        }
    }
}
