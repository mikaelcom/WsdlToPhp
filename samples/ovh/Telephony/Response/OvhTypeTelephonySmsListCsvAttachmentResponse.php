<?php
/**
 * Class file for OvhTypeTelephonySmsListCsvAttachmentResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonySmsListCsvAttachmentResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonySmsListCsvAttachmentResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfTelephonySmsCsvSlotStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfTelephonySmsCsvSlotStructType return
	 * @return OvhTypeTelephonySmsListCsvAttachmentResponse
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