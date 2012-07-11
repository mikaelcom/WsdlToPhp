<?php
/**
 * Class file for AmazonEc2TypeDhcpOptionsType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDhcpOptionsType
 * @date 10/07/2012
 */
class AmazonEc2TypeDhcpOptionsType extends AmazonEc2WsdlClass
{
	/**
	 * The dhcpOptionsId
	 * @var string
	 */
	public $dhcpOptionsId;
	/**
	 * The dhcpConfigurationSet
	 * @var AmazonEc2TypeDhcpConfigurationItemSetType
	 */
	public $dhcpConfigurationSet;
	/**
	 * The tagSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeResourceTagSetType
	 */
	public $tagSet;
	/**
	 * Constructor
	 * @param string dhcpOptionsId
	 * @param AmazonEc2TypeDhcpConfigurationItemSetType dhcpConfigurationSet
	 * @param AmazonEc2TypeResourceTagSetType tagSet
	 * @return AmazonEc2TypeDhcpOptionsType
	 */
	public function __construct($_dhcpOptionsId = null,$_dhcpConfigurationSet = null,$_tagSet = null)
	{
		parent::__construct(array('dhcpOptionsId'=>$_dhcpOptionsId,'dhcpConfigurationSet'=>$_dhcpConfigurationSet,'tagSet'=>$_tagSet));
	}
	/**
	 * Set dhcpOptionsId
	 * @param string dhcpOptionsId
	 * @return string
	 */
	public function setDhcpOptionsId($_dhcpOptionsId)
	{
		return ($this->dhcpOptionsId = $_dhcpOptionsId);
	}
	/**
	 * Get dhcpOptionsId
	 * @return string
	 */
	public function getDhcpOptionsId()
	{
		return $this->dhcpOptionsId;
	}
	/**
	 * Set dhcpConfigurationSet
	 * @param DhcpConfigurationItemSetType dhcpConfigurationSet
	 * @return DhcpConfigurationItemSetType
	 */
	public function setDhcpConfigurationSet($_dhcpConfigurationSet)
	{
		return ($this->dhcpConfigurationSet = $_dhcpConfigurationSet);
	}
	/**
	 * Get dhcpConfigurationSet
	 * @return AmazonEc2TypeDhcpConfigurationItemSetType
	 */
	public function getDhcpConfigurationSet()
	{
		return $this->dhcpConfigurationSet;
	}
	/**
	 * Set tagSet
	 * @param ResourceTagSetType tagSet
	 * @return ResourceTagSetType
	 */
	public function setTagSet($_tagSet)
	{
		return ($this->tagSet = $_tagSet);
	}
	/**
	 * Get tagSet
	 * @return AmazonEc2TypeResourceTagSetType
	 */
	public function getTagSet()
	{
		return $this->tagSet;
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