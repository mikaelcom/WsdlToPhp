<?php
/**
 * Class file for XiGlobalHistoricalTypeGlobalHistoricalQuoteExtended
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalTypeGlobalHistoricalQuoteExtended
 * @date 08/07/2012
 */
class XiGlobalHistoricalTypeGlobalHistoricalQuoteExtended extends XiGlobalHistoricalTypeGlobalHistoricalQuote
{
	/**
	 * The LastPriceSource
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $LastPriceSource;
	/**
	 * The LastPriceType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $LastPriceType;
	/**
	 * Constructor
	 * @param string LastPriceSource
	 * @param string LastPriceType
	 * @return XiGlobalHistoricalTypeGlobalHistoricalQuoteExtended
	 */
	public function __construct($_LastPriceSource = null,$_LastPriceType = null)
	{
		XiGlobalHistoricalWsdlClass::__construct(array('LastPriceSource'=>$_LastPriceSource,'LastPriceType'=>$_LastPriceType));
	}
	/**
	 * Set LastPriceSource
	 * @param string LastPriceSource
	 * @return string
	 */
	public function setLastPriceSource($_LastPriceSource)
	{
		return ($this->LastPriceSource = $_LastPriceSource);
	}
	/**
	 * Get LastPriceSource
	 * @return string
	 */
	public function getLastPriceSource()
	{
		return $this->LastPriceSource;
	}
	/**
	 * Set LastPriceType
	 * @param string LastPriceType
	 * @return string
	 */
	public function setLastPriceType($_LastPriceType)
	{
		return ($this->LastPriceType = $_LastPriceType);
	}
	/**
	 * Get LastPriceType
	 * @return string
	 */
	public function getLastPriceType()
	{
		return $this->LastPriceType;
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