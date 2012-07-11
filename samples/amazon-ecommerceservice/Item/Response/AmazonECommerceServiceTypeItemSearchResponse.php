<?php
/**
 * Class file for AmazonECommerceServiceTypeItemSearchResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeItemSearchResponse
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeItemSearchResponse extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The OperationRequest
	 * @var AmazonECommerceServiceTypeOperationRequest
	 */
	public $OperationRequest;
	/**
	 * The Items
	 * @var AmazonECommerceServiceTypeItems
	 */
	public $Items;
	/**
	 * Constructor
	 * @param AmazonECommerceServiceTypeOperationRequest OperationRequest
	 * @param AmazonECommerceServiceTypeItems Items
	 * @return AmazonECommerceServiceTypeItemSearchResponse
	 */
	public function __construct($_OperationRequest = null,$_Items = null)
	{
		parent::__construct(array('OperationRequest'=>$_OperationRequest,'Items'=>$_Items));
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
	 * Set Items
	 * @param Items Items
	 * @return Items
	 */
	public function setItems($_Items)
	{
		return ($this->Items = $_Items);
	}
	/**
	 * Get Items
	 * @return AmazonECommerceServiceTypeItems
	 */
	public function getItems()
	{
		return $this->Items;
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