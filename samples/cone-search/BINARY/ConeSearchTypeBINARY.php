<?php
/**
 * Class file for ConeSearchTypeBINARY
 * @date 13/10/2012
 */
/**
 * Class ConeSearchTypeBINARY
 * @date 13/10/2012
 */
class ConeSearchTypeBINARY extends ConeSearchWsdlClass
{
	/**
	 * The STREAM
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var ConeSearchTypeSTREAM
	 */
	public $STREAM;
	/**
	 * Constructor
	 * @param ConeSearchTypeSTREAM STREAM
	 * @return ConeSearchTypeBINARY
	 */
	public function __construct($_STREAM = null)
	{
		parent::__construct(array('STREAM'=>$_STREAM));
	}
	/**
	 * Set STREAM
	 * @param STREAM STREAM
	 * @return STREAM
	 */
	public function setSTREAM($_STREAM)
	{
		return ($this->STREAM = $_STREAM);
	}
	/**
	 * Get STREAM
	 * @return ConeSearchTypeSTREAM
	 */
	public function getSTREAM()
	{
		return $this->STREAM;
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