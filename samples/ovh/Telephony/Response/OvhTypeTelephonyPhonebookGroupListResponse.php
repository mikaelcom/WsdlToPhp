<?php
/**
 * Class file for OvhTypeTelephonyPhonebookGroupListResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyPhonebookGroupListResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonyPhonebookGroupListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfTelephonyPhonebookGroupStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfTelephonyPhonebookGroupStructType return
	 * @return OvhTypeTelephonyPhonebookGroupListResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfTelephonyPhonebookGroupStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfTelephonyPhonebookGroupStructType return
	 * @return MyArrayOfTelephonyPhonebookGroupStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfTelephonyPhonebookGroupStructType
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