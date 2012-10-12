<?php
/**
 * Class file for ConeSearchTypeCOOSYS
 * @date 13/10/2012
 */
/**
 * Class ConeSearchTypeCOOSYS
 * @date 13/10/2012
 */
class ConeSearchTypeCOOSYS extends ConeSearchWsdlClass
{
	/**
	 * The ID
	 * @var ID
	 */
	public $ID;
	/**
	 * The equinox
	 * @var token
	 */
	public $equinox;
	/**
	 * The epoch
	 * @var token
	 */
	public $epoch;
	/**
	 * The system
	 * Meta informations :
	 * 	- default : eq_FK5
	 * @var ConeSearchTypeCOOSYSSystem
	 */
	public $system;
	/**
	 * Constructor
	 * @param ID ID
	 * @param token equinox
	 * @param token epoch
	 * @param ConeSearchTypeCOOSYSSystem system
	 * @return ConeSearchTypeCOOSYS
	 */
	public function __construct($_ID = null,$_equinox = null,$_epoch = null,$_system = 'eq_FK5')
	{
		parent::__construct(array('ID'=>$_ID,'equinox'=>$_equinox,'epoch'=>$_epoch,'system'=>$_system));
	}
	/**
	 * Set ID
	 * @param ID ID
	 * @return ID
	 */
	public function setID($_ID)
	{
		return ($this->ID = $_ID);
	}
	/**
	 * Get ID
	 * @return ID
	 */
	public function getID()
	{
		return $this->ID;
	}
	/**
	 * Set equinox
	 * @param token equinox
	 * @return token
	 */
	public function setEquinox($_equinox)
	{
		return ($this->equinox = $_equinox);
	}
	/**
	 * Get equinox
	 * @return token
	 */
	public function getEquinox()
	{
		return $this->equinox;
	}
	/**
	 * Set epoch
	 * @param token epoch
	 * @return token
	 */
	public function setEpoch($_epoch)
	{
		return ($this->epoch = $_epoch);
	}
	/**
	 * Get epoch
	 * @return token
	 */
	public function getEpoch()
	{
		return $this->epoch;
	}
	/**
	 * Set system
	 * @param COOSYSSystem system
	 * @return COOSYSSystem
	 */
	public function setSystem($_system)
	{
		return ($this->system = ConeSearchTypeCOOSYSSystem::valueIsValid($_system)?$_system:null);
	}
	/**
	 * Get system
	 * @return ConeSearchTypeCOOSYSSystem
	 */
	public function getSystem()
	{
		return $this->system;
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>