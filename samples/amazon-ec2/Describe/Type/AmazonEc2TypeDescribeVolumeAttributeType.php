<?php
/**
 * Class file for AmazonEc2TypeDescribeVolumeAttributeType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeVolumeAttributeType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeVolumeAttributeType extends AmazonEc2WsdlClass
{
	/**
	 * The volumeId
	 * @var string
	 */
	public $volumeId;
	/**
	 * The autoEnableIO
	 * @var AmazonEc2TypeEmptyElementType
	 */
	public $autoEnableIO;
	/**
	 * The productCodes
	 * @var AmazonEc2TypeEmptyElementType
	 */
	public $productCodes;
	/**
	 * Constructor
	 * @param string volumeId
	 * @param AmazonEc2TypeEmptyElementType autoEnableIO
	 * @param AmazonEc2TypeEmptyElementType productCodes
	 * @return AmazonEc2TypeDescribeVolumeAttributeType
	 */
	public function __construct($_volumeId = null,$_autoEnableIO = null,$_productCodes = null)
	{
		parent::__construct(array('volumeId'=>$_volumeId,'autoEnableIO'=>$_autoEnableIO,'productCodes'=>$_productCodes));
	}
	/**
	 * Set volumeId
	 * @param string volumeId
	 * @return string
	 */
	public function setVolumeId($_volumeId)
	{
		return ($this->volumeId = $_volumeId);
	}
	/**
	 * Get volumeId
	 * @return string
	 */
	public function getVolumeId()
	{
		return $this->volumeId;
	}
	/**
	 * Set autoEnableIO
	 * @param EmptyElementType autoEnableIO
	 * @return EmptyElementType
	 */
	public function setAutoEnableIO($_autoEnableIO)
	{
		return ($this->autoEnableIO = $_autoEnableIO);
	}
	/**
	 * Get autoEnableIO
	 * @return AmazonEc2TypeEmptyElementType
	 */
	public function getAutoEnableIO()
	{
		return $this->autoEnableIO;
	}
	/**
	 * Set productCodes
	 * @param EmptyElementType productCodes
	 * @return EmptyElementType
	 */
	public function setProductCodes($_productCodes)
	{
		return ($this->productCodes = $_productCodes);
	}
	/**
	 * Get productCodes
	 * @return AmazonEc2TypeEmptyElementType
	 */
	public function getProductCodes()
	{
		return $this->productCodes;
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