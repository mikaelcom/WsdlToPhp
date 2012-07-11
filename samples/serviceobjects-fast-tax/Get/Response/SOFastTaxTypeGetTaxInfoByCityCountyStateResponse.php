<?php
/**
 * Class file for SOFastTaxTypeGetTaxInfoByCityCountyStateResponse
 * @date 08/07/2012
 */
/**
 * Class SOFastTaxTypeGetTaxInfoByCityCountyStateResponse
 * @date 08/07/2012
 */
class SOFastTaxTypeGetTaxInfoByCityCountyStateResponse extends SOFastTaxWsdlClass
{
	/**
	 * The GetTaxInfoByCityCountyStateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOFastTaxTypeTaxInfo
	 */
	public $GetTaxInfoByCityCountyStateResult;
	/**
	 * Constructor
	 * @param SOFastTaxTypeTaxInfo GetTaxInfoByCityCountyStateResult
	 * @return SOFastTaxTypeGetTaxInfoByCityCountyStateResponse
	 */
	public function __construct($_GetTaxInfoByCityCountyStateResult = null)
	{
		parent::__construct(array('GetTaxInfoByCityCountyStateResult'=>$_GetTaxInfoByCityCountyStateResult));
	}
	/**
	 * Set GetTaxInfoByCityCountyStateResult
	 * @param TaxInfo GetTaxInfoByCityCountyStateResult
	 * @return TaxInfo
	 */
	public function setGetTaxInfoByCityCountyStateResult($_GetTaxInfoByCityCountyStateResult)
	{
		return ($this->GetTaxInfoByCityCountyStateResult = $_GetTaxInfoByCityCountyStateResult);
	}
	/**
	 * Get GetTaxInfoByCityCountyStateResult
	 * @return SOFastTaxTypeTaxInfo
	 */
	public function getGetTaxInfoByCityCountyStateResult()
	{
		return $this->GetTaxInfoByCityCountyStateResult;
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