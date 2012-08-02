<?php
/**
 * Class file for LifePicsTypeGetStoresByPostalCodePaging
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeGetStoresByPostalCodePaging
 * @date 02/08/2012
 */
class LifePicsTypeGetStoresByPostalCodePaging extends LifePicsWsdlClass
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
	 * The StartIndex
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $StartIndex;
	/**
	 * The DisplayCount
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $DisplayCount;
	/**
	 * Constructor
	 * @param string SessionID
	 * @param string PostalCode
	 * @param boolean PickupOnly
	 * @param int StartIndex
	 * @param int DisplayCount
	 * @return LifePicsTypeGetStoresByPostalCodePaging
	 */
	public function __construct($_SessionID = null,$_PostalCode = null,$_PickupOnly,$_StartIndex,$_DisplayCount)
	{
		parent::__construct(array('SessionID'=>$_SessionID,'PostalCode'=>$_PostalCode,'PickupOnly'=>$_PickupOnly,'StartIndex'=>$_StartIndex,'DisplayCount'=>$_DisplayCount));
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
	 * Set StartIndex
	 * @param int StartIndex
	 * @return int
	 */
	public function setStartIndex($_StartIndex)
	{
		return ($this->StartIndex = $_StartIndex);
	}
	/**
	 * Get StartIndex
	 * @return int
	 */
	public function getStartIndex()
	{
		return $this->StartIndex;
	}
	/**
	 * Set DisplayCount
	 * @param int DisplayCount
	 * @return int
	 */
	public function setDisplayCount($_DisplayCount)
	{
		return ($this->DisplayCount = $_DisplayCount);
	}
	/**
	 * Get DisplayCount
	 * @return int
	 */
	public function getDisplayCount()
	{
		return $this->DisplayCount;
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