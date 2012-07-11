<?php
/**
 * Class file for SOSICAppendTypeGetSICNameBySICCodeResponse
 * @date 08/07/2012
 */
/**
 * Class SOSICAppendTypeGetSICNameBySICCodeResponse
 * @date 08/07/2012
 */
class SOSICAppendTypeGetSICNameBySICCodeResponse extends SOSICAppendWsdlClass
{
	/**
	 * The GetSICNameBySICCodeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOSICAppendTypeSICAppendResponse
	 */
	public $GetSICNameBySICCodeResult;
	/**
	 * Constructor
	 * @param SOSICAppendTypeSICAppendResponse GetSICNameBySICCodeResult
	 * @return SOSICAppendTypeGetSICNameBySICCodeResponse
	 */
	public function __construct($_GetSICNameBySICCodeResult = null)
	{
		parent::__construct(array('GetSICNameBySICCodeResult'=>$_GetSICNameBySICCodeResult));
	}
	/**
	 * Set GetSICNameBySICCodeResult
	 * @param SICAppendResponse GetSICNameBySICCodeResult
	 * @return SICAppendResponse
	 */
	public function setGetSICNameBySICCodeResult($_GetSICNameBySICCodeResult)
	{
		return ($this->GetSICNameBySICCodeResult = $_GetSICNameBySICCodeResult);
	}
	/**
	 * Get GetSICNameBySICCodeResult
	 * @return SOSICAppendTypeSICAppendResponse
	 */
	public function getGetSICNameBySICCodeResult()
	{
		return $this->GetSICNameBySICCodeResult;
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