<?php
/**
 * Class file for AmazonECommerceServiceTypeUPCList
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeUPCList
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeUPCList extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The UPCListElement
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var string
	 */
	public $UPCListElement;
	/**
	 * Constructor
	 * @param string UPCListElement
	 * @return AmazonECommerceServiceTypeUPCList
	 */
	public function __construct($_UPCListElement = null)
	{
		parent::__construct(array('UPCListElement'=>$_UPCListElement));
	}
	/**
	 * Set UPCListElement
	 * @param string UPCListElement
	 * @return string
	 */
	public function setUPCListElement($_UPCListElement)
	{
		return ($this->UPCListElement = $_UPCListElement);
	}
	/**
	 * Get UPCListElement
	 * @return string
	 */
	public function getUPCListElement()
	{
		return $this->UPCListElement;
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