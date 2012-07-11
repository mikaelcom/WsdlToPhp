<?php
/**
 * Class file for XiOFACTypeScore
 * @date 08/07/2012
 */
/**
 * Class XiOFACTypeScore
 * @date 08/07/2012
 */
class XiOFACTypeScore extends XiOFACWsdlClass
{
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Name;
	/**
	 * The City
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $City;
	/**
	 * The Country
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Country;
	/**
	 * Constructor
	 * @param double Name
	 * @param double City
	 * @param double Country
	 * @return XiOFACTypeScore
	 */
	public function __construct($_Name,$_City,$_Country)
	{
		parent::__construct(array('Name'=>$_Name,'City'=>$_City,'Country'=>$_Country));
	}
	/**
	 * Set Name
	 * @param double Name
	 * @return double
	 */
	public function setName($_Name)
	{
		return ($this->Name = $_Name);
	}
	/**
	 * Get Name
	 * @return double
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set City
	 * @param double City
	 * @return double
	 */
	public function setCity($_City)
	{
		return ($this->City = $_City);
	}
	/**
	 * Get City
	 * @return double
	 */
	public function getCity()
	{
		return $this->City;
	}
	/**
	 * Set Country
	 * @param double Country
	 * @return double
	 */
	public function setCountry($_Country)
	{
		return ($this->Country = $_Country);
	}
	/**
	 * Get Country
	 * @return double
	 */
	public function getCountry()
	{
		return $this->Country;
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