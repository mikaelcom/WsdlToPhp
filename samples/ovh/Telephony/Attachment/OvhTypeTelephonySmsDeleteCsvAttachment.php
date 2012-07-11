<?php
/**
 * Class file for OvhTypeTelephonySmsDeleteCsvAttachment
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonySmsDeleteCsvAttachment
 * @date 02/07/2012
 */
class OvhTypeTelephonySmsDeleteCsvAttachment extends OvhWsdlClass
{
	/**
	 * The smsAccount
	 * @var string
	 */
	public $smsAccount;
	/**
	 * The ids
	 * @var OvhTypeMyArrayOfIntType
	 */
	public $ids;
	/**
	 * Constructor
	 * @param string smsAccount
	 * @param OvhTypeMyArrayOfIntType ids
	 * @return OvhTypeTelephonySmsDeleteCsvAttachment
	 */
	public function __construct($_smsAccount = null,$_ids = null)
	{
		parent::__construct(array('smsAccount'=>$_smsAccount,'ids'=>new OvhTypeMyArrayOfIntType($_ids)));
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
	 * Set ids
	 * @param MyArrayOfIntType ids
	 * @return MyArrayOfIntType
	 */
	public function setIds($_ids)
	{
		return ($this->ids = $_ids);
	}
	/**
	 * Get ids
	 * @return OvhTypeMyArrayOfIntType
	 */
	public function getIds()
	{
		return $this->ids;
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