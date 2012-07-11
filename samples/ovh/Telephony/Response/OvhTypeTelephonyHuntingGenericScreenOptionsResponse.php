<?php
/**
 * Class file for OvhTypeTelephonyHuntingGenericScreenOptionsResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyHuntingGenericScreenOptionsResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonyHuntingGenericScreenOptionsResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfTelephonyHuntingGenericScreenOptionsStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfTelephonyHuntingGenericScreenOptionsStructType return
	 * @return OvhTypeTelephonyHuntingGenericScreenOptionsResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfTelephonyHuntingGenericScreenOptionsStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfTelephonyHuntingGenericScreenOptionsStructType return
	 * @return MyArrayOfTelephonyHuntingGenericScreenOptionsStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfTelephonyHuntingGenericScreenOptionsStructType
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