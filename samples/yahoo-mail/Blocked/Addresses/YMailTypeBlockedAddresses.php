<?php
/**
 * Class file for YMailTypeBlockedAddresses
 * @date 02/07/2012
 */
/**
 * Class YMailTypeBlockedAddresses
 * @date 02/07/2012
 */
class YMailTypeBlockedAddresses extends YMailWsdlClass
{
	/**
	 * The blockedAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var string
	 */
	public $blockedAddress;
	/**
	 * The blockedAddressesTotal
	 * Meta informations :
	 * 	- use : optional
	 * @var int
	 */
	public $blockedAddressesTotal;
	/**
	 * The blockedAddressesMax
	 * Meta informations :
	 * 	- use : optional
	 * @var int
	 */
	public $blockedAddressesMax;
	/**
	 * Constructor
	 * @param string blockedAddress
	 * @param int blockedAddressesTotal
	 * @param int blockedAddressesMax
	 * @return YMailTypeBlockedAddresses
	 */
	public function __construct($_blockedAddress = null,$_blockedAddressesTotal = null,$_blockedAddressesMax = null)
	{
		parent::__construct(array('blockedAddress'=>$_blockedAddress,'blockedAddressesTotal'=>$_blockedAddressesTotal,'blockedAddressesMax'=>$_blockedAddressesMax));
	}
	/**
	 * Set blockedAddress
	 * @param string blockedAddress
	 * @return string
	 */
	public function setBlockedAddress($_blockedAddress)
	{
		return ($this->blockedAddress = $_blockedAddress);
	}
	/**
	 * Get blockedAddress
	 * @return string
	 */
	public function getBlockedAddress()
	{
		return $this->blockedAddress;
	}
	/**
	 * Set blockedAddressesTotal
	 * @param int blockedAddressesTotal
	 * @return int
	 */
	public function setBlockedAddressesTotal($_blockedAddressesTotal)
	{
		return ($this->blockedAddressesTotal = $_blockedAddressesTotal);
	}
	/**
	 * Get blockedAddressesTotal
	 * @return int
	 */
	public function getBlockedAddressesTotal()
	{
		return $this->blockedAddressesTotal;
	}
	/**
	 * Set blockedAddressesMax
	 * @param int blockedAddressesMax
	 * @return int
	 */
	public function setBlockedAddressesMax($_blockedAddressesMax)
	{
		return ($this->blockedAddressesMax = $_blockedAddressesMax);
	}
	/**
	 * Get blockedAddressesMax
	 * @return int
	 */
	public function getBlockedAddressesMax()
	{
		return $this->blockedAddressesMax;
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