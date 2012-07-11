<?php
/**
 * Class file for XiCurrenciesTypeReport
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeReport
 * @date 08/07/2012
 */
class XiCurrenciesTypeReport extends XiCurrenciesTypeCommon
{
	/**
	 * The To
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $To;
	/**
	 * The Lines
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeArrayOfLine
	 */
	public $Lines;
	/**
	 * Constructor
	 * @param string To
	 * @param XiCurrenciesTypeArrayOfLine Lines
	 * @return XiCurrenciesTypeReport
	 */
	public function __construct($_To = null,$_Lines = null)
	{
		XiCurrenciesWsdlClass::__construct(array('To'=>$_To,'Lines'=>new XiCurrenciesTypeArrayOfLine($_Lines)));
	}
	/**
	 * Set To
	 * @param string To
	 * @return string
	 */
	public function setTo($_To)
	{
		return ($this->To = $_To);
	}
	/**
	 * Get To
	 * @return string
	 */
	public function getTo()
	{
		return $this->To;
	}
	/**
	 * Set Lines
	 * @param ArrayOfLine Lines
	 * @return ArrayOfLine
	 */
	public function setLines($_Lines)
	{
		return ($this->Lines = $_Lines);
	}
	/**
	 * Get Lines
	 * @return XiCurrenciesTypeArrayOfLine
	 */
	public function getLines()
	{
		return $this->Lines;
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