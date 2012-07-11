<?php
/**
 * Class file for XiCurrenciesTypeGetIntradayHighLow
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeGetIntradayHighLow
 * @date 08/07/2012
 */
class XiCurrenciesTypeGetIntradayHighLow extends XiCurrenciesWsdlClass
{
	/**
	 * The Symbol
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Symbol;
	/**
	 * The StartDateTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StartDateTime;
	/**
	 * The EndDateTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EndDateTime;
	/**
	 * Constructor
	 * @param string Symbol
	 * @param string StartDateTime
	 * @param string EndDateTime
	 * @return XiCurrenciesTypeGetIntradayHighLow
	 */
	public function __construct($_Symbol = null,$_StartDateTime = null,$_EndDateTime = null)
	{
		parent::__construct(array('Symbol'=>$_Symbol,'StartDateTime'=>$_StartDateTime,'EndDateTime'=>$_EndDateTime));
	}
	/**
	 * Set Symbol
	 * @param string Symbol
	 * @return string
	 */
	public function setSymbol($_Symbol)
	{
		return ($this->Symbol = $_Symbol);
	}
	/**
	 * Get Symbol
	 * @return string
	 */
	public function getSymbol()
	{
		return $this->Symbol;
	}
	/**
	 * Set StartDateTime
	 * @param string StartDateTime
	 * @return string
	 */
	public function setStartDateTime($_StartDateTime)
	{
		return ($this->StartDateTime = $_StartDateTime);
	}
	/**
	 * Get StartDateTime
	 * @return string
	 */
	public function getStartDateTime()
	{
		return $this->StartDateTime;
	}
	/**
	 * Set EndDateTime
	 * @param string EndDateTime
	 * @return string
	 */
	public function setEndDateTime($_EndDateTime)
	{
		return ($this->EndDateTime = $_EndDateTime);
	}
	/**
	 * Get EndDateTime
	 * @return string
	 */
	public function getEndDateTime()
	{
		return $this->EndDateTime;
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