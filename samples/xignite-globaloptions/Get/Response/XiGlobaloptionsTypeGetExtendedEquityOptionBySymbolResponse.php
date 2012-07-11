<?php
/**
 * Class file for XiGlobaloptionsTypeGetExtendedEquityOptionBySymbolResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobaloptionsTypeGetExtendedEquityOptionBySymbolResponse
 * @date 08/07/2012
 */
class XiGlobaloptionsTypeGetExtendedEquityOptionBySymbolResponse extends XiGlobaloptionsWsdlClass
{
	/**
	 * The GetExtendedEquityOptionBySymbolResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobaloptionsTypeExtendedOption
	 */
	public $GetExtendedEquityOptionBySymbolResult;
	/**
	 * Constructor
	 * @param XiGlobaloptionsTypeExtendedOption GetExtendedEquityOptionBySymbolResult
	 * @return XiGlobaloptionsTypeGetExtendedEquityOptionBySymbolResponse
	 */
	public function __construct($_GetExtendedEquityOptionBySymbolResult = null)
	{
		parent::__construct(array('GetExtendedEquityOptionBySymbolResult'=>$_GetExtendedEquityOptionBySymbolResult));
	}
	/**
	 * Set GetExtendedEquityOptionBySymbolResult
	 * @param ExtendedOption GetExtendedEquityOptionBySymbolResult
	 * @return ExtendedOption
	 */
	public function setGetExtendedEquityOptionBySymbolResult($_GetExtendedEquityOptionBySymbolResult)
	{
		return ($this->GetExtendedEquityOptionBySymbolResult = $_GetExtendedEquityOptionBySymbolResult);
	}
	/**
	 * Get GetExtendedEquityOptionBySymbolResult
	 * @return XiGlobaloptionsTypeExtendedOption
	 */
	public function getGetExtendedEquityOptionBySymbolResult()
	{
		return $this->GetExtendedEquityOptionBySymbolResult;
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