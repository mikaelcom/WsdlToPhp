<?php
/**
 * Class file for XWebACHDirectoryTypeGetParticipantsByTelephoneAreaCodeRequest
 * @date 09/07/2012
 */
/**
 * Class XWebACHDirectoryTypeGetParticipantsByTelephoneAreaCodeRequest
 * @date 09/07/2012
 */
class XWebACHDirectoryTypeGetParticipantsByTelephoneAreaCodeRequest extends XWebACHDirectoryWsdlClass
{
	/**
	 * The Telephone_Area_Code
	 * @var Telephone_Area_Code
	 */
	public $Telephone_Area_Code;
	/**
	 * Constructor
	 * @param Telephone_Area_Code Telephone_Area_Code
	 * @return XWebACHDirectoryTypeGetParticipantsByTelephoneAreaCodeRequest
	 */
	public function __construct($_Telephone_Area_Code = null)
	{
		parent::__construct(array('Telephone_Area_Code'=>$_Telephone_Area_Code));
	}
	/**
	 * Set Telephone_Area_Code
	 * @param Telephone_Area_Code Telephone_Area_Code
	 * @return Telephone_Area_Code
	 */
	public function setTelephone_Area_Code($_Telephone_Area_Code)
	{
		return ($this->Telephone_Area_Code = $_Telephone_Area_Code);
	}
	/**
	 * Get Telephone_Area_Code
	 * @return Telephone_Area_Code
	 */
	public function getTelephone_Area_Code()
	{
		return $this->Telephone_Area_Code;
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