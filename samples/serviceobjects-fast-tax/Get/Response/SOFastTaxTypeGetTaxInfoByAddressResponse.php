<?php
/**
 * Class file for SOFastTaxTypeGetTaxInfoByAddressResponse
 * @date 08/07/2012
 */
/**
 * Class SOFastTaxTypeGetTaxInfoByAddressResponse
 * @date 08/07/2012
 */
class SOFastTaxTypeGetTaxInfoByAddressResponse extends SOFastTaxWsdlClass
{
	/**
	 * The GetTaxInfoByAddressResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOFastTaxTypeTaxInfo
	 */
	public $GetTaxInfoByAddressResult;
	/**
	 * Constructor
	 * @param SOFastTaxTypeTaxInfo GetTaxInfoByAddressResult
	 * @return SOFastTaxTypeGetTaxInfoByAddressResponse
	 */
	public function __construct($_GetTaxInfoByAddressResult = null)
	{
		parent::__construct(array('GetTaxInfoByAddressResult'=>$_GetTaxInfoByAddressResult));
	}
	/**
	 * Set GetTaxInfoByAddressResult
	 * @param TaxInfo GetTaxInfoByAddressResult
	 * @return TaxInfo
	 */
	public function setGetTaxInfoByAddressResult($_GetTaxInfoByAddressResult)
	{
		return ($this->GetTaxInfoByAddressResult = $_GetTaxInfoByAddressResult);
	}
	/**
	 * Get GetTaxInfoByAddressResult
	 * @return SOFastTaxTypeTaxInfo
	 */
	public function getGetTaxInfoByAddressResult()
	{
		return $this->GetTaxInfoByAddressResult;
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