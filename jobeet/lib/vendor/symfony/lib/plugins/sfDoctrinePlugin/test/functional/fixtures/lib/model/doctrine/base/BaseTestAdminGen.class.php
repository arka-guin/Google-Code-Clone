<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BaseTestAdminGen extends myDoctrineRecord
{
  public function setTableDefinition()
  {
    $this->setTableName('test_admin_gen');
    $this->hasColumn('name', 'string', 255, array('type' => 'string', 'length' => '255'));
  }

}