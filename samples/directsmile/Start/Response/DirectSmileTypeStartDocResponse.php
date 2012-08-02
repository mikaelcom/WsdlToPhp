<?php
/**
 * Class file for DirectSmileTypeStartDocResponse
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypeStartDocResponse
 * @date 02/08/2012
 */
class DirectSmileTypeStartDocResponse extends DirectSmileWsdlClass
{
	/**
	 * The StartDocResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StartDocResult;
	/**
	 * Constructor
	 * @param string StartDocResult
	 * @return DirectSmileTypeStartDocResponse
	 */
	public function __construct($_StartDocResult = null)
	{
		parent::__construct(array('StartDocResult'=>$_StartDocResult));
	}
	/**
	 * Set StartDocResult
	 * @param string StartDocResult
	 * @return string
	 */
	public function setStartDocResult($_StartDocResult)
	{
		return ($this->StartDocResult = $_StartDocResult);
	}
	/**
	 * Get StartDocResult
	 * @return string
	 */
	public function getStartDocResult()
	{
		return $this->StartDocResult;
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