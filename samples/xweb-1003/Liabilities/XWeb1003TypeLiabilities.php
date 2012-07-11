<?php
/**
 * Class file for XWeb1003TypeLiabilities
 * @date 09/07/2012
 */
/**
 * Class XWeb1003TypeLiabilities
 * @date 09/07/2012
 */
class XWeb1003TypeLiabilities extends XWeb1003WsdlClass
{
	/**
	 * The Liability
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var XWeb1003TypeLiabilityType
	 */
	public $Liability;
	/**
	 * Constructor
	 * @param XWeb1003TypeLiabilityType Liability
	 * @return XWeb1003TypeLiabilities
	 */
	public function __construct($_Liability = null)
	{
		parent::__construct(array('Liability'=>$_Liability));
	}
	/**
	 * Set Liability
	 * @param LiabilityType Liability
	 * @return LiabilityType
	 */
	public function setLiability($_Liability)
	{
		return ($this->Liability = $_Liability);
	}
	/**
	 * Get Liability
	 * @return XWeb1003TypeLiabilityType
	 */
	public function getLiability()
	{
		return $this->Liability;
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