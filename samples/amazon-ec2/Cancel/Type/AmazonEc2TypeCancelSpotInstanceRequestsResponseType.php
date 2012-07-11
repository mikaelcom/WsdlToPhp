<?php
/**
 * Class file for AmazonEc2TypeCancelSpotInstanceRequestsResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeCancelSpotInstanceRequestsResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeCancelSpotInstanceRequestsResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The spotInstanceRequestSet
	 * @var AmazonEc2TypeCancelSpotInstanceRequestsResponseSetType
	 */
	public $spotInstanceRequestSet;
	/**
	 * Constructor
	 * @param string requestId
	 * @param AmazonEc2TypeCancelSpotInstanceRequestsResponseSetType spotInstanceRequestSet
	 * @return AmazonEc2TypeCancelSpotInstanceRequestsResponseType
	 */
	public function __construct($_requestId = null,$_spotInstanceRequestSet = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'spotInstanceRequestSet'=>$_spotInstanceRequestSet));
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
	 * Set spotInstanceRequestSet
	 * @param CancelSpotInstanceRequestsResponseSetType spotInstanceRequestSet
	 * @return CancelSpotInstanceRequestsResponseSetType
	 */
	public function setSpotInstanceRequestSet($_spotInstanceRequestSet)
	{
		return ($this->spotInstanceRequestSet = $_spotInstanceRequestSet);
	}
	/**
	 * Get spotInstanceRequestSet
	 * @return AmazonEc2TypeCancelSpotInstanceRequestsResponseSetType
	 */
	public function getSpotInstanceRequestSet()
	{
		return $this->spotInstanceRequestSet;
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