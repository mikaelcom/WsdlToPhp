<?php
/**
 * Class file for LifePicsTypeCheckLocationStatusResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeCheckLocationStatusResponse
 * @date 02/08/2012
 */
class LifePicsTypeCheckLocationStatusResponse extends LifePicsWsdlClass
{
	/**
	 * The CheckLocationStatusResult
	 * @var LifePicsTypeCheckLocationStatusResult
	 */
	public $CheckLocationStatusResult;
	/**
	 * Constructor
	 * @param LifePicsTypeCheckLocationStatusResult CheckLocationStatusResult
	 * @return LifePicsTypeCheckLocationStatusResponse
	 */
	public function __construct($_CheckLocationStatusResult = null)
	{
		parent::__construct(array('CheckLocationStatusResult'=>$_CheckLocationStatusResult));
	}
	/**
	 * Set CheckLocationStatusResult
	 * @param CheckLocationStatusResult CheckLocationStatusResult
	 * @return CheckLocationStatusResult
	 */
	public function setCheckLocationStatusResult($_CheckLocationStatusResult)
	{
		return ($this->CheckLocationStatusResult = $_CheckLocationStatusResult);
	}
	/**
	 * Get CheckLocationStatusResult
	 * @return LifePicsTypeCheckLocationStatusResult
	 */
	public function getCheckLocationStatusResult()
	{
		return $this->CheckLocationStatusResult;
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