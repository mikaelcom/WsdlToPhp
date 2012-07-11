<?php
/**
 * Class file for AmazonECommerceServiceTypeOfferAttributes
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeOfferAttributes
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeOfferAttributes extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The Condition
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Condition;
	/**
	 * Constructor
	 * @param string Condition
	 * @return AmazonECommerceServiceTypeOfferAttributes
	 */
	public function __construct($_Condition = null)
	{
		parent::__construct(array('Condition'=>$_Condition));
	}
	/**
	 * Set Condition
	 * @param string Condition
	 * @return string
	 */
	public function setCondition($_Condition)
	{
		return ($this->Condition = $_Condition);
	}
	/**
	 * Get Condition
	 * @return string
	 */
	public function getCondition()
	{
		return $this->Condition;
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