<?php namespace Umaha\Partners\Components;

use Cms\Classes\ComponentBase;
use Umaha\Partners\Models\Registration;
use Flash;
use Redirect;
use Mail;
use Input;
use Validator;
use ValidationException;

class PartnerRegistration extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'PartnerRegistration Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [
            'accommodation' => [
                 'title'             => 'Accommodation',
                 'description'       => 'Display the accommodation field or not',
                 'default'           => 1,
                 'type'              => 'checkbox'
            ],
            'feeding' => [
                 'title'             => 'Feeding',
                 'description'       => 'Display the feeding field or not',
                 'default'           => 1,
                 'type'              => 'checkbox'
            ],
            'transportation' => [
                 'title'             => 'Transportation',
                 'description'       => 'Display the transportation field or not',
                 'default'           => 1,
                 'type'              => 'checkbox'
            ],
        ];
    }

    public function onSubmit() {

        $data = post();

        $rules = [
                'fname'          => 'required',
                'oname'          => 'required',
                'phone'          => 'required',
                'commitment'     => 'required',
                'postal_address' => 'required',
                'phone'          => 'required',
                'reminder'       => 'required',
            ];

        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }


        $reg                      = new Registration;
        $reg->fname               = post('fname');
        $reg->oname               = post('oname');
        $reg->email               = post('email');
        $reg->phone               = post('phone');
        $reg->postal_address      = post('postal_address');
        $reg->residential_address = post('residential_address');
        $reg->sex                 = post('sex');
        $reg->status              = post('status');
        $reg->occupation          = post('occupation');
        $reg->dob                 = post('dob');
        $reg->wedding_anniversary = post('wedding_anniversary');
        $reg->reminder            = post('reminder');
        $reg->commitment          = post('commitment');
        $reg->save();

        if (post('email')) {
             $vars = ['partner' => $reg];
             Mail::send('umaha.partners::mail.thankyou', $vars, function($message) {

                 $message->from('partners@christfamilyministries.org', $name = 'CFM Partnership Team');
                 $message->to(post('email'), post('fname'));
                 $message->subject('Registration successful');

             });
        }

        Flash::success('Successful. Thank you.');
        Redirect::back();

    }
}
