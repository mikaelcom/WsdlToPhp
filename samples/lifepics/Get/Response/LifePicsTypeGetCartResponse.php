<?php
/**
 * Class file for LifePicsTypeGetCartResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeGetCartResponse
 * @date 02/08/2012
 */
class LifePicsTypeGetCartResponse extends LifePicsWsdlClass
{
	/**
	 * The GetCartResult
	 * @var LifePicsTypeGetCartResult
	 */
	public $GetCartResult;
	/**
	 * Constructor
	 * @param LifePicsTypeGetCartResult GetCartResult
	 * @return LifePicsTypeGetCartResponse
	 */
	public function __construct($_GetCartResult = null)
	{
		parent::__construct(array('GetCartResult'=>$_GetCartResult));
	}
	/**
	 * Set GetCartResult
	 * @param GetCartResult GetCartResult
	 * @return GetCartResult
	 */
	public function setGetCartResult($_GetCartResult)
	{
		return ($this->GetCartResult = $_GetCartResult);
	}
	/**
	 * Get GetCartResult
	 * @return LifePicsTypeGetCartResult
	 */
	public function getGetCartResult()
	{
		return $this->GetCartResult;
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