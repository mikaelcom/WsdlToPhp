<?php
/**
 * Class file for SOFastTaxTypeGetCanadianTaxInfoByProvinceResponse
 * @date 08/07/2012
 */
/**
 * Class SOFastTaxTypeGetCanadianTaxInfoByProvinceResponse
 * @date 08/07/2012
 */
class SOFastTaxTypeGetCanadianTaxInfoByProvinceResponse extends SOFastTaxWsdlClass
{
	/**
	 * The GetCanadianTaxInfoByProvinceResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOFastTaxTypeCanadianTaxInfo
	 */
	public $GetCanadianTaxInfoByProvinceResult;
	/**
	 * Constructor
	 * @param SOFastTaxTypeCanadianTaxInfo GetCanadianTaxInfoByProvinceResult
	 * @return SOFastTaxTypeGetCanadianTaxInfoByProvinceResponse
	 */
	public function __construct($_GetCanadianTaxInfoByProvinceResult = null)
	{
		parent::__construct(array('GetCanadianTaxInfoByProvinceResult'=>$_GetCanadianTaxInfoByProvinceResult));
	}
	/**
	 * Set GetCanadianTaxInfoByProvinceResult
	 * @param CanadianTaxInfo GetCanadianTaxInfoByProvinceResult
	 * @return CanadianTaxInfo
	 */
	public function setGetCanadianTaxInfoByProvinceResult($_GetCanadianTaxInfoByProvinceResult)
	{
		return ($this->GetCanadianTaxInfoByProvinceResult = $_GetCanadianTaxInfoByProvinceResult);
	}
	/**
	 * Get GetCanadianTaxInfoByProvinceResult
	 * @return SOFastTaxTypeCanadianTaxInfo
	 */
	public function getGetCanadianTaxInfoByProvinceResult()
	{
		return $this->GetCanadianTaxInfoByProvinceResult;
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