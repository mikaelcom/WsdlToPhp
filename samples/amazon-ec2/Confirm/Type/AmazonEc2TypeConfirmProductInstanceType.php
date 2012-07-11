<?php
/**
 * Class file for AmazonEc2TypeConfirmProductInstanceType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeConfirmProductInstanceType
 * @date 10/07/2012
 */
class AmazonEc2TypeConfirmProductInstanceType extends AmazonEc2WsdlClass
{
	/**
	 * The productCode
	 * @var string
	 */
	public $productCode;
	/**
	 * The instanceId
	 * @var string
	 */
	public $instanceId;
	/**
	 * Constructor
	 * @param string productCode
	 * @param string instanceId
	 * @return AmazonEc2TypeConfirmProductInstanceType
	 */
	public function __construct($_productCode = null,$_instanceId = null)
	{
		parent::__construct(array('productCode'=>$_productCode,'instanceId'=>$_instanceId));
	}
	/**
	 * Set productCode
	 * @param string productCode
	 * @return string
	 */
	public function setProductCode($_productCode)
	{
		return ($this->productCode = $_productCode);
	}
	/**
	 * Get productCode
	 * @return string
	 */
	public function getProductCode()
	{
		return $this->productCode;
	}
	/**
	 * Set instanceId
	 * @param string instanceId
	 * @return string
	 */
	public function setInstanceId($_instanceId)
	{
		return ($this->instanceId = $_instanceId);
	}
	/**
	 * Get instanceId
	 * @return string
	 */
	public function getInstanceId()
	{
		return $this->instanceId;
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