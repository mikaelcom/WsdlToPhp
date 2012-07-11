<?php
/**
 * Class file for AmazonEc2TypeDescribeConversionTasksResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeConversionTasksResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeConversionTasksResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The conversionTasks
	 * @var AmazonEc2TypeConversionTaskSetType
	 */
	public $conversionTasks;
	/**
	 * Constructor
	 * @param string requestId
	 * @param AmazonEc2TypeConversionTaskSetType conversionTasks
	 * @return AmazonEc2TypeDescribeConversionTasksResponseType
	 */
	public function __construct($_requestId = null,$_conversionTasks = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'conversionTasks'=>$_conversionTasks));
	}
	/**
	 * Set requestId
	 * @param string requestId
	 * @return string
	 */
	public function setRequestId($_requestId)
	{
		return ($this->requestId = $_requestId);
	}
	/**
	 * Get requestId
	 * @return string
	 */
	public function getRequestId()
	{
		return $this->requestId;
	}
	/**
	 * Set conversionTasks
	 * @param ConversionTaskSetType conversionTasks
	 * @return ConversionTaskSetType
	 */
	public function setConversionTasks($_conversionTasks)
	{
		return ($this->conversionTasks = $_conversionTasks);
	}
	/**
	 * Get conversionTasks
	 * @return AmazonEc2TypeConversionTaskSetType
	 */
	public function getConversionTasks()
	{
		return $this->conversionTasks;
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