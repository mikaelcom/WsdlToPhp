<?php
/**
 * Class file for XiVWAPTypeGetHistoricalIntradayVWAPResponse
 * @date 08/07/2012
 */
/**
 * Class XiVWAPTypeGetHistoricalIntradayVWAPResponse
 * @date 08/07/2012
 */
class XiVWAPTypeGetHistoricalIntradayVWAPResponse extends XiVWAPWsdlClass
{
	/**
	 * The GetHistoricalIntradayVWAPResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiVWAPTypeIntradayVWAP
	 */
	public $GetHistoricalIntradayVWAPResult;
	/**
	 * Constructor
	 * @param XiVWAPTypeIntradayVWAP GetHistoricalIntradayVWAPResult
	 * @return XiVWAPTypeGetHistoricalIntradayVWAPResponse
	 */
	public function __construct($_GetHistoricalIntradayVWAPResult = null)
	{
		parent::__construct(array('GetHistoricalIntradayVWAPResult'=>$_GetHistoricalIntradayVWAPResult));
	}
	/**
	 * Set GetHistoricalIntradayVWAPResult
	 * @param IntradayVWAP GetHistoricalIntradayVWAPResult
	 * @return IntradayVWAP
	 */
	public function setGetHistoricalIntradayVWAPResult($_GetHistoricalIntradayVWAPResult)
	{
		return ($this->GetHistoricalIntradayVWAPResult = $_GetHistoricalIntradayVWAPResult);
	}
	/**
	 * Get GetHistoricalIntradayVWAPResult
	 * @return XiVWAPTypeIntradayVWAP
	 */
	public function getGetHistoricalIntradayVWAPResult()
	{
		return $this->GetHistoricalIntradayVWAPResult;
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