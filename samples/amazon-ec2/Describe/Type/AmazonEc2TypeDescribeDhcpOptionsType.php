<?php
/**
 * Class file for AmazonEc2TypeDescribeDhcpOptionsType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeDhcpOptionsType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeDhcpOptionsType extends AmazonEc2WsdlClass
{
	/**
	 * The dhcpOptionsSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeDhcpOptionsIdSetType
	 */
	public $dhcpOptionsSet;
	/**
	 * The filterSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeFilterSetType
	 */
	public $filterSet;
	/**
	 * Constructor
	 * @param AmazonEc2TypeDhcpOptionsIdSetType dhcpOptionsSet
	 * @param AmazonEc2TypeFilterSetType filterSet
	 * @return AmazonEc2TypeDescribeDhcpOptionsType
	 */
	public function __construct($_dhcpOptionsSet = null,$_filterSet = null)
	{
		parent::__construct(array('dhcpOptionsSet'=>$_dhcpOptionsSet,'filterSet'=>$_filterSet));
	}
	/**
	 * Set dhcpOptionsSet
	 * @param DhcpOptionsIdSetType dhcpOptionsSet
	 * @return DhcpOptionsIdSetType
	 */
	public function setDhcpOptionsSet($_dhcpOptionsSet)
	{
		return ($this->dhcpOptionsSet = $_dhcpOptionsSet);
	}
	/**
	 * Get dhcpOptionsSet
	 * @return AmazonEc2TypeDhcpOptionsIdSetType
	 */
	public function getDhcpOptionsSet()
	{
		return $this->dhcpOptionsSet;
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