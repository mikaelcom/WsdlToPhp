<?php
/**
 * Class file for XiCurrenciesTypeGetHistoricalHighLowResponse
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeGetHistoricalHighLowResponse
 * @date 08/07/2012
 */
class XiCurrenciesTypeGetHistoricalHighLowResponse extends XiCurrenciesWsdlClass
{
	/**
	 * The GetHistoricalHighLowResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeHighLowTick
	 */
	public $GetHistoricalHighLowResult;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeHighLowTick GetHistoricalHighLowResult
	 * @return XiCurrenciesTypeGetHistoricalHighLowResponse
	 */
	public function __construct($_GetHistoricalHighLowResult = null)
	{
		parent::__construct(array('GetHistoricalHighLowResult'=>$_GetHistoricalHighLowResult));
	}
	/**
	 * Set GetHistoricalHighLowResult
	 * @param HighLowTick GetHistoricalHighLowResult
	 * @return HighLowTick
	 */
	public function setGetHistoricalHighLowResult($_GetHistoricalHighLowResult)
	{
		return ($this->GetHistoricalHighLowResult = $_GetHistoricalHighLowResult);
	}
	/**
	 * Get GetHistoricalHighLowResult
	 * @return XiCurrenciesTypeHighLowTick
	 */
	public function getGetHistoricalHighLowResult()
	{
		return $this->GetHistoricalHighLowResult;
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