<?php

/**
 * Base class that represents a row from the 'items' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * 04/05/09 15:30:18
 *
 * @package    lib.model.om
 */
abstract class BaseItems extends BaseObject  implements Persistent {


  const PEER = 'ItemsPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        ItemsPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the name field.
	 * @var        string
	 */
	protected $name;

	/**
	 * The value for the playerid field.
	 * @var        int
	 */
	protected $playerid;

	/**
	 * The value for the raidid field.
	 * @var        int
	 */
	protected $raidid;

	/**
	 * The value for the itemid field.
	 * @var        int
	 */
	protected $itemid;

	/**
	 * The value for the baseval field.
	 * @var        double
	 */
	protected $baseval;

	/**
	 * The value for the inflatedval field.
	 * @var        double
	 */
	protected $inflatedval;

	/**
	 * @var        Roster
	 */
	protected $aRoster;

	/**
	 * @var        Raids
	 */
	protected $aRaids;

	/**
	 * Flag to prevent endless save loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInSave = false;

	/**
	 * Flag to prevent endless validation loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInValidation = false;

	/**
	 * Initializes internal state of BaseItems object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Applies default values to this object.
	 * This method should be called from the object's constructor (or
	 * equivalent initialization method).
	 * @see        __construct()
	 */
	public function applyDefaultValues()
	{
	}

	/**
	 * Get the [id] column value.
	 * 
	 * @return     int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Get the [name] column value.
	 * 
	 * @return     string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * Get the [playerid] column value.
	 * 
	 * @return     int
	 */
	public function getPlayerid()
	{
		return $this->playerid;
	}

	/**
	 * Get the [raidid] column value.
	 * 
	 * @return     int
	 */
	public function getRaidid()
	{
		return $this->raidid;
	}

	/**
	 * Get the [itemid] column value.
	 * 
	 * @return     int
	 */
	public function getItemid()
	{
		return $this->itemid;
	}

	/**
	 * Get the [baseval] column value.
	 * 
	 * @return     double
	 */
	public function getBaseval()
	{
		return $this->baseval;
	}

	/**
	 * Get the [inflatedval] column value.
	 * 
	 * @return     double
	 */
	public function getInflatedval()
	{
		return $this->inflatedval;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     Items The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = ItemsPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [name] column.
	 * 
	 * @param      string $v new value
	 * @return     Items The current object (for fluent API support)
	 */
	public function setName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = ItemsPeer::NAME;
		}

