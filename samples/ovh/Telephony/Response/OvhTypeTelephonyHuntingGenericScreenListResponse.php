<?php
/**
 * Class file for OvhTypeTelephonyHuntingGenericScreenListResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyHuntingGenericScreenListResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonyHuntingGenericScreenListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfTelephonyHuntingGenericScreenStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfTelephonyHuntingGenericScreenStructType return
	 * @return OvhTypeTelephonyHuntingGenericScreenListResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfTelephonyHuntingGenericScreenStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfTelephonyHuntingGenericScreenStructType return
	 * @return MyArrayOfTelephonyHuntingGenericScreenStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfTelephonyHuntingGenericScreenStructType
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