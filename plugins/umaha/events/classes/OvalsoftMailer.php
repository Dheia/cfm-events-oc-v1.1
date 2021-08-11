<?php namespace Umaha\Events\Classes;

use View;
use Model;
use System\Classes\MailManager;
use October\Rain\Mail\MailParser;
use File as FileHelper;

use Mail;
use System\Models\MailTemplate;
use System\Classes\SettingsManager;
use Exception;

class OvalsoftMailer extends MailTemplate {

  /**
   * Finds or makes template from content.
   */
  // public static function findOrMakeTemplateFromContent($code, $content)
  // {
  //     $template = parent::whereCode($code)->first();

  //     if (!$template && View::exists($code)) {
  //         $template = new parent;
  //         $template->code = $code;
  //         $template->fillFromContent($content);
  //         $template->forceSave();
  //     }

  //     return $template;
  // }



  /**
   * Makes template from content.
   */
  // public static function makeTemplateFromContent($code, $content)
  // {

  //   $template = parent::make();
  //   $template->code = $code;
  //   $template->description = 'description';
  //   $template->is_custom = 0;
  //   $template->layout_id = 3;
  //   $template->forceSave();
  // }
}
