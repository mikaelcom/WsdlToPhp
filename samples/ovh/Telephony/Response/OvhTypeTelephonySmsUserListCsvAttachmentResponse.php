<?php
/**
 * Class file for OvhTypeTelephonySmsUserListCsvAttachmentResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonySmsUserListCsvAttachmentResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonySmsUserListCsvAttachmentResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfTelephonySmsCsvSlotStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfTelephonySmsCsvSlotStructType return
	 * @return OvhTypeTelephonySmsUserListCsvAttachmentResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfTelephonySmsCsvSlotStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfTelephonySmsCsvSlotStructType return
	 * @return MyArrayOfTelephonySmsCsvSlotStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfTelephonySmsCsvSlotStructType
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