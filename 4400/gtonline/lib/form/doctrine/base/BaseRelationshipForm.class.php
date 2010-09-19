<?php

/**
 * Relationship form base class.
 *
 * @method Relationship getObject() Returns the current form's model object
 *
 * @package    gtonline
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRelationshipForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'sourceUserId'      => new sfWidgetFormInputHidden(),
      'destinationUserId' => new sfWidgetFormInputHidden(),
      'description'       => new sfWidgetFormInputText(),
      'acceptTime'        => new sfWidgetFormDate(),
      'status'            => new sfWidgetFormChoice(array('choices' => array('pending' => 'pending', 'accepted' => 'accepted', 'rejected' => 'rejected', 'cancelled' => 'cancelled'))),
    ));

    $this->setValidators(array(
      'sourceUserId'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('sourceUserId')), 'empty_value' => $this->getObject()->get('sourceUserId'), 'required' => false)),
      'destinationUserId' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('destinationUserId')), 'empty_value' => $this->getObject()->get('destinationUserId'), 'required' => false)),
      'description'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'acceptTime'        => new sfValidatorDate(array('required' => false)),
      'status'            => new sfValidatorChoice(array('choices' => array(0 => 'pending', 1 => 'accepted', 2 => 'rejected', 3 => 'cancelled'))),
    ));

    $this->widgetSchema->setNameFormat('relationship[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Relationship';
  }

}