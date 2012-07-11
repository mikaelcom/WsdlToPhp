<?php
/**
 * Class file for CdyneEmailTypeReturnCodesResponse
 * @date 02/07/2012
 */
/**
 * Class CdyneEmailTypeReturnCodesResponse
 * @date 02/07/2012
 */
class CdyneEmailTypeReturnCodesResponse extends CdyneEmailWsdlClass
{
	/**
	 * The ReturnCodesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var CdyneEmailTypeArrayOfAnyType
	 */
	public $ReturnCodesResult;
	/**
	 * Constructor
	 * @param CdyneEmailTypeArrayOfAnyType ReturnCodesResult
	 * @return CdyneEmailTypeReturnCodesResponse
	 */
	public function __construct($_ReturnCodesResult = null)
	{
		parent::__construct(array('ReturnCodesResult'=>new CdyneEmailTypeArrayOfAnyType($_ReturnCodesResult)));
	}
	/**
	 * Set ReturnCodesResult
	 * @param ArrayOfAnyType ReturnCodesResult
	 * @return ArrayOfAnyType
	 */
	public function setReturnCodesResult($_ReturnCodesResult)
	{
		return ($this->ReturnCodesResult = $_ReturnCodesResult);
	}
	/**
	 * Get ReturnCodesResult
	 * @return CdyneEmailTypeArrayOfAnyType
	 */
	public function getReturnCodesResult()
	{
		return $this->ReturnCodesResult;
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