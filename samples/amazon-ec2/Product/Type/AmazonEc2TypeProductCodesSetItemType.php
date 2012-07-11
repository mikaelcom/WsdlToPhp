<?php
/**
 * Class file for AmazonEc2TypeProductCodesSetItemType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeProductCodesSetItemType
 * @date 10/07/2012
 */
class AmazonEc2TypeProductCodesSetItemType extends AmazonEc2WsdlClass
{
	/**
	 * The productCode
	 * @var string
	 */
	public $productCode;
	/**
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * Constructor
	 * @param string productCode
	 * @param string type
	 * @return AmazonEc2TypeProductCodesSetItemType
	 */
	public function __construct($_productCode = null,$_type = null)
	{
		parent::__construct(array('productCode'=>$_productCode,'type'=>$_type));
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
	 * Set type
	 * @param string type
	 * @return string
	 */
	public function setType($_type)
	{
		return ($this->type = $_type);
	}
	/**
	 * Get type
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
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