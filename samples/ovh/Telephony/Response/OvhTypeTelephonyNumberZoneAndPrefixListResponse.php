<?php
/**
 * Class file for OvhTypeTelephonyNumberZoneAndPrefixListResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyNumberZoneAndPrefixListResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonyNumberZoneAndPrefixListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfTelephonyNumberZoneAndPrefixStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfTelephonyNumberZoneAndPrefixStructType return
	 * @return OvhTypeTelephonyNumberZoneAndPrefixListResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfTelephonyNumberZoneAndPrefixStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfTelephonyNumberZoneAndPrefixStructType return
	 * @return MyArrayOfTelephonyNumberZoneAndPrefixStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfTelephonyNumberZoneAndPrefixStructType
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