<?php
/**
 * Class file for OvhTypeTelephonyAbbreviatedNumberListResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyAbbreviatedNumberListResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonyAbbreviatedNumberListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfTelephonyAbbreviatedNumberStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfTelephonyAbbreviatedNumberStructType return
	 * @return OvhTypeTelephonyAbbreviatedNumberListResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfTelephonyAbbreviatedNumberStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfTelephonyAbbreviatedNumberStructType return
	 * @return MyArrayOfTelephonyAbbreviatedNumberStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfTelephonyAbbreviatedNumberStructType
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