<?php
/**
 * Class file for ConeSearchTypeMIN
 * @date 13/10/2012
 */
/**
 * Class ConeSearchTypeMIN
 * @date 13/10/2012
 */
class ConeSearchTypeMIN extends ConeSearchWsdlClass
{
	/**
	 * The value
	 * @var string
	 */
	public $value;
	/**
	 * The inclusive
	 * Meta informations :
	 * 	- default : yes
	 * @var ConeSearchTypeYesno
	 */
	public $inclusive;
	/**
	 * Constructor
	 * @param string value
	 * @param ConeSearchTypeYesno inclusive
	 * @return ConeSearchTypeMIN
	 */
	public function __construct($_value = null,$_inclusive = 'yes')
	{
		parent::__construct(array('value'=>$_value,'inclusive'=>$_inclusive));
	}
	/**
	 * Set value
	 * @param string value
	 * @return string
	 */
	public function setValue($_value)
	{
		return ($this->value = $_value);
	}
	/**
	 * Get value
	 * @return string
	 */
	public function getValue()
	{
		return $this->value;
	}
	/**
	 * Set inclusive
	 * @param yesno inclusive
	 * @return yesno
	 */
	public function setInclusive($_inclusive)
	{
		return ($this->inclusive = ConeSearchTypeyesno::valueIsValid($_inclusive)?$_inclusive:null);
	}
	/**
	 * Get inclusive
	 * @return ConeSearchTypeyesno
	 */
	public function getInclusive()
	{
		return $this->inclusive;
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