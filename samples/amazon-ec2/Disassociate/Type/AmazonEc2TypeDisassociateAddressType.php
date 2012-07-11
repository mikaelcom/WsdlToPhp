<?php
/**
 * Class file for AmazonEc2TypeDisassociateAddressType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDisassociateAddressType
 * @date 10/07/2012
 */
class AmazonEc2TypeDisassociateAddressType extends AmazonEc2WsdlClass
{
	/**
	 * The publicIp
	 * @var string
	 */
	public $publicIp;
	/**
	 * The associationId
	 * @var string
	 */
	public $associationId;
	/**
	 * Constructor
	 * @param string publicIp
	 * @param string associationId
	 * @return AmazonEc2TypeDisassociateAddressType
	 */
	public function __construct($_publicIp = null,$_associationId = null)
	{
		parent::__construct(array('publicIp'=>$_publicIp,'associationId'=>$_associationId));
	}
	/**
	 * Set publicIp
	 * @param string publicIp
	 * @return string
	 */
	public function setPublicIp($_publicIp)
	{
		return ($this->publicIp = $_publicIp);
	}
	/**
	 * Get publicIp
	 * @return string
	 */
	public function getPublicIp()
	{
		return $this->publicIp;
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