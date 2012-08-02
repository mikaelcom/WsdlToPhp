<?php
/**
 * Class file for LifePicsTypeEmptyCartResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeEmptyCartResponse
 * @date 02/08/2012
 */
class LifePicsTypeEmptyCartResponse extends LifePicsWsdlClass
{
	/**
	 * The EmptyCartResult
	 * @var LifePicsTypeEmptyCartResult
	 */
	public $EmptyCartResult;
	/**
	 * Constructor
	 * @param LifePicsTypeEmptyCartResult EmptyCartResult
	 * @return LifePicsTypeEmptyCartResponse
	 */
	public function __construct($_EmptyCartResult = null)
	{
		parent::__construct(array('EmptyCartResult'=>$_EmptyCartResult));
	}
	/**
	 * Set EmptyCartResult
	 * @param EmptyCartResult EmptyCartResult
	 * @return EmptyCartResult
	 */
	public function setEmptyCartResult($_EmptyCartResult)
	{
		return ($this->EmptyCartResult = $_EmptyCartResult);
	}
	/**
	 * Get EmptyCartResult
	 * @return LifePicsTypeEmptyCartResult
	 */
	public function getEmptyCartResult()
	{
		return $this->EmptyCartResult;
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