<?php
/**
 * Class file for SOFastTaxTypeGetTaxInfoByZip_V2Response
 * @date 08/07/2012
 */
/**
 * Class SOFastTaxTypeGetTaxInfoByZip_V2Response
 * @date 08/07/2012
 */
class SOFastTaxTypeGetTaxInfoByZip_V2Response extends SOFastTaxWsdlClass
{
	/**
	 * The GetTaxInfoByZip_V2Result
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOFastTaxTypeTaxInfoMulti
	 */
	public $GetTaxInfoByZip_V2Result;
	/**
	 * Constructor
	 * @param SOFastTaxTypeTaxInfoMulti GetTaxInfoByZip_V2Result
	 * @return SOFastTaxTypeGetTaxInfoByZip_V2Response
	 */
	public function __construct($_GetTaxInfoByZip_V2Result = null)
	{
		parent::__construct(array('GetTaxInfoByZip_V2Result'=>$_GetTaxInfoByZip_V2Result));
	}
	/**
	 * Set GetTaxInfoByZip_V2Result
	 * @param TaxInfoMulti GetTaxInfoByZip_V2Result
	 * @return TaxInfoMulti
	 */
	public function setGetTaxInfoByZip_V2Result($_GetTaxInfoByZip_V2Result)
	{
		return ($this->GetTaxInfoByZip_V2Result = $_GetTaxInfoByZip_V2Result);
	}
	/**
	 * Get GetTaxInfoByZip_V2Result
	 * @return SOFastTaxTypeTaxInfoMulti
	 */
	public function getGetTaxInfoByZip_V2Result()
	{
		return $this->GetTaxInfoByZip_V2Result;
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