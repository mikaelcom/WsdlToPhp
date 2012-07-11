<?php
/**
 * Class file for XiFundsTypeNewFund
 * @date 08/07/2012
 */
/**
 * Class XiFundsTypeNewFund
 * @date 08/07/2012
 */
class XiFundsTypeNewFund extends XiFundsTypeCommon
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
	 * The DateAdded
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DateAdded;
	/**
	 * Constructor
	 * @param string Symbol
	 * @param string DateAdded
	 * @return XiFundsTypeNewFund
	 */
	public function __construct($_Symbol = null,$_DateAdded = null)
	{
		XiFundsWsdlClass::__construct(array('Symbol'=>$_Symbol,'DateAdded'=>$_DateAdded));
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
	 * Set DateAdded
	 * @param string DateAdded
	 * @return string
	 */
	public function setDateAdded($_DateAdded)
	{
		return ($this->DateAdded = $_DateAdded);
	}
	/**
	 * Get DateAdded
	 * @return string
	 */
	public function getDateAdded()
	{
		return $this->DateAdded;
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