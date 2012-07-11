<?php
/**
 * Class file for AmazonEc2TypeInternetGatewayIdSetItemType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeInternetGatewayIdSetItemType
 * @date 10/07/2012
 */
class AmazonEc2TypeInternetGatewayIdSetItemType extends AmazonEc2WsdlClass
{
	/**
	 * The internetGatewayId
	 * @var string
	 */
	public $internetGatewayId;
	/**
	 * Constructor
	 * @param string internetGatewayId
	 * @return AmazonEc2TypeInternetGatewayIdSetItemType
	 */
	public function __construct($_internetGatewayId = null)
	{
		parent::__construct(array('internetGatewayId'=>$_internetGatewayId));
	}
	/**
	 * Set internetGatewayId
	 * @param string internetGatewayId
	 * @return string
	 */
	public function setInternetGatewayId($_internetGatewayId)
	{
		return ($this->internetGatewayId = $_internetGatewayId);
	}
	/**
	 * Get internetGatewayId
	 * @return string
	 */
	public function getInternetGatewayId()
	{
		return $this->internetGatewayId;
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