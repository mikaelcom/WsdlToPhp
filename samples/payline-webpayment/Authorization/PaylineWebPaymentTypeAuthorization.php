<?php
/**
 * Class file for PaylineWebPaymentTypeAuthorization
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeAuthorization
 * Documentation : This element contains information about the authorization
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeAuthorization extends PaylineWebPaymentWsdlClass
{
	/**
	 * The number
	 * Meta informations :
	 * 	- nillable : false
	 * @var string
	 */
	public $number;
	/**
	 * The date
	 * Meta informations :
	 * 	- nillable : false
	 * @var string
	 */
	public $date;
	/**
	 * Constructor
	 * @param string number
	 * @param string date
	 * @return PaylineWebPaymentTypeAuthorization
	 */
	public function __construct($_number = null,$_date = null)
	{
		parent::__construct(array('number'=>$_number,'date'=>$_date));
	}
	/**
	 * Set number
	 * @param string number
	 * @return string
	 */
	public function setNumber($_number)
	{
		return ($this->number = $_number);
	}
	/**
	 * Get number
	 * @return string
	 */
	public function getNumber()
	{
		return $this->number;
	}
	/**
	 * Set date
	 * @param string date
	 * @return string
	 */
	public function setDate($_date)
	{
		return ($this->date = $_date);
	}
	/**
	 * Get date
	 * @return string
	 */
	public function getDate()
	{
		return $this->date;
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