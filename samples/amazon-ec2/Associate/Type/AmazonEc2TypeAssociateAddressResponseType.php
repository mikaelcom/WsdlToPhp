<?php
/**
 * Class file for AmazonEc2TypeAssociateAddressResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeAssociateAddressResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeAssociateAddressResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The return
	 * @var boolean
	 */
	public $return;
	/**
	 * The associationId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $associationId;
	/**
	 * Constructor
	 * @param string requestId
	 * @param boolean return
	 * @param string associationId
	 * @return AmazonEc2TypeAssociateAddressResponseType
	 */
	public function __construct($_requestId = null,$_return = null,$_associationId = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'return'=>$_return,'associationId'=>$_associationId));
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
	 * Set return
	 * @param boolean return
	 * @return boolean
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return boolean
	 */
	public function getReturn()
	{
		return $this->return;
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