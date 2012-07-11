<?php
/**
 * Class file for UsgsUsngTypeGet_XYResponse
 * @date 08/07/2012
 */
/**
 * Class UsgsUsngTypeGet_XYResponse
 * @date 08/07/2012
 */
class UsgsUsngTypeGet_XYResponse extends UsgsUsngWsdlClass
{
	/**
	 * The Get_XYResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Get_XYResult;
	/**
	 * Constructor
	 * @param string Get_XYResult
	 * @return UsgsUsngTypeGet_XYResponse
	 */
	public function __construct($_Get_XYResult = null)
	{
		parent::__construct(array('Get_XYResult'=>$_Get_XYResult));
	}
	/**
	 * Set Get_XYResult
	 * @param string Get_XYResult
	 * @return string
	 */
	public function setGet_XYResult($_Get_XYResult)
	{
		return ($this->Get_XYResult = $_Get_XYResult);
	}
	/**
	 * Get Get_XYResult
	 * @return string
	 */
	public function getGet_XYResult()
	{
		return $this->Get_XYResult;
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