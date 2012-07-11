<?php
/**
 * Class file for CdyneIntAddressTypeVerifyAddressInternationalResponse
 * @date 03/07/2012
 */
/**
 * Class CdyneIntAddressTypeVerifyAddressInternationalResponse
 * @date 03/07/2012
 */
class CdyneIntAddressTypeVerifyAddressInternationalResponse extends CdyneIntAddressWsdlClass
{
	/**
	 * The VerifyAddressInternationalResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var CdyneIntAddressTypeAddressInternationalResponse
	 */
	public $VerifyAddressInternationalResult;
	/**
	 * Constructor
	 * @param CdyneIntAddressTypeAddressInternationalResponse VerifyAddressInternationalResult
	 * @return CdyneIntAddressTypeVerifyAddressInternationalResponse
	 */
	public function __construct($_VerifyAddressInternationalResult = null)
	{
		parent::__construct(array('VerifyAddressInternationalResult'=>$_VerifyAddressInternationalResult));
	}
	/**
	 * Set VerifyAddressInternationalResult
	 * @param AddressInternationalResponse VerifyAddressInternationalResult
	 * @return AddressInternationalResponse
	 */
	public function setVerifyAddressInternationalResult($_VerifyAddressInternationalResult)
	{
		return ($this->VerifyAddressInternationalResult = $_VerifyAddressInternationalResult);
	}
	/**
	 * Get VerifyAddressInternationalResult
	 * @return CdyneIntAddressTypeAddressInternationalResponse
	 */
	public function getVerifyAddressInternationalResult()
	{
		return $this->VerifyAddressInternationalResult;
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