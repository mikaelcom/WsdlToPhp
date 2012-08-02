<?php
/**
 * Class file for LifePicsTypeGetStoresByPostalCodeDistanceMerchantGroup
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeGetStoresByPostalCodeDistanceMerchantGroup
 * @date 02/08/2012
 */
class LifePicsTypeGetStoresByPostalCodeDistanceMerchantGroup extends LifePicsWsdlClass
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
	 * The Distance
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Distance;
	/**
	 * The PickupOnly
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $PickupOnly;
	/**
	 * The MerchantGroupKey
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $MerchantGroupKey;
	/**
	 * Constructor
	 * @param string SessionID
	 * @param string PostalCode
	 * @param string Distance
	 * @param boolean PickupOnly
	 * @param string MerchantGroupKey
	 * @return LifePicsTypeGetStoresByPostalCodeDistanceMerchantGroup
	 */
	public function __construct($_SessionID = null,$_PostalCode = null,$_Distance = null,$_PickupOnly,$_MerchantGroupKey = null)
	{
		parent::__construct(array('SessionID'=>$_SessionID,'PostalCode'=>$_PostalCode,'Distance'=>$_Distance,'PickupOnly'=>$_PickupOnly,'MerchantGroupKey'=>$_MerchantGroupKey));
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
	 * Set Distance
	 * @param string Distance
	 * @return string
	 */
	public function setDistance($_Distance)
	{
		return ($this->Distance = $_Distance);
	}
	/**
	 * Get Distance
	 * @return string
	 */
	public function getDistance()
	{
		return $this->Distance;
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
	 * Set MerchantGroupKey
	 * @param string MerchantGroupKey
	 * @return string
	 */
	public function setMerchantGroupKey($_MerchantGroupKey)
	{
		return ($this->MerchantGroupKey = $_MerchantGroupKey);
	}
	/**
	 * Get MerchantGroupKey
	 * @return string
	 */
	public function getMerchantGroupKey()
	{
		return $this->MerchantGroupKey;
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