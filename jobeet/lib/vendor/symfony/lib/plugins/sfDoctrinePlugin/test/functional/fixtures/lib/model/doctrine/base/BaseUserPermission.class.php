<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BaseUserPermission extends myDoctrineRecord
{
  public function setTableDefinition()
  {
    $this->setTableName('user_permission');
    $this->hasColumn('user_id', 'integer', null, array('type' => 'integer', 'primary' => true));
    $this->hasColumn('permission_id', 'integer', null, array('type' => 'integer', 'primary' => true));
  }

}