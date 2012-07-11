<?php
/**
 * Class file for AmazonEc2TypeAssociateRouteTableResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeAssociateRouteTableResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeAssociateRouteTableResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The associationId
	 * @var string
	 */
	public $associationId;
	/**
	 * Constructor
	 * @param string requestId
	 * @param string associationId
	 * @return AmazonEc2TypeAssociateRouteTableResponseType
	 */
	public function __construct($_requestId = null,$_associationId = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'associationId'=>$_associationId));
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
	 * Set associationId
	 * @param string associationId
	 * @return string
	 */
	public function setAssociationId($_associationId)
	{
		return ($this->associationId = $_associationId);
	}
	/**
	 * Get associationId
	 * @return string
	 */
	public function getAssociationId()
	{
		return $this->associationId;
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