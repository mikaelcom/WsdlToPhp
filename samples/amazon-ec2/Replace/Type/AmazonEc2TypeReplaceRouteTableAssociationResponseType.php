<?php
/**
 * Class file for AmazonEc2TypeReplaceRouteTableAssociationResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeReplaceRouteTableAssociationResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeReplaceRouteTableAssociationResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The newAssociationId
	 * @var string
	 */
	public $newAssociationId;
	/**
	 * Constructor
	 * @param string requestId
	 * @param string newAssociationId
	 * @return AmazonEc2TypeReplaceRouteTableAssociationResponseType
	 */
	public function __construct($_requestId = null,$_newAssociationId = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'newAssociationId'=>$_newAssociationId));
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
	 * Set newAssociationId
	 * @param string newAssociationId
	 * @return string
	 */
	public function setNewAssociationId($_newAssociationId)
	{
		return ($this->newAssociationId = $_newAssociationId);
	}
	/**
	 * Get newAssociationId
	 * @return string
	 */
	public function getNewAssociationId()
	{
		return $this->newAssociationId;
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