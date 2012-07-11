<?php
/**
 * Class file for CdyneAddressTypeCheckAddressResponse
 * @date 02/07/2012
 */
/**
 * Class CdyneAddressTypeCheckAddressResponse
 * @date 02/07/2012
 */
class CdyneAddressTypeCheckAddressResponse extends CdyneAddressWsdlClass
{
	/**
	 * The CheckAddressResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var CdyneAddressTypeAddress
	 */
	public $CheckAddressResult;
	/**
	 * Constructor
	 * @param CdyneAddressTypeAddress CheckAddressResult
	 * @return CdyneAddressTypeCheckAddressResponse
	 */
	public function __construct($_CheckAddressResult = null)
	{
		parent::__construct(array('CheckAddressResult'=>$_CheckAddressResult));
	}
	/**
	 * Set CheckAddressResult
	 * @param Address CheckAddressResult
	 * @return Address
	 */
	public function setCheckAddressResult($_CheckAddressResult)
	{
		return ($this->CheckAddressResult = $_CheckAddressResult);
	}
	/**
	 * Get CheckAddressResult
	 * @return CdyneAddressTypeAddress
	 */
	public function getCheckAddressResult()
	{
		return $this->CheckAddressResult;
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