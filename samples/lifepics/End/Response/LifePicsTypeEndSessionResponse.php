<?php
/**
 * Class file for LifePicsTypeEndSessionResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeEndSessionResponse
 * @date 02/08/2012
 */
class LifePicsTypeEndSessionResponse extends LifePicsWsdlClass
{
	/**
	 * The EndSessionResult
	 * @var LifePicsTypeEndSessionResult
	 */
	public $EndSessionResult;
	/**
	 * Constructor
	 * @param LifePicsTypeEndSessionResult EndSessionResult
	 * @return LifePicsTypeEndSessionResponse
	 */
	public function __construct($_EndSessionResult = null)
	{
		parent::__construct(array('EndSessionResult'=>$_EndSessionResult));
	}
	/**
	 * Set EndSessionResult
	 * @param EndSessionResult EndSessionResult
	 * @return EndSessionResult
	 */
	public function setEndSessionResult($_EndSessionResult)
	{
		return ($this->EndSessionResult = $_EndSessionResult);
	}
	/**
	 * Get EndSessionResult
	 * @return LifePicsTypeEndSessionResult
	 */
	public function getEndSessionResult()
	{
		return $this->EndSessionResult;
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