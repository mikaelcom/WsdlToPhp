<?php
/**
 * Class file for LifePicsTypeApplyDiscountResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeApplyDiscountResponse
 * @date 02/08/2012
 */
class LifePicsTypeApplyDiscountResponse extends LifePicsWsdlClass
{
	/**
	 * The ApplyDiscountResult
	 * @var LifePicsTypeApplyDiscountResult
	 */
	public $ApplyDiscountResult;
	/**
	 * Constructor
	 * @param LifePicsTypeApplyDiscountResult ApplyDiscountResult
	 * @return LifePicsTypeApplyDiscountResponse
	 */
	public function __construct($_ApplyDiscountResult = null)
	{
		parent::__construct(array('ApplyDiscountResult'=>$_ApplyDiscountResult));
	}
	/**
	 * Set ApplyDiscountResult
	 * @param ApplyDiscountResult ApplyDiscountResult
	 * @return ApplyDiscountResult
	 */
	public function setApplyDiscountResult($_ApplyDiscountResult)
	{
		return ($this->ApplyDiscountResult = $_ApplyDiscountResult);
	}
	/**
	 * Get ApplyDiscountResult
	 * @return LifePicsTypeApplyDiscountResult
	 */
	public function getApplyDiscountResult()
	{
		return $this->ApplyDiscountResult;
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