<?php
/**
 * Class file for OvhTypeTelephonySmsListCsvAttachment
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonySmsListCsvAttachment
 * @date 02/07/2012
 */
class OvhTypeTelephonySmsListCsvAttachment extends OvhWsdlClass
{
	/**
	 * The smsAccount
	 * @var string
	 */
	public $smsAccount;
	/**
	 * The id
	 * @var string
	 */
	public $id;
	/**
	 * Constructor
	 * @param string smsAccount
	 * @param string id
	 * @return OvhTypeTelephonySmsListCsvAttachment
	 */
	public function __construct($_smsAccount = null,$_id = null)
	{
		parent::__construct(array('smsAccount'=>$_smsAccount,'id'=>$_id));
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
	 * Set id
	 * @param string id
	 * @return string
	 */
	public function setId($_id)
	{
		return ($this->id = $_id);
	}
	/**
	 * Get id
	 * @return string
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