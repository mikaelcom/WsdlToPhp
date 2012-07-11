<?php
/**
 * Class file for OvhTypeTelephonyPhonebookSharePeerListResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyPhonebookSharePeerListResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonyPhonebookSharePeerListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfTelephonyPhonebookSharePeerStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfTelephonyPhonebookSharePeerStructType return
	 * @return OvhTypeTelephonyPhonebookSharePeerListResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfTelephonyPhonebookSharePeerStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfTelephonyPhonebookSharePeerStructType return
	 * @return MyArrayOfTelephonyPhonebookSharePeerStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfTelephonyPhonebookSharePeerStructType
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