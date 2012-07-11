<?php
/**
 * Class file for AmazonEc2TypeFilterType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeFilterType
 * @date 10/07/2012
 */
class AmazonEc2TypeFilterType extends AmazonEc2WsdlClass
{
	/**
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * The valueSet
	 * @var AmazonEc2TypeValueSetType
	 */
	public $valueSet;
	/**
	 * Constructor
	 * @param string name
	 * @param AmazonEc2TypeValueSetType valueSet
	 * @return AmazonEc2TypeFilterType
	 */
	public function __construct($_name = null,$_valueSet = null)
	{
		parent::__construct(array('name'=>$_name,'valueSet'=>$_valueSet));
	}
	/**
	 * Set name
	 * @param string name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->name = $_name);
	}
	/**
	 * Get name
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}
	/**
	 * Set valueSet
	 * @param ValueSetType valueSet
	 * @return ValueSetType
	 */
	public function setValueSet($_valueSet)
	{
		return ($this->valueSet = $_valueSet);
	}
	/**
	 * Get valueSet
	 * @return AmazonEc2TypeValueSetType
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