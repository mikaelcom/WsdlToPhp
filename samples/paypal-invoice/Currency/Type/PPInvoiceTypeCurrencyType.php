<?php
/**
 * Class file for PPInvoiceTypeCurrencyType
 * @date 02/07/2012
 */
/**
 * Class PPInvoiceTypeCurrencyType
 * @date 02/07/2012
 */
class PPInvoiceTypeCurrencyType extends PPInvoiceWsdlClass
{
	/**
	 * The code
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $code;
	/**
	 * The amount
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var decimal
	 */
	public $amount;
	/**
	 * Constructor
	 * @param string code
	 * @param decimal amount
	 * @return PPInvoiceTypeCurrencyType
	 */
	public function __construct($_code,$_amount)
	{
		parent::__construct(array('code'=>$_code,'amount'=>$_amount));
	}
	/**
	 * Set code
	 * @param string code
	 * @return string
	 */
	public function setCode($_code)
	{
		return ($this->code = $_code);
	}
	/**
	 * Get code
	 * @return string
	 */
	public function getCode()
	{
		return $this->code;
	}
	/**
	 * Set amount
	 * @param decimal amount
	 * @return decimal
	 */
	public function setAmount($_amount)
	{
		return ($this->amount = $_amount);
	}
	/**
	 * Get amount
	 * @return decimal
	 */
	public function getAmount()
	{
		return $this->amount;
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