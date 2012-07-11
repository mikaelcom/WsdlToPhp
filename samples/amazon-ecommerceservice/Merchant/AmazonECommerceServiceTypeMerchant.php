<?php
/**
 * Class file for AmazonECommerceServiceTypeMerchant
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeMerchant
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeMerchant extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Name;
	/**
	 * Constructor
	 * @param string Name
	 * @return AmazonECommerceServiceTypeMerchant
	 */
	public function __construct($_Name = null)
	{
		parent::__construct(array('Name'=>$_Name));
	}
	/**
	 * Set Name
	 * @param string Name
	 * @return string
	 */
	public function setName($_Name)
	{
		return ($this->Name = $_Name);
	}
	/**
	 * Get Name
	 * @return string
	 */
	public function getName()
	{
		return $this->Name;
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