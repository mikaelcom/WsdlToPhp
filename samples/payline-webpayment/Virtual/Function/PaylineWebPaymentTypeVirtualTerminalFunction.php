<?php
/**
 * Class file for PaylineWebPaymentTypeVirtualTerminalFunction
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeVirtualTerminalFunction
 * Documentation : functions availbe in virtual terminal
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeVirtualTerminalFunction extends PaylineWebPaymentWsdlClass
{
	/**
	 * The function
	 * @var function
	 */
	public $function;
	/**
	 * The label
	 * @var string
	 */
	public $label;
	/**
	 * The functionParameter
	 * @var PaylineWebPaymentTypeFunctionParameter
	 */
	public $functionParameter;
	/**
	 * Constructor
	 * @param function function
	 * @param string label
	 * @param PaylineWebPaymentTypeFunctionParameter functionParameter
	 * @return PaylineWebPaymentTypeVirtualTerminalFunction
	 */
	public function __construct($_function = null,$_label = null,$_functionParameter = null)
	{
		parent::__construct(array('function'=>$_function,'label'=>$_label,'functionParameter'=>$_functionParameter));
	}
	/**
	 * Set function
	 * @param function function
	 * @return function
	 */
	public function setFunction($_function)
	{
		return ($this->function = $_function);
	}
	/**
	 * Get function
	 * @return function
	 */
	public function getFunction()
	{
		return $this->function;
	}
	/**
	 * Set label
	 * @param string label
	 * @return string
	 */
	public function setLabel($_label)
	{
		return ($this->label = $_label);
	}
	/**
	 * Get label
	 * @return string
	 */
	public function getLabel()
	{
		return $this->label;
	}
	/**
	 * Set functionParameter
	 * @param functionParameter functionParameter
	 * @return functionParameter
	 */
	public function setFunctionParameter($_functionParameter)
	{
		return ($this->functionParameter = $_functionParameter);
	}
	/**
	 * Get functionParameter
	 * @return PaylineWebPaymentTypefunctionParameter
	 */
	public function getFunctionParameter()
	{
		return $this->functionParameter;
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