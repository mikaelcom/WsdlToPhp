<?php
/**
 * Class file for LifePicsTypeGetUserIDResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeGetUserIDResponse
 * @date 02/08/2012
 */
class LifePicsTypeGetUserIDResponse extends LifePicsWsdlClass
{
	/**
	 * The GetUserIDResult
	 * @var LifePicsTypeGetUserIDResult
	 */
	public $GetUserIDResult;
	/**
	 * Constructor
	 * @param LifePicsTypeGetUserIDResult GetUserIDResult
	 * @return LifePicsTypeGetUserIDResponse
	 */
	public function __construct($_GetUserIDResult = null)
	{
		parent::__construct(array('GetUserIDResult'=>$_GetUserIDResult));
	}
	/**
	 * Set GetUserIDResult
	 * @param GetUserIDResult GetUserIDResult
	 * @return GetUserIDResult
	 */
	public function setGetUserIDResult($_GetUserIDResult)
	{
		return ($this->GetUserIDResult = $_GetUserIDResult);
	}
	/**
	 * Get GetUserIDResult
	 * @return LifePicsTypeGetUserIDResult
	 */
	public function getGetUserIDResult()
	{
		return $this->GetUserIDResult;
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