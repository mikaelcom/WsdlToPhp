<?php
/**
 * Class file for SOFastTaxTypeGetTaxInfoResponse
 * @date 08/07/2012
 */
/**
 * Class SOFastTaxTypeGetTaxInfoResponse
 * @date 08/07/2012
 */
class SOFastTaxTypeGetTaxInfoResponse extends SOFastTaxWsdlClass
{
	/**
	 * The GetTaxInfoResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOFastTaxTypeTaxInfo
	 */
	public $GetTaxInfoResult;
	/**
	 * Constructor
	 * @param SOFastTaxTypeTaxInfo GetTaxInfoResult
	 * @return SOFastTaxTypeGetTaxInfoResponse
	 */
	public function __construct($_GetTaxInfoResult = null)
	{
		parent::__construct(array('GetTaxInfoResult'=>$_GetTaxInfoResult));
	}
	/**
	 * Set GetTaxInfoResult
	 * @param TaxInfo GetTaxInfoResult
	 * @return TaxInfo
	 */
	public function setGetTaxInfoResult($_GetTaxInfoResult)
	{
		return ($this->GetTaxInfoResult = $_GetTaxInfoResult);
	}
	/**
	 * Get GetTaxInfoResult
	 * @return SOFastTaxTypeTaxInfo
	 */
	public function getGetTaxInfoResult()
	{
		return $this->GetTaxInfoResult;
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