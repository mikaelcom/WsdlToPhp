<?php
/**
 * Class file for SPWebPartPagesTypeAddWebPartResponse
 * @date 06/07/2012
 */
/**
 * Class SPWebPartPagesTypeAddWebPartResponse
 * @date 06/07/2012
 */
class SPWebPartPagesTypeAddWebPartResponse extends SPWebPartPagesWsdlClass
{
	/**
	 * The AddWebPartResult
	 * @var guid
	 */
	public $AddWebPartResult;
	/**
	 * Constructor
	 * @param guid AddWebPartResult
	 * @return SPWebPartPagesTypeAddWebPartResponse
	 */
	public function __construct($_AddWebPartResult = null)
	{
		parent::__construct(array('AddWebPartResult'=>$_AddWebPartResult));
	}
	/**
	 * Set AddWebPartResult
	 * @param guid AddWebPartResult
	 * @return guid
	 */
	public function setAddWebPartResult($_AddWebPartResult)
	{
		return ($this->AddWebPartResult = $_AddWebPartResult);
	}
	/**
	 * Get AddWebPartResult
	 * @return guid
	 */
	public function getAddWebPartResult()
	{
		return $this->AddWebPartResult;
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