		return $this;
	} // setName()

	/**
	 * Set the value of [playerid] column.
	 * 
	 * @param      int $v new value
	 * @return     Items The current object (for fluent API support)
	 */
	public function setPlayerid($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->playerid !== $v) {
			$this->playerid = $v;
			$this->modifiedColumns[] = ItemsPeer::PLAYERID;
		}

		if ($this->aRoster !== null && $this->aRoster->getId() !== $v) {
			$this->aRoster = null;
		}

		return $this;
	} // setPlayerid()

	/**
	 * Set the value of [raidid] column.
	 * 
	 * @param      int $v new value
	 * @return     Items The current object (for fluent API support)
	 */
	public function setRaidid($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->raidid !== $v) {
			$this->raidid = $v;
			$this->modifiedColumns[] = ItemsPeer::RAIDID;
		}

		if ($this->aRaids !== null && $this->aRaids->getId() !== $v) {
			$this->aRaids = null;
		}

		return $this;
	} // setRaidid()

	/**
	 * Set the value of [itemid] column.
	 * 
	 * @param      int $v new value
	 * @return     Items The current object (for fluent API support)
	 */
	public function setItemid($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->itemid !== $v) {
			$this->itemid = $v;
			$this->modifiedColumns[] = ItemsPeer::ITEMID;
		}

		return $this;
	} // setItemid()

	/**
	 * Set the value of [baseval] column.
	 * 
	 * @param      double $v new value
	 * @return     Items The current object (for fluent API support)
	 */
	public function setBaseval($v)
	{
		if ($v !== null) {
			$v = (double) $v;
		}

		if ($this->baseval !== $v) {
			$this->baseval = $v;
			$this->modifiedColumns[] = ItemsPeer::BASEVAL;
		}

		return $this;
	} // setBaseval()

	/**
	 * Set the value of [inflatedval] column.
	 * 
	 * @param      double $v new value
	 * @return     Items The current object (for fluent API support)
	 */
	public function setInflatedval($v)
	{
		if ($v !== null) {
			$v = (double) $v;
		}

		if ($this->inflatedval !== $v) {
			$this->inflatedval = $v;
			$this->modifiedColumns[] = ItemsPeer::INFLATEDVAL;
		}

		return $this;
	} // setInflatedval()

	/**
	 * Indicates whether the columns in this object are only set to default values.
	 *
	 * This method can be used in conjunction with isModified() to indicate whether an object is both
	 * modified _and_ has some values set which are non-default.
	 *
	 * @return     boolean Whether the columns in this object are only been set with default values.
	 */
	public function hasOnlyDefaultValues()
	{
			// First, ensure that we don't have any columns that have been modified which aren't default columns.
			if (array_diff($this->modifiedColumns, array())) {
				return false;
			}

		// otherwise, everything was equal, so return TRUE
		return true;
	} // hasOnlyDefaultValues()

	/**
	 * Hydrates (populates) the object variables with values from the database resultset.
	 *
	 * An offset (0-based "start column") is specified so that objects can be hydrated
	 * with a subset of the columns in the resultset rows.  This is needed, for example,
	 * for results of JOIN queries where the resultset row includes columns from two or
	 * more tables.
	 *
	 * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
	 * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
	 * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
	 * @return     int next starting column
	 * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
	 */
	public function hydrate($row, $startcol = 0, $rehydrate = false)
	{
		try {

			$this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->name = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->playerid = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->raidid = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
			$this->itemid = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
			$this->baseval = ($row[$startcol + 5] !== null) ? (double) $row[$startcol + 5] : null;
			$this->inflatedval = ($row[$startcol + 6] !== null) ? (double) $row[$startcol + 6] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			// FIXME - using NUM_COLUMNS may be clearer.
			return $startcol + 7; // 7 = ItemsPeer::NUM_COLUMNS - ItemsPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating Items object", $e);
		}
	}

	/**
	 * Checks and repairs the internal consistency of the object.
	 *
	 * This method is executed after an already-instantiated object is re-hydrated
	 * from the database.  It exists to check any foreign keys to make sure that
	 * the objects related to the current object are correct based on foreign key.
	 *
	 * You can override this method in the stub class, but you should always invoke
	 * the base method from the overridden method (i.e. parent::ensureConsistency()),
	 * in case your model changes.
	 *
	 * @throws     PropelException
	 */
	public function ensureConsistency()
	{

		if ($this->aRoster !== null && $this->playerid !== $this->aRoster->getId()) {
			$this->aRoster = null;
		}
		if ($this->aRaids !== null && $this->raidid !== $this->aRaids->getId()) {
			$this->aRaids = null;
		}
	} // ensureConsistency

	/**
	 * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
	 *
	 * This will only work if the object has been saved and has a valid primary key set.
	 *
	 * @param      boolean $deep (optional) Whether to also de-associated any related objects.
	 * @param      PropelPDO $con (optional) The PropelPDO connection to use.
	 * @return     void
	 * @throws     PropelException - if this object is deleted, unsaved or doesn't have pk match in db
	 */
	public function reload($deep = false, PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("Cannot reload a deleted object.");
		}

		if ($this->isNew()) {
			throw new PropelException("Cannot reload an unsaved object.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ItemsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = ItemsPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aRoster = null;
			$this->aRaids = null;
		} // if (deep)
	}

	/**
	 * Removes this object from datastore and sets delete attribute.
	 *
	 * @param      PropelPDO $con
	 * @return     void
	 * @throws     PropelException
	 * @see        BaseObject::setDeleted()
	 * @see        BaseObject::isDeleted()
	 */
	public function delete(PropelPDO $con = null)
	{

    foreach (sfMixer::getCallables('BaseItems:delete:pre') as $callable)
    {
      $ret = call_user_func($callable, $this, $con);
      if ($ret)
      {
        return;
      }
    }


		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ItemsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			ItemsPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	

    foreach (sfMixer::getCallables('BaseItems:delete:post') as $callable)
    {
      call_user_func($callable, $this, $con);
    }

  }
	/**
	 * Persists this object to the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All modified related objects will also be persisted in the doSave()
	 * method.  This method wraps all precipitate database operations in a
	 * single transaction.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        doSave()
	 */
	public function save(PropelPDO $con = null)
	{

    foreach (sfMixer::getCallables('BaseItems:save:pre') as $callable)
    {
      $affectedRows = call_user_func($callable, $this, $con);
      if (is_int($affectedRows))
      {
        return $affectedRows;
      }
    }


		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ItemsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			$affectedRows = $this->doSave($con);
			$con->commit();
    foreach (sfMixer::getCallables('BaseItems:save:post') as $callable)
    {
      call_user_func($callable, $this, $con, $affectedRows);
    }

			ItemsPeer::addInstanceToPool($this);
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs the work of inserting or updating the row in the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All related objects are also updated in this method.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        save()
	 */
	protected function doSave(PropelPDO $con)
	{
		$affectedRows = 0; // initialize var to track total num of affected rows
		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;

			// We call the save method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aRoster !== null) {
				if ($this->aRoster->isModified() || $this->aRoster->isNew()) {
					$affectedRows += $this->aRoster->save($con);
				}
				$this->setRoster($this->aRoster);
			}

			if ($this->aRaids !== null) {
				if ($this->aRaids->isModified() || $this->aRaids->isNew()) {
					$affectedRows += $this->aRaids->save($con);
				}
				$this->setRaids($this->aRaids);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = ItemsPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = ItemsPeer::doInsert($this, $con);
					$affectedRows += 1; // we are assuming that there is only 1 row per doInsert() which
										 // should always be true here (even though technically
										 // BasePeer::doInsert() can insert multiple rows).

					$this->setId($pk);  //[IMV] update autoincrement primary key

					$this->setNew(false);
				} else {
					$affectedRows += ItemsPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			$this->alreadyInSave = false;

		}
		return $affectedRows;
	} // doSave()

	/**
	 * Array of ValidationFailed objects.
	 * @var        array ValidationFailed[]
	 */
	protected $validationFailures = array();

	/**
	 * Gets any ValidationFailed objects that resulted from last call to validate().
	 *
	 *
	 * @return     array ValidationFailed[]
	 * @see        validate()
	 */
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	/**
	 * Validates the objects modified field values and all objects related to this table.
	 *
	 * If $columns is either a column name or an array of column names
	 * only those columns are validated.
	 *
	 * @param      mixed $columns Column name or an array of column names.
	 * @return     boolean Whether all columns pass validation.
	 * @see        doValidate()
	 * @see        getValidationFailures()
	 */
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	/**
	 * This function performs the validation work for complex object models.
	 *
	 * In addition to checking the current object, all related objects will
	 * also be validated.  If all pass then <code>true</code> is returned; otherwise
	 * an aggreagated array of ValidationFailed objects will be returned.
	 *
	 * @param      array $columns Array of column names to validate.
	 * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
	 */
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			// We call the validate method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aRoster !== null) {
				if (!$this->aRoster->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aRoster->getValidationFailures());
				}
			}

			if ($this->aRaids !== null) {
				if (!$this->aRaids->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aRaids->getValidationFailures());
				}
			}


			if (($retval = ItemsPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	/**
	 * Retrieves a field from the object by name passed in as a string.
	 *
	 * @param      string $name name
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     mixed Value of field.
	 */
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ItemsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		$field = $this->getByPosition($pos);
		return $field;
	}

	/**
	 * Retrieves a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @return     mixed Value of field at $pos
	 */
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getName();
				break;
			case 2:
				return $this->getPlayerid();
				break;
			case 3:
				return $this->getRaidid();
				break;
			case 4:
				return $this->getItemid();
				break;
			case 5:
				return $this->getBaseval();
				break;
			case 6:
				return $this->getInflatedval();
				break;
			default:
				return null;
				break;
		} // switch()
	}

	/**
	 * Exports the object as an array.
	 *
	 * You can specify the key type of the array by passing one of the class
	 * type constants.
	 *
	 * @param      string $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                        BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. Defaults to BasePeer::TYPE_PHPNAME.
	 * @param      boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns.  Defaults to TRUE.
	 * @return     an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true)
	{
		$keys = ItemsPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getName(),
			$keys[2] => $this->getPlayerid(),
			$keys[3] => $this->getRaidid(),
			$keys[4] => $this->getItemid(),
			$keys[5] => $this->getBaseval(),
			$keys[6] => $this->getInflatedval(),
		);
		return $result;
	}

	/**
	 * Sets a field from the object by name passed in as a string.
	 *
	 * @param      string $name peer name
	 * @param      mixed $value field value
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     void
	 */
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ItemsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	/**
	 * Sets a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @param      mixed $value field value
	 * @return     void
	 */
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setName($value);
				break;
			case 2:
				$this->setPlayerid($value);
				break;
			case 3:
				$this->setRaidid($value);
				break;
			case 4:
				$this->setItemid($value);
				break;
			case 5:
				$this->setBaseval($value);
				break;
			case 6:
				$this->setInflatedval($value);
				break;
		} // switch()
	}

	/**
	 * Populates the object using an array.
	 *
	 * This is particularly useful when populating an object from one of the
	 * request arrays (e.g. $_POST).  This method goes through the column
	 * names, checking to see whether a matching key exists in populated
	 * array. If so the setByName() method is called for that column.
	 *
	 * You can specify the key type of the array by additionally passing one
	 * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 * The default key type is the column's phpname (e.g. 'AuthorId')
	 *
	 * @param      array  $arr     An array to populate the object from.
	 * @param      string $keyType The type of keys the array uses.
	 * @return     void
	 */
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ItemsPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setName($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setPlayerid($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setRaidid($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setItemid($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setBaseval($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setInflatedval($arr[$keys[6]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(ItemsPeer::DATABASE_NAME);

		if ($this->isColumnModified(ItemsPeer::ID)) $criteria->add(ItemsPeer::ID, $this->id);
		if ($this->isColumnModified(ItemsPeer::NAME)) $criteria->add(ItemsPeer::NAME, $this->name);
		if ($this->isColumnModified(ItemsPeer::PLAYERID)) $criteria->add(ItemsPeer::PLAYERID, $this->playerid);
		if ($this->isColumnModified(ItemsPeer::RAIDID)) $criteria->add(ItemsPeer::RAIDID, $this->raidid);
		if ($this->isColumnModified(ItemsPeer::ITEMID)) $criteria->add(ItemsPeer::ITEMID, $this->itemid);
		if ($this->isColumnModified(ItemsPeer::BASEVAL)) $criteria->add(ItemsPeer::BASEVAL, $this->baseval);
		if ($this->isColumnModified(ItemsPeer::INFLATEDVAL)) $criteria->add(ItemsPeer::INFLATEDVAL, $this->inflatedval);

		return $criteria;
	}

	/**
	 * Builds a Criteria object containing the primary key for this object.
	 *
	 * Unlike buildCriteria() this method includes the primary key values regardless
	 * of whether or not they have been modified.
	 *
	 * @return     Criteria The Criteria object containing value(s) for primary key(s).
	 */
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(ItemsPeer::DATABASE_NAME);

		$criteria->add(ItemsPeer::ID, $this->id);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getId();
	}

	/**
	 * Generic method to set the primary key (id column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setId($key);
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Items (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setName($this->name);

		$copyObj->setPlayerid($this->playerid);

		$copyObj->setRaidid($this->raidid);

		$copyObj->setItemid($this->itemid);

		$copyObj->setBaseval($this->baseval);

		$copyObj->setInflatedval($this->inflatedval);


		$copyObj->setNew(true);

		$copyObj->setId(NULL); // this is a auto-increment column, so set to default value

	}

	/**
	 * Makes a copy of this object that will be inserted as a new row in table when saved.
	 * It creates a new object filling in the simple attributes, but skipping any primary
	 * keys that are defined for the table.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @return     Items Clone of current object.
	 * @throws     PropelException
	 */
	public function copy($deepCopy = false)
	{
		// we use get_class(), because this might be a subclass
		$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	/**
	 * Returns a peer instance associated with this om.
	 *
	 * Since Peer classes are not to have any instance attributes, this method returns the
	 * same instance for all member of this class. The method could therefore
	 * be static, but this would prevent one from overriding the behavior.
	 *
	 * @return     ItemsPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new ItemsPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a Roster object.
	 *
	 * @param      Roster $v
	 * @return     Items The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setRoster(Roster $v = null)
	{
		if ($v === null) {
			$this->setPlayerid(NULL);
		} else {
			$this->setPlayerid($v->getId());
		}

		$this->aRoster = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Roster object, it will not be re-added.
		if ($v !== null) {
			$v->addItems($this);
		}

		return $this;
	}


	/**
	 * Get the associated Roster object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Roster The associated Roster object.
	 * @throws     PropelException
	 */
	public function getRoster(PropelPDO $con = null)
	{
		if ($this->aRoster === null && ($this->playerid !== null)) {
			$c = new Criteria(RosterPeer::DATABASE_NAME);
			$c->add(RosterPeer::ID, $this->playerid);
			$this->aRoster = RosterPeer::doSelectOne($c, $con);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aRoster->addItemss($this);
			 */
		}
		return $this->aRoster;
	}

	/**
	 * Declares an association between this object and a Raids object.
	 *
	 * @param      Raids $v
	 * @return     Items The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setRaids(Raids $v = null)
	{
		if ($v === null) {
			$this->setRaidid(NULL);
		} else {
			$this->setRaidid($v->getId());
		}

		$this->aRaids = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Raids object, it will not be re-added.
		if ($v !== null) {
			$v->addItems($this);
		}

		return $this;
	}


	/**
	 * Get the associated Raids object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Raids The associated Raids object.
	 * @throws     PropelException
	 */
	public function getRaids(PropelPDO $con = null)
	{
		if ($this->aRaids === null && ($this->raidid !== null)) {
			$c = new Criteria(RaidsPeer::DATABASE_NAME);
			$c->add(RaidsPeer::ID, $this->raidid);
			$this->aRaids = RaidsPeer::doSelectOne($c, $con);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aRaids->addItemss($this);
			 */
		}
		return $this->aRaids;
	}

	/**
	 * Resets all collections of referencing foreign keys.
	 *
	 * This method is a user-space workaround for PHP's inability to garbage collect objects
	 * with circular references.  This is currently necessary when using Propel in certain
	 * daemon or large-volumne/high-memory operations.
	 *
	 * @param      boolean $deep Whether to also clear the references on all associated objects.
	 */
	public function clearAllReferences($deep = false)
	{
		if ($deep) {
		} // if ($deep)

			$this->aRoster = null;
			$this->aRaids = null;
	}


  public function __call($method, $arguments)
  {
    if (!$callable = sfMixer::getCallable('BaseItems:'.$method))
    {
      throw new sfException(sprintf('Call to undefined method BaseItems::%s', $method));
    }

    array_unshift($arguments, $this);

    return call_user_func_array($callable, $arguments);
  }


} // BaseItems
