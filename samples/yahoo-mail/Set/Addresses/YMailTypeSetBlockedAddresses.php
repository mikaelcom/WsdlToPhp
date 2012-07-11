<?php
/**
 * Class file for YMailTypeSetBlockedAddresses
 * @date 02/07/2012
 */
/**
 * Class YMailTypeSetBlockedAddresses
 * @date 02/07/2012
 */
class YMailTypeSetBlockedAddresses extends YMailWsdlClass
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
	 * Constructor
	 * @param string blockedAddress
	 * @return YMailTypeSetBlockedAddresses
	 */
	public function __construct($_blockedAddress = null)
	{
		parent::__construct(array('blockedAddress'=>$_blockedAddress));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>