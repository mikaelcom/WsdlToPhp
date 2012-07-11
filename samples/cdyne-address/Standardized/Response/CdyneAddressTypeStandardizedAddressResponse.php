<?php
/**
 * Class file for CdyneAddressTypeStandardizedAddressResponse
 * @date 02/07/2012
 */
/**
 * Class CdyneAddressTypeStandardizedAddressResponse
 * @date 02/07/2012
 */
class CdyneAddressTypeStandardizedAddressResponse extends CdyneAddressWsdlClass
{
	/**
	 * The StandardizedAddressResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var CdyneAddressTypeAddress
	 */
	public $StandardizedAddressResult;
	/**
	 * Constructor
	 * @param CdyneAddressTypeAddress StandardizedAddressResult
	 * @return CdyneAddressTypeStandardizedAddressResponse
	 */
	public function __construct($_StandardizedAddressResult = null)
	{
		parent::__construct(array('StandardizedAddressResult'=>$_StandardizedAddressResult));
	}
	/**
	 * Set StandardizedAddressResult
	 * @param Address StandardizedAddressResult
	 * @return Address
	 */
	public function setStandardizedAddressResult($_StandardizedAddressResult)
	{
		return ($this->StandardizedAddressResult = $_StandardizedAddressResult);
	}
	/**
	 * Get StandardizedAddressResult
	 * @return CdyneAddressTypeAddress
	 */
	public function getStandardizedAddressResult()
	{
		return $this->StandardizedAddressResult;
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