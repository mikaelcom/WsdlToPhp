<?php
/**
 * Class file for SOBinValidationTypeBinValidationResult
 * @date 08/07/2012
 */
/**
 * Class SOBinValidationTypeBinValidationResult
 * @date 08/07/2012
 */
class SOBinValidationTypeBinValidationResult extends SOBinValidationWsdlClass
{
	/**
	 * The BinValidationInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOBinValidationTypeBinValidationInfo
	 */
	public $BinValidationInfo;
	/**
	 * The Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOBinValidationTypeError
	 */
	public $Error;
	/**
	 * Constructor
	 * @param SOBinValidationTypeBinValidationInfo BinValidationInfo
	 * @param SOBinValidationTypeError Error
	 * @return SOBinValidationTypeBinValidationResult
	 */
	public function __construct($_BinValidationInfo = null,$_Error = null)
	{
		parent::__construct(array('BinValidationInfo'=>$_BinValidationInfo,'Error'=>$_Error));
	}
	/**
	 * Set BinValidationInfo
	 * @param BinValidationInfo BinValidationInfo
	 * @return BinValidationInfo
	 */
	public function setBinValidationInfo($_BinValidationInfo)
	{
		return ($this->BinValidationInfo = $_BinValidationInfo);
	}
	/**
	 * Get BinValidationInfo
	 * @return SOBinValidationTypeBinValidationInfo
	 */
	public function getBinValidationInfo()
	{
		return $this->BinValidationInfo;
	}
	/**
	 * Set Error
	 * @param Error Error
	 * @return Error
	 */
	public function setError($_Error)
	{
		return ($this->Error = $_Error);
	}
	/**
	 * Get Error
	 * @return SOBinValidationTypeError
	 */
	public function getError()
	{
		return $this->Error;
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