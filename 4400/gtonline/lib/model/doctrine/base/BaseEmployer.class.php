<?php

/**
 * BaseEmployer
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property Doctrine_Collection $UserEmployer
 * 
 * @method integer             getId()           Returns the current record's "id" value
 * @method string              getName()         Returns the current record's "name" value
 * @method Doctrine_Collection getUserEmployer() Returns the current record's "UserEmployer" collection
 * @method Employer            setId()           Sets the current record's "id" value
 * @method Employer            setName()         Sets the current record's "name" value
 * @method Employer            setUserEmployer() Sets the current record's "UserEmployer" collection
 * 
 * @package    gtonline
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseEmployer extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('employer');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'unique' => true,
             'notnull' => true,
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('UserEmployer', array(
             'local' => 'id',
             'foreign' => 'employerId'));
    }
}