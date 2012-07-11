<?php
/**
 * Class file for OvhTypeDedicatedRtmListBackdoorResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedRtmListBackdoorResponse
 * @date 02/07/2012
 */
class OvhTypeDedicatedRtmListBackdoorResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfDedicatedRtmListBackdoorStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfDedicatedRtmListBackdoorStructType return
	 * @return OvhTypeDedicatedRtmListBackdoorResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfDedicatedRtmListBackdoorStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfDedicatedRtmListBackdoorStructType return
	 * @return MyArrayOfDedicatedRtmListBackdoorStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfDedicatedRtmListBackdoorStructType
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