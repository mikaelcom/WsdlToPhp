<?php
/**
 * Class file for AmazonFPSTypeResponseMetadata
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeResponseMetadata
 * @date 10/07/2012
 */
class AmazonFPSTypeResponseMetadata extends AmazonFPSWsdlClass
{
	/**
	 * The RequestId
	 * @var string
	 */
	public $RequestId;
	/**
	 * Constructor
	 * @param string RequestId
	 * @return AmazonFPSTypeResponseMetadata
	 */
	public function __construct($_RequestId = null)
	{
		parent::__construct(array('RequestId'=>$_RequestId));
	}
	/**
	 * Set RequestId
	 * @param string RequestId
	 * @return string
	 */
	public function setRequestId($_RequestId)
	{
		return ($this->RequestId = $_RequestId);
	}
	/**
	 * Get RequestId
	 * @return string
	 */
	public function getRequestId()
	{
		return $this->RequestId;
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