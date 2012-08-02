<?php
/**
 * Class file for LifePicsTypeGetAlbumsResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeGetAlbumsResponse
 * @date 02/08/2012
 */
class LifePicsTypeGetAlbumsResponse extends LifePicsWsdlClass
{
	/**
	 * The GetAlbumsResult
	 * @var LifePicsTypeGetAlbumsResult
	 */
	public $GetAlbumsResult;
	/**
	 * Constructor
	 * @param LifePicsTypeGetAlbumsResult GetAlbumsResult
	 * @return LifePicsTypeGetAlbumsResponse
	 */
	public function __construct($_GetAlbumsResult = null)
	{
		parent::__construct(array('GetAlbumsResult'=>$_GetAlbumsResult));
	}
	/**
	 * Set GetAlbumsResult
	 * @param GetAlbumsResult GetAlbumsResult
	 * @return GetAlbumsResult
	 */
	public function setGetAlbumsResult($_GetAlbumsResult)
	{
		return ($this->GetAlbumsResult = $_GetAlbumsResult);
	}
	/**
	 * Get GetAlbumsResult
	 * @return LifePicsTypeGetAlbumsResult
	 */
	public function getGetAlbumsResult()
	{
		return $this->GetAlbumsResult;
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