<?php
/**
 * Class file for AmazonEc2TypeDescribeCustomerGatewaysType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeCustomerGatewaysType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeCustomerGatewaysType extends AmazonEc2WsdlClass
{
	/**
	 * The customerGatewaySet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeCustomerGatewayIdSetType
	 */
	public $customerGatewaySet;
	/**
	 * The filterSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeFilterSetType
	 */
	public $filterSet;
	/**
	 * Constructor
	 * @param AmazonEc2TypeCustomerGatewayIdSetType customerGatewaySet
	 * @param AmazonEc2TypeFilterSetType filterSet
	 * @return AmazonEc2TypeDescribeCustomerGatewaysType
	 */
	public function __construct($_customerGatewaySet = null,$_filterSet = null)
	{
		parent::__construct(array('customerGatewaySet'=>$_customerGatewaySet,'filterSet'=>$_filterSet));
	}
	/**
	 * Set customerGatewaySet
	 * @param CustomerGatewayIdSetType customerGatewaySet
	 * @return CustomerGatewayIdSetType
	 */
	public function setCustomerGatewaySet($_customerGatewaySet)
	{
		return ($this->customerGatewaySet = $_customerGatewaySet);
	}
	/**
	 * Get customerGatewaySet
	 * @return AmazonEc2TypeCustomerGatewayIdSetType
	 */
	public function getCustomerGatewaySet()
	{
		return $this->customerGatewaySet;
	}
	/**
	 * Set filterSet
	 * @param FilterSetType filterSet
	 * @return FilterSetType
	 */
	public function setFilterSet($_filterSet)
	{
		return ($this->filterSet = $_filterSet);
	}
	/**
	 * Get filterSet
	 * @return AmazonEc2TypeFilterSetType
	 */
	public function getFilterSet()
	{
		return $this->filterSet;
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