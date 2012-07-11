<?php
/**
 * Class file for AmazonEc2TypeDescribeConversionTasksType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeConversionTasksType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeConversionTasksType extends AmazonEc2WsdlClass
{
	/**
	 * The conversionTaskIdSet
	 * @var AmazonEc2TypeConversionTaskIdSetType
	 */
	public $conversionTaskIdSet;
	/**
	 * Constructor
	 * @param AmazonEc2TypeConversionTaskIdSetType conversionTaskIdSet
	 * @return AmazonEc2TypeDescribeConversionTasksType
	 */
	public function __construct($_conversionTaskIdSet = null)
	{
		parent::__construct(array('conversionTaskIdSet'=>$_conversionTaskIdSet));
	}
	/**
	 * Set conversionTaskIdSet
	 * @param ConversionTaskIdSetType conversionTaskIdSet
	 * @return ConversionTaskIdSetType
	 */
	public function setConversionTaskIdSet($_conversionTaskIdSet)
	{
		return ($this->conversionTaskIdSet = $_conversionTaskIdSet);
	}
	/**
	 * Get conversionTaskIdSet
	 * @return AmazonEc2TypeConversionTaskIdSetType
	 */
	public function getConversionTaskIdSet()
	{
		return $this->conversionTaskIdSet;
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