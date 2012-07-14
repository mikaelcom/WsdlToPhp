<?php
/**
 * Class file for PayPalTypeErrorParameterType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeErrorParameterType
 * Documentation : Specifies application-specific error parameter name.
 * @date 14/07/2012
 */
class PayPalTypeErrorParameterType extends PayPalWsdlClass
{
	/**
	 * The Value
	 * Meta informations :
	 * 	- documentation : Value of the application-specific error parameter.
	 * @var string
	 */
	public $Value;
	/**
	 * The ParamID
	 * @var string
	 */
	public $ParamID;
	/**
	 * Constructor
	 * @param string Value
	 * @param string ParamID
	 * @return PayPalTypeErrorParameterType
	 */
	public function __construct($_Value = null,$_ParamID = null)
	{
		parent::__construct(array('Value'=>$_Value,'ParamID'=>$_ParamID));
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
	 * Set ParamID
	 * @param string ParamID
	 * @return string
	 */
	public function setParamID($_ParamID)
	{
		return ($this->ParamID = $_ParamID);
	}
	/**
	 * Get ParamID
	 * @return string
	 */
	public function getParamID()
	{
		return $this->ParamID;
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