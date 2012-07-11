<?php
/**
 * Class file for XWeb1003TypeAddresses
 * @date 09/07/2012
 */
/**
 * Class XWeb1003TypeAddresses
 * @date 09/07/2012
 */
class XWeb1003TypeAddresses extends XWeb1003WsdlClass
{
	/**
	 * The Address
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 3
	 * @var XWeb1003TypeAddressType
	 */
	public $Address;
	/**
	 * Constructor
	 * @param XWeb1003TypeAddressType Address
	 * @return XWeb1003TypeAddresses
	 */
	public function __construct($_Address = null)
	{
		parent::__construct(array('Address'=>$_Address));
	}
	/**
	 * Set Address
	 * @param AddressType Address
	 * @return AddressType
	 */
	public function setAddress($_Address)
	{
		return ($this->Address = $_Address);
	}
	/**
	 * Get Address
	 * @return XWeb1003TypeAddressType
	 */
	public function getAddress()
	{
		return $this->Address;
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