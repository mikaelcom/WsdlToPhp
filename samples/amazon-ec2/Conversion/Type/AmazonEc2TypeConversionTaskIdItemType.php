<?php
/**
 * Class file for AmazonEc2TypeConversionTaskIdItemType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeConversionTaskIdItemType
 * @date 10/07/2012
 */
class AmazonEc2TypeConversionTaskIdItemType extends AmazonEc2WsdlClass
{
	/**
	 * The conversionTaskId
	 * @var string
	 */
	public $conversionTaskId;
	/**
	 * Constructor
	 * @param string conversionTaskId
	 * @return AmazonEc2TypeConversionTaskIdItemType
	 */
	public function __construct($_conversionTaskId = null)
	{
		parent::__construct(array('conversionTaskId'=>$_conversionTaskId));
	}
	/**
	 * Set conversionTaskId
	 * @param string conversionTaskId
	 * @return string
	 */
	public function setConversionTaskId($_conversionTaskId)
	{
		return ($this->conversionTaskId = $_conversionTaskId);
	}
	/**
	 * Get conversionTaskId
	 * @return string
	 */
	public function getConversionTaskId()
	{
		return $this->conversionTaskId;
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