<?php
/**
 * Class file for OvhTypeTelephonyRecipientStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyRecipientStruct
 * @date 02/07/2012
 */
class OvhTypeTelephonyRecipientStruct extends OvhWsdlClass
{
	/**
	 * The recipient
	 * @var string
	 */
	public $recipient;
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * Constructor
	 * @param string recipient
	 * @param string status
	 * @return OvhTypeTelephonyRecipientStruct
	 */
	public function __construct($_recipient = null,$_status = null)
	{
		parent::__construct(array('recipient'=>$_recipient,'status'=>$_status));
	}
	/**
	 * Set recipient
	 * @param string recipient
	 * @return string
	 */
	public function setRecipient($_recipient)
	{
		return ($this->recipient = $_recipient);
	}
	/**
	 * Get recipient
	 * @return string
	 */
	public function getRecipient()
	{
		return $this->recipient;
	}
	/**
	 * Set status
	 * @param string status
	 * @return string
	 */
	public function setStatus($_status)
	{
		return ($this->status = $_status);
	}
	/**
	 * Get status
	 * @return string
	 */
	public function getStatus()
	{
		return $this->status;
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