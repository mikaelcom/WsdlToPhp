<?php
/**
 * Class file for JmDataMovieAppTypeGetCouponsResponse
 * @date 10/07/2012
 */
/**
 * Class JmDataMovieAppTypeGetCouponsResponse
 * @date 10/07/2012
 */
class JmDataMovieAppTypeGetCouponsResponse extends JmDataMovieAppWsdlClass
{
	/**
	 * The GetCouponsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var JmDataMovieAppTypeArrayOfCoupon
	 */
	public $GetCouponsResult;
	/**
	 * Constructor
	 * @param JmDataMovieAppTypeArrayOfCoupon GetCouponsResult
	 * @return JmDataMovieAppTypeGetCouponsResponse
	 */
	public function __construct($_GetCouponsResult = null)
	{
		parent::__construct(array('GetCouponsResult'=>new JmDataMovieAppTypeArrayOfCoupon($_GetCouponsResult)));
	}
	/**
	 * Set GetCouponsResult
	 * @param ArrayOfCoupon GetCouponsResult
	 * @return ArrayOfCoupon
	 */
	public function setGetCouponsResult($_GetCouponsResult)
	{
		return ($this->GetCouponsResult = $_GetCouponsResult);
	}
	/**
	 * Get GetCouponsResult
	 * @return JmDataMovieAppTypeArrayOfCoupon
	 */
	public function getGetCouponsResult()
	{
		return $this->GetCouponsResult;
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