<?php
/**
 * Class file for OvhTypeTelephonyPlugAndPhoneOperation
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyPlugAndPhoneOperation
 * @date 02/07/2012
 */
class OvhTypeTelephonyPlugAndPhoneOperation extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The number
	 * @var string
	 */
	public $number;
	/**
	 * The country
	 * @var string
	 */
	public $country;
	/**
	 * The operation
	 * @var string
	 */
	public $operation;
	/**
	 * Constructor
	 * @param string session
	 * @param string number
	 * @param string country
	 * @param string operation
	 * @return OvhTypeTelephonyPlugAndPhoneOperation
	 */
	public function __construct($_session = null,$_number = null,$_country = null,$_operation = null)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'operation'=>$_operation));
	}
	/**
	 * Set session
	 * @param string session
	 * @return string
	 */
	public function setSession($_session)
	{
		return ($this->session = $_session);
	}
	/**
	 * Get session
	 * @return string
	 */
	public function getSession()
	{
		return $this->session;
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
	 * Set country
	 * @param string country
	 * @return string
	 */
	public function setCountry($_country)
	{
		return ($this->country = $_country);
	}
	/**
	 * Get country
	 * @return string
	 */
	public function getCountry()
	{
		return $this->country;
	}
	/**
	 * Set operation
	 * @param string operation
	 * @return string
	 */
	public function setOperation($_operation)
	{
		return ($this->operation = $_operation);
	}
	/**
	 * Get operation
	 * @return string
	 */
	public function getOperation()
	{
		return $this->operation;
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