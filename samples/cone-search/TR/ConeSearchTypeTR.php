<?php
/**
 * Class file for ConeSearchTypeTR
 * @date 13/10/2012
 */
/**
 * Class ConeSearchTypeTR
 * @date 13/10/2012
 */
class ConeSearchTypeTR extends ConeSearchWsdlClass
{
	/**
	 * The TD
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var ConeSearchTypeTD
	 */
	public $TD;
	/**
	 * Constructor
	 * @param ConeSearchTypeTD TD
	 * @return ConeSearchTypeTR
	 */
	public function __construct($_TD = null)
	{
		parent::__construct(array('TD'=>$_TD));
	}
	/**
	 * Set TD
	 * @param TD TD
	 * @return TD
	 */
	public function setTD($_TD)
	{
		return ($this->TD = $_TD);
	}
	/**
	 * Get TD
	 * @return ConeSearchTypeTD
	 */
	public function getTD()
	{
		return $this->TD;
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