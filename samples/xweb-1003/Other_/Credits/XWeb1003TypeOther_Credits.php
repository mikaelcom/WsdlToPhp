<?php
/**
 * Class file for XWeb1003TypeOther_Credits
 * @date 09/07/2012
 */
/**
 * Class XWeb1003TypeOther_Credits
 * @date 09/07/2012
 */
class XWeb1003TypeOther_Credits extends XWeb1003WsdlClass
{
	/**
	 * The Other_Credit
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 3
	 * @var XWeb1003TypeOtherCreditType
	 */
	public $Other_Credit;
	/**
	 * Constructor
	 * @param XWeb1003TypeOtherCreditType Other_Credit
	 * @return XWeb1003TypeOther_Credits
	 */
	public function __construct($_Other_Credit = null)
	{
		parent::__construct(array('Other_Credit'=>$_Other_Credit));
	}
	/**
	 * Set Other_Credit
	 * @param OtherCreditType Other_Credit
	 * @return OtherCreditType
	 */
	public function setOther_Credit($_Other_Credit)
	{
		return ($this->Other_Credit = $_Other_Credit);
	}
	/**
	 * Get Other_Credit
	 * @return XWeb1003TypeOtherCreditType
	 */
	public function getOther_Credit()
	{
		return $this->Other_Credit;
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