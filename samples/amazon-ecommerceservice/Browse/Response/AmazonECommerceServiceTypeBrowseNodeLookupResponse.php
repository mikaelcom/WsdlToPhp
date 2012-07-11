<?php
/**
 * Class file for AmazonECommerceServiceTypeBrowseNodeLookupResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeBrowseNodeLookupResponse
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeBrowseNodeLookupResponse extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The OperationRequest
	 * @var AmazonECommerceServiceTypeOperationRequest
	 */
	public $OperationRequest;
	/**
	 * The BrowseNodes
	 * @var AmazonECommerceServiceTypeBrowseNodes
	 */
	public $BrowseNodes;
	/**
	 * Constructor
	 * @param AmazonECommerceServiceTypeOperationRequest OperationRequest
	 * @param AmazonECommerceServiceTypeBrowseNodes BrowseNodes
	 * @return AmazonECommerceServiceTypeBrowseNodeLookupResponse
	 */
	public function __construct($_OperationRequest = null,$_BrowseNodes = null)
	{
		parent::__construct(array('OperationRequest'=>$_OperationRequest,'BrowseNodes'=>$_BrowseNodes));
	}
	/**
	 * Set OperationRequest
	 * @param OperationRequest OperationRequest
	 * @return OperationRequest
	 */
	public function setOperationRequest($_OperationRequest)
	{
		return ($this->OperationRequest = $_OperationRequest);
	}
	/**
	 * Get OperationRequest
	 * @return AmazonECommerceServiceTypeOperationRequest
	 */
	public function getOperationRequest()
	{
		return $this->OperationRequest;
	}
	/**
	 * Set BrowseNodes
	 * @param BrowseNodes BrowseNodes
	 * @return BrowseNodes
	 */
	public function setBrowseNodes($_BrowseNodes)
	{
		return ($this->BrowseNodes = $_BrowseNodes);
	}
	/**
	 * Get BrowseNodes
	 * @return AmazonECommerceServiceTypeBrowseNodes
	 */
	public function getBrowseNodes()
	{
		return $this->BrowseNodes;
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