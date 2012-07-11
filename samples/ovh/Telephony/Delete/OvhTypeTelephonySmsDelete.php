<?php
/**
 * Class file for OvhTypeTelephonySmsDelete
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonySmsDelete
 * @date 02/07/2012
 */
class OvhTypeTelephonySmsDelete extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The smsAccount
	 * @var string
	 */
	public $smsAccount;
	/**
	 * The smsIds
	 * @var OvhTypeMyArrayOfIntType
	 */
	public $smsIds;
	/**
	 * Constructor
	 * @param string session
	 * @param string smsAccount
	 * @param OvhTypeMyArrayOfIntType smsIds
	 * @return OvhTypeTelephonySmsDelete
	 */
	public function __construct($_session = null,$_smsAccount = null,$_smsIds = null)
	{
		parent::__construct(array('session'=>$_session,'smsAccount'=>$_smsAccount,'smsIds'=>new OvhTypeMyArrayOfIntType($_smsIds)));
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
	 * Set smsAccount
	 * @param string smsAccount
	 * @return string
	 */
	public function setSmsAccount($_smsAccount)
	{
		return ($this->smsAccount = $_smsAccount);
	}
	/**
	 * Get smsAccount
	 * @return string
	 */
	public function getSmsAccount()
	{
		return $this->smsAccount;
	}
	/**
	 * Set smsIds
	 * @param MyArrayOfIntType smsIds
	 * @return MyArrayOfIntType
	 */
	public function setSmsIds($_smsIds)
	{
		return ($this->smsIds = $_smsIds);
	}
	/**
	 * Get smsIds
	 * @return OvhTypeMyArrayOfIntType
	 */
	public function getSmsIds()
	{
		return $this->smsIds;
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