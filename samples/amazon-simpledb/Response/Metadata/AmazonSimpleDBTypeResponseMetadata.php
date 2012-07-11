<?php
/**
 * Class file for AmazonSimpleDBTypeResponseMetadata
 * @date 10/07/2012
 */
/**
 * Class AmazonSimpleDBTypeResponseMetadata
 * @date 10/07/2012
 */
class AmazonSimpleDBTypeResponseMetadata extends AmazonSimpleDBWsdlClass
{
	/**
	 * The RequestId
	 * @var string
	 */
	public $RequestId;
	/**
	 * The BoxUsage
	 * @var string
	 */
	public $BoxUsage;
	/**
	 * Constructor
	 * @param string RequestId
	 * @param string BoxUsage
	 * @return AmazonSimpleDBTypeResponseMetadata
	 */
	public function __construct($_RequestId = null,$_BoxUsage = null)
	{
		parent::__construct(array('RequestId'=>$_RequestId,'BoxUsage'=>$_BoxUsage));
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
	 * Set BoxUsage
	 * @param string BoxUsage
	 * @return string
	 */
	public function setBoxUsage($_BoxUsage)
	{
		return ($this->BoxUsage = $_BoxUsage);
	}
	/**
	 * Get BoxUsage
	 * @return string
	 */
	public function getBoxUsage()
	{
		return $this->BoxUsage;
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