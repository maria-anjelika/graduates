<?php

namespace Drupal\mar_module\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Defines HelloController class.
 */
class mController extends ControllerBase {

  /**
   * Display the markup.
   *
   * @return array
   *   Return markup array.
   */
  public function content() {
    return [
      '#type' => 'markup',
      '#markup' => $this->htmlContactLog(),
    ];
  }

  public function htmlContactLog(){
    $html = '';
    $database = \Drupal::database();
    $query = $database->query("SELECT * FROM `webform_submission` ORDER by completed DESC");
    $res = $query->fetchAll();
    if(!empty($res)){

      foreach($res as $q){
        $time = date('H:i:s d/m/Y', $q->completed);
        $id = $q->sid;
        $email_ = '';
        $name_ = '';
        $subject_ = '';
        $message_ = '';

        $array = array();
        $keys = array('name', 'email', 'subject', 'message');
        foreach($keys as $k){
          $q = $database->query("SELECT value FROM `webform_submission_data` WHERE sid = '$id' and name = '$k'");
          $f = $q->fetch();
          if(!empty($f)){
            $array[$k] = $f->value;
          }
        }

        $html .= "<strong>Time:</strong> $time ".$q->completed;
        $html .= "<br/>";
        $html .= "<strong>Name:</strong> ";
        if( !empty($array['name']) ) $html .= $array['name'];
        $html .= "<br/>";
        $html .= "<strong>Email:</strong> ";
        if( !empty($array['email']) ) $html .= $array['email'];
        $html .= "<br/>";
        $html .= "<strong>Subject:</strong> ";
        if( !empty($array['subject']) ) $html .= $array['subject'];
        $html .= "<br/>";
        $html .= "<strong>Message:</strong> ";
        if( !empty($array['message']) ) $html .= "<br/>".$array['message'];
        $html .= "<br/><br/>";

        unset($array);

      }
    } else {
      $html = '0 messages found';
    }
    return $html;
  }

}