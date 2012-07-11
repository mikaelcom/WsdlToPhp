<?php
/**
 * Class file for OvhTypeTelephonyNumberCityForZoneListResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyNumberCityForZoneListResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonyNumberCityForZoneListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfTelephonyNumberCityForZoneStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfTelephonyNumberCityForZoneStructType return
	 * @return OvhTypeTelephonyNumberCityForZoneListResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfTelephonyNumberCityForZoneStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfTelephonyNumberCityForZoneStructType return
	 * @return MyArrayOfTelephonyNumberCityForZoneStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfTelephonyNumberCityForZoneStructType
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