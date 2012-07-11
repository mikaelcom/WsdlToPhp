<?php
/**
 * Class file for AmazonECommerceServiceTypeCartAddResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeCartAddResponse
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeCartAddResponse extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The OperationRequest
	 * @var AmazonECommerceServiceTypeOperationRequest
	 */
	public $OperationRequest;
	/**
	 * The Cart
	 * @var AmazonECommerceServiceTypeCart
	 */
	public $Cart;
	/**
	 * Constructor
	 * @param AmazonECommerceServiceTypeOperationRequest OperationRequest
	 * @param AmazonECommerceServiceTypeCart Cart
	 * @return AmazonECommerceServiceTypeCartAddResponse
	 */
	public function __construct($_OperationRequest = null,$_Cart = null)
	{
		parent::__construct(array('OperationRequest'=>$_OperationRequest,'Cart'=>$_Cart));
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
	 * Set Cart
	 * @param Cart Cart
	 * @return Cart
	 */
	public function setCart($_Cart)
	{
		return ($this->Cart = $_Cart);
	}
	/**
	 * Get Cart
	 * @return AmazonECommerceServiceTypeCart
	 */
	public function getCart()
	{
		return $this->Cart;
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