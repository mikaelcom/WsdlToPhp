<?php
/**
 * Class file for SOFastTaxTypeGetTaxInfoByCityStateResponse
 * @date 08/07/2012
 */
/**
 * Class SOFastTaxTypeGetTaxInfoByCityStateResponse
 * @date 08/07/2012
 */
class SOFastTaxTypeGetTaxInfoByCityStateResponse extends SOFastTaxWsdlClass
{
	/**
	 * The GetTaxInfoByCityStateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOFastTaxTypeTaxInfoMulti
	 */
	public $GetTaxInfoByCityStateResult;
	/**
	 * Constructor
	 * @param SOFastTaxTypeTaxInfoMulti GetTaxInfoByCityStateResult
	 * @return SOFastTaxTypeGetTaxInfoByCityStateResponse
	 */
	public function __construct($_GetTaxInfoByCityStateResult = null)
	{
		parent::__construct(array('GetTaxInfoByCityStateResult'=>$_GetTaxInfoByCityStateResult));
	}
	/**
	 * Set GetTaxInfoByCityStateResult
	 * @param TaxInfoMulti GetTaxInfoByCityStateResult
	 * @return TaxInfoMulti
	 */
	public function setGetTaxInfoByCityStateResult($_GetTaxInfoByCityStateResult)
	{
		return ($this->GetTaxInfoByCityStateResult = $_GetTaxInfoByCityStateResult);
	}
	/**
	 * Get GetTaxInfoByCityStateResult
	 * @return SOFastTaxTypeTaxInfoMulti
	 */
	public function getGetTaxInfoByCityStateResult()
	{
		return $this->GetTaxInfoByCityStateResult;
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