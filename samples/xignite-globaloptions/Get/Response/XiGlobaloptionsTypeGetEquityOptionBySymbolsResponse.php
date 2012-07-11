<?php
/**
 * Class file for XiGlobaloptionsTypeGetEquityOptionBySymbolsResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobaloptionsTypeGetEquityOptionBySymbolsResponse
 * @date 08/07/2012
 */
class XiGlobaloptionsTypeGetEquityOptionBySymbolsResponse extends XiGlobaloptionsWsdlClass
{
	/**
	 * The GetEquityOptionBySymbolsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobaloptionsTypeArrayOfOption
	 */
	public $GetEquityOptionBySymbolsResult;
	/**
	 * Constructor
	 * @param XiGlobaloptionsTypeArrayOfOption GetEquityOptionBySymbolsResult
	 * @return XiGlobaloptionsTypeGetEquityOptionBySymbolsResponse
	 */
	public function __construct($_GetEquityOptionBySymbolsResult = null)
	{
		parent::__construct(array('GetEquityOptionBySymbolsResult'=>new XiGlobaloptionsTypeArrayOfOption($_GetEquityOptionBySymbolsResult)));
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
	 * @return XiGlobaloptionsTypeArrayOfOption
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