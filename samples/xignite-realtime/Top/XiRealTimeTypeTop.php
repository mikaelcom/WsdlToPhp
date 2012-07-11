<?php
/**
 * Class file for XiRealTimeTypeTop
 * @date 08/07/2012
 */
/**
 * Class XiRealTimeTypeTop
 * @date 08/07/2012
 */
class XiRealTimeTypeTop extends XiRealTimeTypeCommon
{
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiRealTimeTypeTopTypes
	 */
	public $Type;
	/**
	 * The Quotes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRealTimeTypeArrayOfRealTimeQuote
	 */
	public $Quotes;
	/**
	 * Constructor
	 * @param XiRealTimeTypeTopTypes Type
	 * @param XiRealTimeTypeArrayOfRealTimeQuote Quotes
	 * @return XiRealTimeTypeTop
	 */
	public function __construct($_Type,$_Quotes = null)
	{
		XiRealTimeWsdlClass::__construct(array('Type'=>$_Type,'Quotes'=>new XiRealTimeTypeArrayOfRealTimeQuote($_Quotes)));
	}
	/**
	 * Set Type
	 * @param TopTypes Type
	 * @return TopTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiRealTimeTypeTopTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiRealTimeTypeTopTypes
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set Quotes
	 * @param ArrayOfRealTimeQuote Quotes
	 * @return ArrayOfRealTimeQuote
	 */
	public function setQuotes($_Quotes)
	{
		return ($this->Quotes = $_Quotes);
	}
	/**
	 * Get Quotes
	 * @return XiRealTimeTypeArrayOfRealTimeQuote
	 */
	public function getQuotes()
	{
		return $this->Quotes;
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