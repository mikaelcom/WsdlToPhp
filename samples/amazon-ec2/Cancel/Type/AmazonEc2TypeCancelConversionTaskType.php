<?php
/**
 * Class file for AmazonEc2TypeCancelConversionTaskType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeCancelConversionTaskType
 * @date 10/07/2012
 */
class AmazonEc2TypeCancelConversionTaskType extends AmazonEc2WsdlClass
{
	/**
	 * The conversionTaskId
	 * @var string
	 */
	public $conversionTaskId;
	/**
	 * Constructor
	 * @param string conversionTaskId
	 * @return AmazonEc2TypeCancelConversionTaskType
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