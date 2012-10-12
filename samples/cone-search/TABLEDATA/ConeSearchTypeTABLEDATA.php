<?php
/**
 * Class file for ConeSearchTypeTABLEDATA
 * @date 13/10/2012
 */
/**
 * Class ConeSearchTypeTABLEDATA
 * @date 13/10/2012
 */
class ConeSearchTypeTABLEDATA extends ConeSearchWsdlClass
{
	/**
	 * The TR
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var ConeSearchTypeTR
	 */
	public $TR;
	/**
	 * Constructor
	 * @param ConeSearchTypeTR TR
	 * @return ConeSearchTypeTABLEDATA
	 */
	public function __construct($_TR = null)
	{
		parent::__construct(array('TR'=>$_TR));
	}
	/**
	 * Set TR
	 * @param TR TR
	 * @return TR
	 */
	public function setTR($_TR)
	{
		return ($this->TR = $_TR);
	}
	/**
	 * Get TR
	 * @return ConeSearchTypeTR
	 */
	public function getTR()
	{
		return $this->TR;
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