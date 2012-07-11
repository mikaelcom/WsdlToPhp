<?php
/**
 * Class file for OvhTypeTelephonyPhonebookOnGroupContactListResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyPhonebookOnGroupContactListResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonyPhonebookOnGroupContactListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfTelephonyPhonebookContactStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfTelephonyPhonebookContactStructType return
	 * @return OvhTypeTelephonyPhonebookOnGroupContactListResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfTelephonyPhonebookContactStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfTelephonyPhonebookContactStructType return
	 * @return MyArrayOfTelephonyPhonebookContactStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfTelephonyPhonebookContactStructType
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