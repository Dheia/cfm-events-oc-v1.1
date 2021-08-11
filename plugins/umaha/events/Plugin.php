<?php namespace Umaha\Events;

use System\Classes\PluginBase;
use Event;
use Backend;
use Mail;

class Plugin extends PluginBase
{
	public function boot()
	{

    
        Event::listen('rainlab.user.register', function ($reg) {
            $group =  \Rainlab\User\Models\UserGroup::where('code', 'registered')->first();
                    $user->groups()->add($group);
                    $user->save();
        });
    
        Event::listen('umaha.events.registration', function ($reg, $event) {

            // Send mail after delay of 5 seconds
            if ($reg->email) {
                 $vars = ['user' => $reg, 'event' => $event];

                 Mail::later(5,'umaha.events::mail.gig2020', $vars, function($message) use ($event) {

                     $message->to(post('email'), post('name'));
                     $message->subject($event->name.' Registration');

                 });
            }

        });



		Event::listen('offline.sitesearch.query', function ($query) {

        // Search your plugin's contents
			$items = Models\Event::where('name', 'like', "%${query}%")
			->orWhere('venue', 'like', "%${query}%")
			->get();

        // Now build a results array
			$results = $items->map(function ($item) use ($query) {

            // If the query is found in the title, set a relevance of 2
				$relevance = mb_stripos($item->title, $query) !== false ? 2 : 1;

				return [
					'title'     => $item->name,
					'text'      => $item->venue,
					'url'       => '/event-details/' . $item->slug,
                // 'thumb'     => $item->images->first(), // Instance of System\Models\File
                'relevance' => $relevance, // higher relevance results in a higher
                                           // position in the results listing
                // 'meta' => 'data',       // optional, any other information you want
                                           // to associate with this result
                // 'model' => $item,       // optional, pass along the original model
            ];
        });

			return [
            'provider' => 'Event', // The badge to display for this result
            'results'  => $results,
        ];
    });
	}
	public function registerComponents()
	{
		return [
			'Umaha\Events\Components\Registration' => 'Registration'
		];
	}

	public function registerSettings()
	{
	}

    public function registerNavigation()
    {
        return [
            'main-menu-item' => [
                'label'       => 'Events',
                'url'         => Backend::url('umaha/events/events'),
                'icon'        => 'icon-calendar',
                'permissions' => [],
                'order'       => 500,

                'sideMenu' => [
                    'registrations' => [
                        'label'       => 'Registrations',
                        'icon'        => 'icon-hand-paper-o',
                        'url'         => Backend::url('umaha/events/registrations'),
                        'permissions' => ['rainlab.users.access_groups']
                    ],
                    'schedules' => [
                        'label'       => 'Schedules',
                        'icon'        => 'icon-clock-o',
                        'url'         => Backend::url('umaha/events/schedules'),
                        'permissions' => ['rainlab.users.access_groups']
                    ],
                    'mails' => [
						'label'       => 'Send Mails',
						'icon'        => 'icon-envelope',
						'url'         => Backend::url('umaha/events/mails'),
                        'permissions' => ['rainlab.users.access_groups']
                    ],
                ]
            ]
        ];
    }
}
