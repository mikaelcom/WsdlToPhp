<?php
/**
 * Class file for AmazonLSTypeResponseMetadata
 * @date 10/07/2012
 */
/**
 * Class AmazonLSTypeResponseMetadata
 * @date 10/07/2012
 */
class AmazonLSTypeResponseMetadata extends AmazonLSWsdlClass
{
	/**
	 * The RequestId
	 * @var string
	 */
	public $RequestId;
	/**
	 * Constructor
	 * @param string RequestId
	 * @return AmazonLSTypeResponseMetadata
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