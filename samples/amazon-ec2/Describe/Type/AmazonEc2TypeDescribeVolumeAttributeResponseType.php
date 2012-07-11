<?php
/**
 * Class file for AmazonEc2TypeDescribeVolumeAttributeResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeVolumeAttributeResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeVolumeAttributeResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The volumeId
	 * @var string
	 */
	public $volumeId;
	/**
	 * The autoEnableIO
	 * @var AmazonEc2TypeNullableAttributeBooleanValueType
	 */
	public $autoEnableIO;
	/**
	 * The productCodes
	 * @var AmazonEc2TypeProductCodesSetType
	 */
	public $productCodes;
	/**
	 * Constructor
	 * @param string requestId
	 * @param string volumeId
	 * @param AmazonEc2TypeNullableAttributeBooleanValueType autoEnableIO
	 * @param AmazonEc2TypeProductCodesSetType productCodes
	 * @return AmazonEc2TypeDescribeVolumeAttributeResponseType
	 */
	public function __construct($_requestId = null,$_volumeId = null,$_autoEnableIO = null,$_productCodes = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'volumeId'=>$_volumeId,'autoEnableIO'=>$_autoEnableIO,'productCodes'=>$_productCodes));
	}
	/**
	 * Set requestId
	 * @param string requestId
	 * @return string
	 */
	public function setRequestId($_requestId)
	{
		return ($this->requestId = $_requestId);
	}
	/**
	 * Get requestId
	 * @return string
	 */
	public function getRequestId()
	{
		return $this->requestId;
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
	 * @param NullableAttributeBooleanValueType autoEnableIO
	 * @return NullableAttributeBooleanValueType
	 */
	public function setAutoEnableIO($_autoEnableIO)
	{
		return ($this->autoEnableIO = $_autoEnableIO);
	}
	/**
	 * Get autoEnableIO
	 * @return AmazonEc2TypeNullableAttributeBooleanValueType
	 */
	public function getAutoEnableIO()
	{
		return $this->autoEnableIO;
	}
	/**
	 * Set productCodes
	 * @param ProductCodesSetType productCodes
	 * @return ProductCodesSetType
	 */
	public function setProductCodes($_productCodes)
	{
		return ($this->productCodes = $_productCodes);
	}
	/**
	 * Get productCodes
	 * @return AmazonEc2TypeProductCodesSetType
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