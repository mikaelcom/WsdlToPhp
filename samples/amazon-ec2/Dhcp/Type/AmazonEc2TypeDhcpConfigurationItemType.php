<?php
/**
 * Class file for AmazonEc2TypeDhcpConfigurationItemType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDhcpConfigurationItemType
 * @date 10/07/2012
 */
class AmazonEc2TypeDhcpConfigurationItemType extends AmazonEc2WsdlClass
{
	/**
	 * The key
	 * @var string
	 */
	public $key;
	/**
	 * The valueSet
	 * @var AmazonEc2TypeDhcpValueSetType
	 */
	public $valueSet;
	/**
	 * Constructor
	 * @param string key
	 * @param AmazonEc2TypeDhcpValueSetType valueSet
	 * @return AmazonEc2TypeDhcpConfigurationItemType
	 */
	public function __construct($_key = null,$_valueSet = null)
	{
		parent::__construct(array('key'=>$_key,'valueSet'=>$_valueSet));
	}
	/**
	 * Set key
	 * @param string key
	 * @return string
	 */
	public function setKey($_key)
	{
		return ($this->key = $_key);
	}
	/**
	 * Get key
	 * @return string
	 */
	public function getKey()
	{
		return $this->key;
	}
	/**
	 * Set valueSet
	 * @param DhcpValueSetType valueSet
	 * @return DhcpValueSetType
	 */
	public function setValueSet($_valueSet)
	{
		return ($this->valueSet = $_valueSet);
	}
	/**
	 * Get valueSet
	 * @return AmazonEc2TypeDhcpValueSetType
	 */
	public function getValueSet()
	{
		return $this->valueSet;
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