<?php
/**
 * Class file for AmazonEc2TypeResetNetworkInterfaceAttributeType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeResetNetworkInterfaceAttributeType
 * @date 10/07/2012
 */
class AmazonEc2TypeResetNetworkInterfaceAttributeType extends AmazonEc2WsdlClass
{
	/**
	 * The networkInterfaceId
	 * @var string
	 */
	public $networkInterfaceId;
	/**
	 * The sourceDestCheck
	 * @var AmazonEc2TypeEmptyElementType
	 */
	public $sourceDestCheck;
	/**
	 * Constructor
	 * @param string networkInterfaceId
	 * @param AmazonEc2TypeEmptyElementType sourceDestCheck
	 * @return AmazonEc2TypeResetNetworkInterfaceAttributeType
	 */
	public function __construct($_networkInterfaceId = null,$_sourceDestCheck = null)
	{
		parent::__construct(array('networkInterfaceId'=>$_networkInterfaceId,'sourceDestCheck'=>$_sourceDestCheck));
	}
	/**
	 * Set networkInterfaceId
	 * @param string networkInterfaceId
	 * @return string
	 */
	public function setNetworkInterfaceId($_networkInterfaceId)
	{
		return ($this->networkInterfaceId = $_networkInterfaceId);
	}
	/**
	 * Get networkInterfaceId
	 * @return string
	 */
	public function getNetworkInterfaceId()
	{
		return $this->networkInterfaceId;
	}
	/**
	 * Set sourceDestCheck
	 * @param EmptyElementType sourceDestCheck
	 * @return EmptyElementType
	 */
	public function setSourceDestCheck($_sourceDestCheck)
	{
		return ($this->sourceDestCheck = $_sourceDestCheck);
	}
	/**
	 * Get sourceDestCheck
	 * @return AmazonEc2TypeEmptyElementType
	 */
	public function getSourceDestCheck()
	{
		return $this->sourceDestCheck;
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