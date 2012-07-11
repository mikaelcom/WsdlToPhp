<?php
/**
 * Class file for OvhTypeTelephonySmsUserAddCsvAttachmentResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonySmsUserAddCsvAttachmentResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonySmsUserAddCsvAttachmentResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeTelephonySmsCsvSlotStruct
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeTelephonySmsCsvSlotStruct return
	 * @return OvhTypeTelephonySmsUserAddCsvAttachmentResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param telephonySmsCsvSlotStruct return
	 * @return telephonySmsCsvSlotStruct
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypetelephonySmsCsvSlotStruct
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