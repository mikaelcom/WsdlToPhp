<?php
/**
 * Class file for UsgsUsngTypeGet_USNGResponse
 * @date 08/07/2012
 */
/**
 * Class UsgsUsngTypeGet_USNGResponse
 * @date 08/07/2012
 */
class UsgsUsngTypeGet_USNGResponse extends UsgsUsngWsdlClass
{
	/**
	 * The Get_USNGResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Get_USNGResult;
	/**
	 * Constructor
	 * @param string Get_USNGResult
	 * @return UsgsUsngTypeGet_USNGResponse
	 */
	public function __construct($_Get_USNGResult = null)
	{
		parent::__construct(array('Get_USNGResult'=>$_Get_USNGResult));
	}
	/**
	 * Set Get_USNGResult
	 * @param string Get_USNGResult
	 * @return string
	 */
	public function setGet_USNGResult($_Get_USNGResult)
	{
		return ($this->Get_USNGResult = $_Get_USNGResult);
	}
	/**
	 * Get Get_USNGResult
	 * @return string
	 */
	public function getGet_USNGResult()
	{
		return $this->Get_USNGResult;
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