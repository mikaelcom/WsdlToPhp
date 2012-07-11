<?php
/**
 * Class file for XiGlobaloptionsTypeGetExtendedEquityOptionBySymbolsResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobaloptionsTypeGetExtendedEquityOptionBySymbolsResponse
 * @date 08/07/2012
 */
class XiGlobaloptionsTypeGetExtendedEquityOptionBySymbolsResponse extends XiGlobaloptionsWsdlClass
{
	/**
	 * The GetExtendedEquityOptionBySymbolsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobaloptionsTypeArrayOfExtendedOption
	 */
	public $GetExtendedEquityOptionBySymbolsResult;
	/**
	 * Constructor
	 * @param XiGlobaloptionsTypeArrayOfExtendedOption GetExtendedEquityOptionBySymbolsResult
	 * @return XiGlobaloptionsTypeGetExtendedEquityOptionBySymbolsResponse
	 */
	public function __construct($_GetExtendedEquityOptionBySymbolsResult = null)
	{
		parent::__construct(array('GetExtendedEquityOptionBySymbolsResult'=>new XiGlobaloptionsTypeArrayOfExtendedOption($_GetExtendedEquityOptionBySymbolsResult)));
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
	 * @return XiGlobaloptionsTypeArrayOfExtendedOption
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