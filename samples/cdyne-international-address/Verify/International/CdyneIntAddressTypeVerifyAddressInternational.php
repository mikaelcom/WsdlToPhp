<?php
/**
 * Class file for CdyneIntAddressTypeVerifyAddressInternational
 * @date 03/07/2012
 */
/**
 * Class CdyneIntAddressTypeVerifyAddressInternational
 * @date 03/07/2012
 */
class CdyneIntAddressTypeVerifyAddressInternational extends CdyneIntAddressWsdlClass
{
	/**
	 * The Request
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var CdyneIntAddressTypeAddressInternationalRequest
	 */
	public $Request;
	/**
	 * Constructor
	 * @param CdyneIntAddressTypeAddressInternationalRequest Request
	 * @return CdyneIntAddressTypeVerifyAddressInternational
	 */
	public function __construct($_Request = null)
	{
		parent::__construct(array('Request'=>$_Request));
	}
	/**
	 * Set Request
	 * @param AddressInternationalRequest Request
	 * @return AddressInternationalRequest
	 */
	public function setRequest($_Request)
	{
		return ($this->Request = $_Request);
	}
	/**
	 * Get Request
	 * @return CdyneIntAddressTypeAddressInternationalRequest
	 */
	public function getRequest()
	{
		return $this->Request;
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