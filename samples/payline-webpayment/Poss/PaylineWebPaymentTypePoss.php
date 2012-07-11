<?php
/**
 * Class file for PaylineWebPaymentTypePoss
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypePoss
 * Documentation : list of point of sell
 * @date 10/07/2012
 */
class PaylineWebPaymentTypePoss extends PaylineWebPaymentWsdlClass
{
	/**
	 * The pos
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var PaylineWebPaymentTypePointOfSell
	 */
	public $pos;
	/**
	 * Constructor
	 * @param PaylineWebPaymentTypePointOfSell pos
	 * @return PaylineWebPaymentTypePoss
	 */
	public function __construct($_pos = null)
	{
		parent::__construct(array('pos'=>$_pos));
	}
	/**
	 * Set pos
	 * @param pointOfSell pos
	 * @return pointOfSell
	 */
	public function setPos($_pos)
	{
		return ($this->pos = $_pos);
	}
	/**
	 * Get pos
	 * @return PaylineWebPaymentTypepointOfSell
	 */
	public function getPos()
	{
		return $this->pos;
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