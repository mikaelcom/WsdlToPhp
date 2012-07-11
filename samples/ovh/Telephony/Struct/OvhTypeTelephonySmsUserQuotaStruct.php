<?php
/**
 * Class file for OvhTypeTelephonySmsUserQuotaStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonySmsUserQuotaStruct
 * @date 02/07/2012
 */
class OvhTypeTelephonySmsUserQuotaStruct extends OvhWsdlClass
{
	/**
	 * The quotaLeft
	 * @var string
	 */
	public $quotaLeft;
	/**
	 * The quotaStatus
	 * @var string
	 */
	public $quotaStatus;
	/**
	 * Constructor
	 * @param string quotaLeft
	 * @param string quotaStatus
	 * @return OvhTypeTelephonySmsUserQuotaStruct
	 */
	public function __construct($_quotaLeft = null,$_quotaStatus = null)
	{
		parent::__construct(array('quotaLeft'=>$_quotaLeft,'quotaStatus'=>$_quotaStatus));
	}
	/**
	 * Set quotaLeft
	 * @param string quotaLeft
	 * @return string
	 */
	public function setQuotaLeft($_quotaLeft)
	{
		return ($this->quotaLeft = $_quotaLeft);
	}
	/**
	 * Get quotaLeft
	 * @return string
	 */
	public function getQuotaLeft()
	{
		return $this->quotaLeft;
	}
	/**
	 * Set quotaStatus
	 * @param string quotaStatus
	 * @return string
	 */
	public function setQuotaStatus($_quotaStatus)
	{
		return ($this->quotaStatus = $_quotaStatus);
	}
	/**
	 * Get quotaStatus
	 * @return string
	 */
	public function getQuotaStatus()
	{
		return $this->quotaStatus;
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