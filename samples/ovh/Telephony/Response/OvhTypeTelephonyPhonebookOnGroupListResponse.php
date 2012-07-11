<?php
/**
 * Class file for OvhTypeTelephonyPhonebookOnGroupListResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyPhonebookOnGroupListResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonyPhonebookOnGroupListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfTelephonyPhonebookStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfTelephonyPhonebookStructType return
	 * @return OvhTypeTelephonyPhonebookOnGroupListResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfTelephonyPhonebookStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfTelephonyPhonebookStructType return
	 * @return MyArrayOfTelephonyPhonebookStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfTelephonyPhonebookStructType
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