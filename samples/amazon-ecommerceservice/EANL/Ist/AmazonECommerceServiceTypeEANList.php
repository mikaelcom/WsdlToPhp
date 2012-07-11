<?php
/**
 * Class file for AmazonECommerceServiceTypeEANList
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeEANList
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeEANList extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The EANListElement
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var string
	 */
	public $EANListElement;
	/**
	 * Constructor
	 * @param string EANListElement
	 * @return AmazonECommerceServiceTypeEANList
	 */
	public function __construct($_EANListElement = null)
	{
		parent::__construct(array('EANListElement'=>$_EANListElement));
	}
	/**
	 * Set EANListElement
	 * @param string EANListElement
	 * @return string
	 */
	public function setEANListElement($_EANListElement)
	{
		return ($this->EANListElement = $_EANListElement);
	}
	/**
	 * Get EANListElement
	 * @return string
	 */
	public function getEANListElement()
	{
		return $this->EANListElement;
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