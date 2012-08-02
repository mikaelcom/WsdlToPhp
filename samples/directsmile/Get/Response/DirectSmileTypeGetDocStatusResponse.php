<?php
/**
 * Class file for DirectSmileTypeGetDocStatusResponse
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypeGetDocStatusResponse
 * @date 02/08/2012
 */
class DirectSmileTypeGetDocStatusResponse extends DirectSmileWsdlClass
{
	/**
	 * The GetDocStatusResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $GetDocStatusResult;
	/**
	 * Constructor
	 * @param string GetDocStatusResult
	 * @return DirectSmileTypeGetDocStatusResponse
	 */
	public function __construct($_GetDocStatusResult = null)
	{
		parent::__construct(array('GetDocStatusResult'=>$_GetDocStatusResult));
	}
	/**
	 * Set GetDocStatusResult
	 * @param string GetDocStatusResult
	 * @return string
	 */
	public function setGetDocStatusResult($_GetDocStatusResult)
	{
		return ($this->GetDocStatusResult = $_GetDocStatusResult);
	}
	/**
	 * Get GetDocStatusResult
	 * @return string
	 */
	public function getGetDocStatusResult()
	{
		return $this->GetDocStatusResult;
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