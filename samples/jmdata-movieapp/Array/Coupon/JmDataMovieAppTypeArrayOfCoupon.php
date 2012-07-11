<?php
/**
 * Class file for JmDataMovieAppTypeArrayOfCoupon
 * @date 10/07/2012
 */
/**
 * Class JmDataMovieAppTypeArrayOfCoupon
 * @date 10/07/2012
 */
class JmDataMovieAppTypeArrayOfCoupon extends JmDataMovieAppWsdlClass
{
	/**
	 * The Coupon
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var JmDataMovieAppTypeCoupon
	 */
	public $Coupon;
	/**
	 * Constructor
	 * @param JmDataMovieAppTypeCoupon Coupon
	 * @return JmDataMovieAppTypeArrayOfCoupon
	 */
	public function __construct($_Coupon = null)
	{
		parent::__construct(array('Coupon'=>$_Coupon));
	}
	/**
	 * Set Coupon
	 * @param Coupon Coupon
	 * @return Coupon
	 */
	public function setCoupon($_Coupon)
	{
		return ($this->Coupon = $_Coupon);
	}
	/**
	 * Get Coupon
	 * @return JmDataMovieAppTypeCoupon
	 */
	public function getCoupon()
	{
		return $this->Coupon;
	}
	/**
	 * Returns the current element
	 * @see JmDataMovieAppWsdlClass::current()
	 * @return JmDataMovieAppTypeCoupon
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see JmDataMovieAppWsdlClass::item()
	 * @param int
	 * @return JmDataMovieAppTypeCoupon
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see JmDataMovieAppWsdlClass::first()
	 * @return JmDataMovieAppTypeCoupon
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see JmDataMovieAppWsdlClass::last()
	 * @return JmDataMovieAppTypeCoupon
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see JmDataMovieAppWsdlClass::offsetGet()
	 * @param int
	 * @return JmDataMovieAppTypeCoupon
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Coupon'
	 */
	public function getAttributeName()
	{
		return 'Coupon';
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