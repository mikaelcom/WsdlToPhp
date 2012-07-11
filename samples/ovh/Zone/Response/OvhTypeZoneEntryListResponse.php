<?php
/**
 * Class file for OvhTypeZoneEntryListResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeZoneEntryListResponse
 * @date 02/07/2012
 */
class OvhTypeZoneEntryListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfZoneStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfZoneStructType return
	 * @return OvhTypeZoneEntryListResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfZoneStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfZoneStructType return
	 * @return MyArrayOfZoneStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfZoneStructType
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