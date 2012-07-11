<?php
/**
 * Class file for XiGlobalrealtimeoptionsTypeGetEquityOptionBySymbolsResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalrealtimeoptionsTypeGetEquityOptionBySymbolsResponse
 * @date 08/07/2012
 */
class XiGlobalrealtimeoptionsTypeGetEquityOptionBySymbolsResponse extends XiGlobalrealtimeoptionsWsdlClass
{
	/**
	 * The GetEquityOptionBySymbolsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalrealtimeoptionsTypeArrayOfOption
	 */
	public $GetEquityOptionBySymbolsResult;
	/**
	 * Constructor
	 * @param XiGlobalrealtimeoptionsTypeArrayOfOption GetEquityOptionBySymbolsResult
	 * @return XiGlobalrealtimeoptionsTypeGetEquityOptionBySymbolsResponse
	 */
	public function __construct($_GetEquityOptionBySymbolsResult = null)
	{
		parent::__construct(array('GetEquityOptionBySymbolsResult'=>new XiGlobalrealtimeoptionsTypeArrayOfOption($_GetEquityOptionBySymbolsResult)));
	}
	/**
	 * Set GetEquityOptionBySymbolsResult
	 * @param ArrayOfOption GetEquityOptionBySymbolsResult
	 * @return ArrayOfOption
	 */
	public function setGetEquityOptionBySymbolsResult($_GetEquityOptionBySymbolsResult)
	{
		return ($this->GetEquityOptionBySymbolsResult = $_GetEquityOptionBySymbolsResult);
	}
	/**
	 * Get GetEquityOptionBySymbolsResult
	 * @return XiGlobalrealtimeoptionsTypeArrayOfOption
	 */
	public function getGetEquityOptionBySymbolsResult()
	{
		return $this->GetEquityOptionBySymbolsResult;
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