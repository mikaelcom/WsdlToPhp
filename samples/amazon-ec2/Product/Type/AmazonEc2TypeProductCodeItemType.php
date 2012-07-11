<?php
/**
 * Class file for AmazonEc2TypeProductCodeItemType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeProductCodeItemType
 * @date 10/07/2012
 */
class AmazonEc2TypeProductCodeItemType extends AmazonEc2WsdlClass
{
	/**
	 * The productCode
	 * @var string
	 */
	public $productCode;
	/**
	 * Constructor
	 * @param string productCode
	 * @return AmazonEc2TypeProductCodeItemType
	 */
	public function __construct($_productCode = null)
	{
		parent::__construct(array('productCode'=>$_productCode));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>