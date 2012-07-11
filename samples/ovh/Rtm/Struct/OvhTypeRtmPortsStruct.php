<?php
/**
 * Class file for OvhTypeRtmPortsStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeRtmPortsStruct
 * @date 02/07/2012
 */
class OvhTypeRtmPortsStruct extends OvhWsdlClass
{
	/**
	 * The listening
	 * @var OvhTypeMyArrayOfRtmPortsIfaceStructType
	 */
	public $listening;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfRtmPortsIfaceStructType listening
	 * @return OvhTypeRtmPortsStruct
	 */
	public function __construct($_listening = null)
	{
		parent::__construct(array('listening'=>new OvhTypeMyArrayOfRtmPortsIfaceStructType($_listening)));
	}
	/**
	 * Set listening
	 * @param MyArrayOfRtmPortsIfaceStructType listening
	 * @return MyArrayOfRtmPortsIfaceStructType
	 */
	public function setListening($_listening)
	{
		return ($this->listening = $_listening);
	}
	/**
	 * Get listening
	 * @return OvhTypeMyArrayOfRtmPortsIfaceStructType
	 */
	public function getListening()
	{
		return $this->listening;
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