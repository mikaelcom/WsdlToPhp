<?php
/**
 * Class file for XiMoneyMarketsTypeGetSwaptionFamilyResponse
 * @date 08/07/2012
 */
/**
 * Class XiMoneyMarketsTypeGetSwaptionFamilyResponse
 * @date 08/07/2012
 */
class XiMoneyMarketsTypeGetSwaptionFamilyResponse extends XiMoneyMarketsWsdlClass
{
	/**
	 * The GetSwaptionFamilyResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMoneyMarketsTypeArrayOfSwaption
	 */
	public $GetSwaptionFamilyResult;
	/**
	 * Constructor
	 * @param XiMoneyMarketsTypeArrayOfSwaption GetSwaptionFamilyResult
	 * @return XiMoneyMarketsTypeGetSwaptionFamilyResponse
	 */
	public function __construct($_GetSwaptionFamilyResult = null)
	{
		parent::__construct(array('GetSwaptionFamilyResult'=>new XiMoneyMarketsTypeArrayOfSwaption($_GetSwaptionFamilyResult)));
	}
	/**
	 * Set GetSwaptionFamilyResult
	 * @param ArrayOfSwaption GetSwaptionFamilyResult
	 * @return ArrayOfSwaption
	 */
	public function setGetSwaptionFamilyResult($_GetSwaptionFamilyResult)
	{
		return ($this->GetSwaptionFamilyResult = $_GetSwaptionFamilyResult);
	}
	/**
	 * Get GetSwaptionFamilyResult
	 * @return XiMoneyMarketsTypeArrayOfSwaption
	 */
	public function getGetSwaptionFamilyResult()
	{
		return $this->GetSwaptionFamilyResult;
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