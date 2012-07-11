<?php
/**
 * Class file for XiMoneyMarketsTypeGetHistoricalSwaptionFamilyResponse
 * @date 08/07/2012
 */
/**
 * Class XiMoneyMarketsTypeGetHistoricalSwaptionFamilyResponse
 * @date 08/07/2012
 */
class XiMoneyMarketsTypeGetHistoricalSwaptionFamilyResponse extends XiMoneyMarketsWsdlClass
{
	/**
	 * The GetHistoricalSwaptionFamilyResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMoneyMarketsTypeArrayOfSwaption
	 */
	public $GetHistoricalSwaptionFamilyResult;
	/**
	 * Constructor
	 * @param XiMoneyMarketsTypeArrayOfSwaption GetHistoricalSwaptionFamilyResult
	 * @return XiMoneyMarketsTypeGetHistoricalSwaptionFamilyResponse
	 */
	public function __construct($_GetHistoricalSwaptionFamilyResult = null)
	{
		parent::__construct(array('GetHistoricalSwaptionFamilyResult'=>new XiMoneyMarketsTypeArrayOfSwaption($_GetHistoricalSwaptionFamilyResult)));
	}
	/**
	 * Set GetHistoricalSwaptionFamilyResult
	 * @param ArrayOfSwaption GetHistoricalSwaptionFamilyResult
	 * @return ArrayOfSwaption
	 */
	public function setGetHistoricalSwaptionFamilyResult($_GetHistoricalSwaptionFamilyResult)
	{
		return ($this->GetHistoricalSwaptionFamilyResult = $_GetHistoricalSwaptionFamilyResult);
	}
	/**
	 * Get GetHistoricalSwaptionFamilyResult
	 * @return XiMoneyMarketsTypeArrayOfSwaption
	 */
	public function getGetHistoricalSwaptionFamilyResult()
	{
		return $this->GetHistoricalSwaptionFamilyResult;
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