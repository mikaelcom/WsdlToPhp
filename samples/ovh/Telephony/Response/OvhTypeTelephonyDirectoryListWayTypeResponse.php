<?php
/**
 * Class file for OvhTypeTelephonyDirectoryListWayTypeResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyDirectoryListWayTypeResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonyDirectoryListWayTypeResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfTelephonyDirectoryWayTypeStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfTelephonyDirectoryWayTypeStructType return
	 * @return OvhTypeTelephonyDirectoryListWayTypeResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfTelephonyDirectoryWayTypeStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfTelephonyDirectoryWayTypeStructType return
	 * @return MyArrayOfTelephonyDirectoryWayTypeStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfTelephonyDirectoryWayTypeStructType
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