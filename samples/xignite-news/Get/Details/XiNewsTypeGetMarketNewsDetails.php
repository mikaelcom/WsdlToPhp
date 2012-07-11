<?php
/**
 * Class file for XiNewsTypeGetMarketNewsDetails
 * @date 08/07/2012
 */
/**
 * Class XiNewsTypeGetMarketNewsDetails
 * @date 08/07/2012
 */
class XiNewsTypeGetMarketNewsDetails extends XiNewsWsdlClass
{
	/**
	 * The Reference
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Reference;
	/**
	 * Constructor
	 * @param string Reference
	 * @return XiNewsTypeGetMarketNewsDetails
	 */
	public function __construct($_Reference = null)
	{
		parent::__construct(array('Reference'=>$_Reference));
	}
	/**
	 * Set Reference
	 * @param string Reference
	 * @return string
	 */
	public function setReference($_Reference)
	{
		return ($this->Reference = $_Reference);
	}
	/**
	 * Get Reference
	 * @return string
	 */
	public function getReference()
	{
		return $this->Reference;
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