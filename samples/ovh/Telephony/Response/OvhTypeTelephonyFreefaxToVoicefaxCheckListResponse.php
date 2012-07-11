<?php
/**
 * Class file for OvhTypeTelephonyFreefaxToVoicefaxCheckListResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyFreefaxToVoicefaxCheckListResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonyFreefaxToVoicefaxCheckListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfTelephonyFreefaxToVoicefaxCheckStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfTelephonyFreefaxToVoicefaxCheckStructType return
	 * @return OvhTypeTelephonyFreefaxToVoicefaxCheckListResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfTelephonyFreefaxToVoicefaxCheckStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfTelephonyFreefaxToVoicefaxCheckStructType return
	 * @return MyArrayOfTelephonyFreefaxToVoicefaxCheckStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfTelephonyFreefaxToVoicefaxCheckStructType
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