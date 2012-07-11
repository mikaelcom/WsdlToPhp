<?php
/**
 * Class file for AmazonAlexaTypePhysicalAddress
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypePhysicalAddress
 * @date 10/07/2012
 */
class AmazonAlexaTypePhysicalAddress extends AmazonAlexaWsdlClass
{
	/**
	 * The UnformattedAddress
	 * @var AmazonAlexaTypeGenericDataType
	 */
	public $UnformattedAddress;
	/**
	 * Constructor
	 * @param AmazonAlexaTypeGenericDataType UnformattedAddress
	 * @return AmazonAlexaTypePhysicalAddress
	 */
	public function __construct($_UnformattedAddress = null)
	{
		parent::__construct(array('UnformattedAddress'=>$_UnformattedAddress));
	}
	/**
	 * Set UnformattedAddress
	 * @param GenericDataType UnformattedAddress
	 * @return GenericDataType
	 */
	public function setUnformattedAddress($_UnformattedAddress)
	{
		return ($this->UnformattedAddress = $_UnformattedAddress);
	}
	/**
	 * Get UnformattedAddress
	 * @return AmazonAlexaTypeGenericDataType
	 */
	public function getUnformattedAddress()
	{
		return $this->UnformattedAddress;
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