<?php
/**
 * Class file for XiVWAPTypeGetCorporateIntradayVWAPResponse
 * @date 08/07/2012
 */
/**
 * Class XiVWAPTypeGetCorporateIntradayVWAPResponse
 * @date 08/07/2012
 */
class XiVWAPTypeGetCorporateIntradayVWAPResponse extends XiVWAPWsdlClass
{
	/**
	 * The GetCorporateIntradayVWAPResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiVWAPTypeIntradayVWAP
	 */
	public $GetCorporateIntradayVWAPResult;
	/**
	 * Constructor
	 * @param XiVWAPTypeIntradayVWAP GetCorporateIntradayVWAPResult
	 * @return XiVWAPTypeGetCorporateIntradayVWAPResponse
	 */
	public function __construct($_GetCorporateIntradayVWAPResult = null)
	{
		parent::__construct(array('GetCorporateIntradayVWAPResult'=>$_GetCorporateIntradayVWAPResult));
	}
	/**
	 * Set GetCorporateIntradayVWAPResult
	 * @param IntradayVWAP GetCorporateIntradayVWAPResult
	 * @return IntradayVWAP
	 */
	public function setGetCorporateIntradayVWAPResult($_GetCorporateIntradayVWAPResult)
	{
		return ($this->GetCorporateIntradayVWAPResult = $_GetCorporateIntradayVWAPResult);
	}
	/**
	 * Get GetCorporateIntradayVWAPResult
	 * @return XiVWAPTypeIntradayVWAP
	 */
	public function getGetCorporateIntradayVWAPResult()
	{
		return $this->GetCorporateIntradayVWAPResult;
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