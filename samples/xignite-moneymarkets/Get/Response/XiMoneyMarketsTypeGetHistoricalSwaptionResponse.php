<?php
/**
 * Class file for XiMoneyMarketsTypeGetHistoricalSwaptionResponse
 * @date 08/07/2012
 */
/**
 * Class XiMoneyMarketsTypeGetHistoricalSwaptionResponse
 * @date 08/07/2012
 */
class XiMoneyMarketsTypeGetHistoricalSwaptionResponse extends XiMoneyMarketsWsdlClass
{
	/**
	 * The GetHistoricalSwaptionResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMoneyMarketsTypeSwaption
	 */
	public $GetHistoricalSwaptionResult;
	/**
	 * Constructor
	 * @param XiMoneyMarketsTypeSwaption GetHistoricalSwaptionResult
	 * @return XiMoneyMarketsTypeGetHistoricalSwaptionResponse
	 */
	public function __construct($_GetHistoricalSwaptionResult = null)
	{
		parent::__construct(array('GetHistoricalSwaptionResult'=>$_GetHistoricalSwaptionResult));
	}
	/**
	 * Set GetHistoricalSwaptionResult
	 * @param Swaption GetHistoricalSwaptionResult
	 * @return Swaption
	 */
	public function setGetHistoricalSwaptionResult($_GetHistoricalSwaptionResult)
	{
		return ($this->GetHistoricalSwaptionResult = $_GetHistoricalSwaptionResult);
	}
	/**
	 * Get GetHistoricalSwaptionResult
	 * @return XiMoneyMarketsTypeSwaption
	 */
	public function getGetHistoricalSwaptionResult()
	{
		return $this->GetHistoricalSwaptionResult;
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