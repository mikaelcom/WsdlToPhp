<?php
/**
 * Class file for XiVWAPTypeGetCorporateHistoricalVWAPResponse
 * @date 08/07/2012
 */
/**
 * Class XiVWAPTypeGetCorporateHistoricalVWAPResponse
 * @date 08/07/2012
 */
class XiVWAPTypeGetCorporateHistoricalVWAPResponse extends XiVWAPWsdlClass
{
	/**
	 * The GetCorporateHistoricalVWAPResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiVWAPTypeIntradayVWAP
	 */
	public $GetCorporateHistoricalVWAPResult;
	/**
	 * Constructor
	 * @param XiVWAPTypeIntradayVWAP GetCorporateHistoricalVWAPResult
	 * @return XiVWAPTypeGetCorporateHistoricalVWAPResponse
	 */
	public function __construct($_GetCorporateHistoricalVWAPResult = null)
	{
		parent::__construct(array('GetCorporateHistoricalVWAPResult'=>$_GetCorporateHistoricalVWAPResult));
	}
	/**
	 * Set GetCorporateHistoricalVWAPResult
	 * @param IntradayVWAP GetCorporateHistoricalVWAPResult
	 * @return IntradayVWAP
	 */
	public function setGetCorporateHistoricalVWAPResult($_GetCorporateHistoricalVWAPResult)
	{
		return ($this->GetCorporateHistoricalVWAPResult = $_GetCorporateHistoricalVWAPResult);
	}
	/**
	 * Get GetCorporateHistoricalVWAPResult
	 * @return XiVWAPTypeIntradayVWAP
	 */
	public function getGetCorporateHistoricalVWAPResult()
	{
		return $this->GetCorporateHistoricalVWAPResult;
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