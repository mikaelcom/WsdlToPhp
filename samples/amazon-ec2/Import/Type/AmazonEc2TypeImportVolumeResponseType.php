<?php
/**
 * Class file for AmazonEc2TypeImportVolumeResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeImportVolumeResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeImportVolumeResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The conversionTask
	 * @var AmazonEc2TypeConversionTaskType
	 */
	public $conversionTask;
	/**
	 * Constructor
	 * @param string requestId
	 * @param AmazonEc2TypeConversionTaskType conversionTask
	 * @return AmazonEc2TypeImportVolumeResponseType
	 */
	public function __construct($_requestId = null,$_conversionTask = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'conversionTask'=>$_conversionTask));
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
	 * Set conversionTask
	 * @param ConversionTaskType conversionTask
	 * @return ConversionTaskType
	 */
	public function setConversionTask($_conversionTask)
	{
		return ($this->conversionTask = $_conversionTask);
	}
	/**
	 * Get conversionTask
	 * @return AmazonEc2TypeConversionTaskType
	 */
	public function getConversionTask()
	{
		return $this->conversionTask;
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