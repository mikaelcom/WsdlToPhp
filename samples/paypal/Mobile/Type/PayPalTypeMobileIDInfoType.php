<?php
/**
 * Class file for PayPalTypeMobileIDInfoType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeMobileIDInfoType
 * @date 14/07/2012
 */
class PayPalTypeMobileIDInfoType extends PayPalWsdlClass
{
	/**
	 * The SessionToken
	 * Meta informations :
	 * 	- documentation : The Session token returned during buyer authentication.
	 * @var string
	 */
	public $SessionToken;
	/**
	 * Constructor
	 * @param string SessionToken
	 * @return PayPalTypeMobileIDInfoType
	 */
	public function __construct($_SessionToken = null)
	{
		parent::__construct(array('SessionToken'=>$_SessionToken));
	}
	/**
	 * Set SessionToken
	 * @param string SessionToken
	 * @return string
	 */
	public function setSessionToken($_SessionToken)
	{
		return ($this->SessionToken = $_SessionToken);
	}
	/**
	 * Get SessionToken
	 * @return string
	 */
	public function getSessionToken()
	{
		return $this->SessionToken;
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