<?php
/**
 * Class file for LifePicsTypeGetStoresByPostalCode
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeGetStoresByPostalCode
 * @date 02/08/2012
 */
class LifePicsTypeGetStoresByPostalCode extends LifePicsWsdlClass
{
	/**
	 * The SessionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SessionID;
	/**
	 * The PostalCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PostalCode;
	/**
	 * The PickupOnly
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $PickupOnly;
	/**
	 * Constructor
	 * @param string SessionID
	 * @param string PostalCode
	 * @param boolean PickupOnly
	 * @return LifePicsTypeGetStoresByPostalCode
	 */
	public function __construct($_SessionID = null,$_PostalCode = null,$_PickupOnly)
	{
		parent::__construct(array('SessionID'=>$_SessionID,'PostalCode'=>$_PostalCode,'PickupOnly'=>$_PickupOnly));
	}
	/**
	 * Set SessionID
	 * @param string SessionID
	 * @return string
	 */
	public function setSessionID($_SessionID)
	{
		return ($this->SessionID = $_SessionID);
	}
	/**
	 * Get SessionID
	 * @return string
	 */
	public function getSessionID()
	{
		return $this->SessionID;
	}
	/**
	 * Set PostalCode
	 * @param string PostalCode
	 * @return string
	 */
	public function setPostalCode($_PostalCode)
	{
		return ($this->PostalCode = $_PostalCode);
	}
	/**
	 * Get PostalCode
	 * @return string
	 */
	public function getPostalCode()
	{
		return $this->PostalCode;
	}
	/**
	 * Set PickupOnly
	 * @param boolean PickupOnly
	 * @return boolean
	 */
	public function setPickupOnly($_PickupOnly)
	{
		return ($this->PickupOnly = $_PickupOnly);
	}
	/**
	 * Get PickupOnly
	 * @return boolean
	 */
	public function getPickupOnly()
	{
		return $this->PickupOnly;
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