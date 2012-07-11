<?php
/**
 * Class file for AmazonEc2TypeReplaceNetworkAclAssociationType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeReplaceNetworkAclAssociationType
 * @date 10/07/2012
 */
class AmazonEc2TypeReplaceNetworkAclAssociationType extends AmazonEc2WsdlClass
{
	/**
	 * The associationId
	 * @var string
	 */
	public $associationId;
	/**
	 * The networkAclId
	 * @var string
	 */
	public $networkAclId;
	/**
	 * Constructor
	 * @param string associationId
	 * @param string networkAclId
	 * @return AmazonEc2TypeReplaceNetworkAclAssociationType
	 */
	public function __construct($_associationId = null,$_networkAclId = null)
	{
		parent::__construct(array('associationId'=>$_associationId,'networkAclId'=>$_networkAclId));
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
	 * Set networkAclId
	 * @param string networkAclId
	 * @return string
	 */
	public function setNetworkAclId($_networkAclId)
	{
		return ($this->networkAclId = $_networkAclId);
	}
	/**
	 * Get networkAclId
	 * @return string
	 */
	public function getNetworkAclId()
	{
		return $this->networkAclId;
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