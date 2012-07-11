<?php
/**
 * Class file for XiIndicesTypeListIndicesByCountry
 * @date 08/07/2012
 */
/**
 * Class XiIndicesTypeListIndicesByCountry
 * @date 08/07/2012
 */
class XiIndicesTypeListIndicesByCountry extends XiIndicesWsdlClass
{
	/**
	 * The Country
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Country;
	/**
	 * Constructor
	 * @param string Country
	 * @return XiIndicesTypeListIndicesByCountry
	 */
	public function __construct($_Country = null)
	{
		parent::__construct(array('Country'=>$_Country));
	}
	/**
	 * Set Country
	 * @param string Country
	 * @return string
	 */
	public function setCountry($_Country)
	{
		return ($this->Country = $_Country);
	}
	/**
	 * Get Country
	 * @return string
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