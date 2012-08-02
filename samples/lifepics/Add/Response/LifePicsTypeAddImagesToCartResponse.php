<?php
/**
 * Class file for LifePicsTypeAddImagesToCartResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeAddImagesToCartResponse
 * @date 02/08/2012
 */
class LifePicsTypeAddImagesToCartResponse extends LifePicsWsdlClass
{
	/**
	 * The AddImagesToCartResult
	 * @var LifePicsTypeAddImagesToCartResult
	 */
	public $AddImagesToCartResult;
	/**
	 * Constructor
	 * @param LifePicsTypeAddImagesToCartResult AddImagesToCartResult
	 * @return LifePicsTypeAddImagesToCartResponse
	 */
	public function __construct($_AddImagesToCartResult = null)
	{
		parent::__construct(array('AddImagesToCartResult'=>$_AddImagesToCartResult));
	}
	/**
	 * Set AddImagesToCartResult
	 * @param AddImagesToCartResult AddImagesToCartResult
	 * @return AddImagesToCartResult
	 */
	public function setAddImagesToCartResult($_AddImagesToCartResult)
	{
		return ($this->AddImagesToCartResult = $_AddImagesToCartResult);
	}
	/**
	 * Get AddImagesToCartResult
	 * @return LifePicsTypeAddImagesToCartResult
	 */
	public function getAddImagesToCartResult()
	{
		return $this->AddImagesToCartResult;
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