<?php
/**
 * Class file for OvhTypeTelephonySecurityDepositCreditResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonySecurityDepositCreditResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonySecurityDepositCreditResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeTelephonySecurityDepositCreditReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeTelephonySecurityDepositCreditReturn return
	 * @return OvhTypeTelephonySecurityDepositCreditResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param telephonySecurityDepositCreditReturn return
	 * @return telephonySecurityDepositCreditReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypetelephonySecurityDepositCreditReturn
	 */
	public function getReturn()
	{
		return $this->return;
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