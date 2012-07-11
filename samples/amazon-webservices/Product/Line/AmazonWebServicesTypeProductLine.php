<?php
/**
 * Class file for AmazonWebServicesTypeProductLine
 * @date 10/07/2012
 */
/**
 * Class AmazonWebServicesTypeProductLine
 * @date 10/07/2012
 */
class AmazonWebServicesTypeProductLine extends AmazonWebServicesWsdlClass
{
	/**
	 * The Mode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Mode;
	/**
	 * The ProductInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonWebServicesTypeProductInfo
	 */
	public $ProductInfo;
	/**
	 * Constructor
	 * @param string Mode
	 * @param AmazonWebServicesTypeProductInfo ProductInfo
	 * @return AmazonWebServicesTypeProductLine
	 */
	public function __construct($_Mode = null,$_ProductInfo = null)
	{
		parent::__construct(array('Mode'=>$_Mode,'ProductInfo'=>$_ProductInfo));
	}
	/**
	 * Set Mode
	 * @param string Mode
	 * @return string
	 */
	public function setMode($_Mode)
	{
		return ($this->Mode = $_Mode);
	}
	/**
	 * Get Mode
	 * @return string
	 */
	public function getMode()
	{
		return $this->Mode;
	}
	/**
	 * Set ProductInfo
	 * @param ProductInfo ProductInfo
	 * @return ProductInfo
	 */
	public function setProductInfo($_ProductInfo)
	{
		return ($this->ProductInfo = $_ProductInfo);
	}
	/**
	 * Get ProductInfo
	 * @return AmazonWebServicesTypeProductInfo
	 */
	public function getProductInfo()
	{
		return $this->ProductInfo;
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