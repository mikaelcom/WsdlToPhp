<?php
/**
 * Class file for PaylineWebPaymentTypeFunctionParameter
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeFunctionParameter
 * Documentation : Value of parameter
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeFunctionParameter extends PaylineWebPaymentWsdlClass
{
	/**
	 * The id
	 * @var UNKNOWN
	 */
	public $id;
	/**
	 * Constructor
	 * @param UNKNOWN id
	 * @return PaylineWebPaymentTypeFunctionParameter
	 */
	public function __construct($_id = null)
	{
		parent::__construct(array('id'=>$_id));
	}
	/**
	 * Set id
	 * @param UNKNOWN id
	 * @return UNKNOWN
	 */
	public function setId($_id)
	{
		return ($this->id = $_id);
	}
	/**
	 * Get id
	 * @return UNKNOWN
	 */
	public function getId()
	{
		return $this->id;
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