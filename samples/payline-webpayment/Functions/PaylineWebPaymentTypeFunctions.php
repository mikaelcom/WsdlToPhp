<?php
/**
 * Class file for PaylineWebPaymentTypeFunctions
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeFunctions
 * Documentation : list of functions
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeFunctions extends PaylineWebPaymentWsdlClass
{
	/**
	 * The function
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * @var PaylineWebPaymentTypeVirtualTerminalFunction
	 */
	public $function;
	/**
	 * Constructor
	 * @param PaylineWebPaymentTypeVirtualTerminalFunction function
	 * @return PaylineWebPaymentTypeFunctions
	 */
	public function __construct($_function = null)
	{
		parent::__construct(array('function'=>$_function));
	}
	/**
	 * Set function
	 * @param virtualTerminalFunction function
	 * @return virtualTerminalFunction
	 */
	public function setFunction($_function)
	{
		return ($this->function = $_function);
	}
	/**
	 * Get function
	 * @return PaylineWebPaymentTypevirtualTerminalFunction
	 */
	public function getFunction()
	{
		return $this->function;
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