<?php
/**
 * Class file for AmazonEc2TypeDisassociateRouteTableType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDisassociateRouteTableType
 * @date 10/07/2012
 */
class AmazonEc2TypeDisassociateRouteTableType extends AmazonEc2WsdlClass
{
	/**
	 * The associationId
	 * @var string
	 */
	public $associationId;
	/**
	 * Constructor
	 * @param string associationId
	 * @return AmazonEc2TypeDisassociateRouteTableType
	 */
	public function __construct($_associationId = null)
	{
		parent::__construct(array('associationId'=>$_associationId));
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