<?php
/**
 * Class file for AmazonFPSTypeAmount
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeAmount
 * @date 10/07/2012
 */
class AmazonFPSTypeAmount extends AmazonFPSWsdlClass
{
	/**
	 * The CurrencyCode
	 * @var AmazonFPSTypeCurrencyCode
	 */
	public $CurrencyCode;
	/**
	 * The Value
	 * @var string
	 */
	public $Value;
	/**
	 * Constructor
	 * @param AmazonFPSTypeCurrencyCode CurrencyCode
	 * @param string Value
	 * @return AmazonFPSTypeAmount
	 */
	public function __construct($_CurrencyCode = null,$_Value = null)
	{
		parent::__construct(array('CurrencyCode'=>$_CurrencyCode,'Value'=>$_Value));
	}
	/**
	 * Set CurrencyCode
	 * @param CurrencyCode CurrencyCode
	 * @return CurrencyCode
	 */
	public function setCurrencyCode($_CurrencyCode)
	{
		return ($this->CurrencyCode = AmazonFPSTypeCurrencyCode::valueIsValid($_CurrencyCode)?$_CurrencyCode:null);
	}
	/**
	 * Get CurrencyCode
	 * @return AmazonFPSTypeCurrencyCode
	 */
	public function getCurrencyCode()
	{
		return $this->CurrencyCode;
	}
	/**
	 * Set Value
	 * @param string Value
	 * @return string
	 */
	public function setValue($_Value)
	{
		return ($this->Value = $_Value);
	}
	/**
	 * Get Value
	 * @return string
	 */
	public function getValue()
	{
		return $this->Value;
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