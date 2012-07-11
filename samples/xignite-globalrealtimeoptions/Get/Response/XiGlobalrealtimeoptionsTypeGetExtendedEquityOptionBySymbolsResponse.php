<?php
/**
 * Class file for XiGlobalrealtimeoptionsTypeGetExtendedEquityOptionBySymbolsResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalrealtimeoptionsTypeGetExtendedEquityOptionBySymbolsResponse
 * @date 08/07/2012
 */
class XiGlobalrealtimeoptionsTypeGetExtendedEquityOptionBySymbolsResponse extends XiGlobalrealtimeoptionsWsdlClass
{
	/**
	 * The GetExtendedEquityOptionBySymbolsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalrealtimeoptionsTypeArrayOfExtendedOption
	 */
	public $GetExtendedEquityOptionBySymbolsResult;
	/**
	 * Constructor
	 * @param XiGlobalrealtimeoptionsTypeArrayOfExtendedOption GetExtendedEquityOptionBySymbolsResult
	 * @return XiGlobalrealtimeoptionsTypeGetExtendedEquityOptionBySymbolsResponse
	 */
	public function __construct($_GetExtendedEquityOptionBySymbolsResult = null)
	{
		parent::__construct(array('GetExtendedEquityOptionBySymbolsResult'=>new XiGlobalrealtimeoptionsTypeArrayOfExtendedOption($_GetExtendedEquityOptionBySymbolsResult)));
	}
	/**
	 * Set GetExtendedEquityOptionBySymbolsResult
	 * @param ArrayOfExtendedOption GetExtendedEquityOptionBySymbolsResult
	 * @return ArrayOfExtendedOption
	 */
	public function setGetExtendedEquityOptionBySymbolsResult($_GetExtendedEquityOptionBySymbolsResult)
	{
		return ($this->GetExtendedEquityOptionBySymbolsResult = $_GetExtendedEquityOptionBySymbolsResult);
	}
	/**
	 * Get GetExtendedEquityOptionBySymbolsResult
	 * @return XiGlobalrealtimeoptionsTypeArrayOfExtendedOption
	 */
	public function getGetExtendedEquityOptionBySymbolsResult()
	{
		return $this->GetExtendedEquityOptionBySymbolsResult;
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