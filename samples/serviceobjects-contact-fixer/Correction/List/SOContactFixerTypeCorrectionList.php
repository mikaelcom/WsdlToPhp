<?php
/**
 * Class file for SOContactFixerTypeCorrectionList
 * @date 08/07/2012
 */
/**
 * Class SOContactFixerTypeCorrectionList
 * @date 08/07/2012
 */
class SOContactFixerTypeCorrectionList extends SOContactFixerWsdlClass
{
	/**
	 * The Corrections
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOContactFixerTypeArrayOfCorrection
	 */
	public $Corrections;
	/**
	 * The Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOContactFixerTypeError
	 */
	public $Error;
	/**
	 * Constructor
	 * @param SOContactFixerTypeArrayOfCorrection Corrections
	 * @param SOContactFixerTypeError Error
	 * @return SOContactFixerTypeCorrectionList
	 */
	public function __construct($_Corrections = null,$_Error = null)
	{
		parent::__construct(array('Corrections'=>new SOContactFixerTypeArrayOfCorrection($_Corrections),'Error'=>$_Error));
	}
	/**
	 * Set Corrections
	 * @param ArrayOfCorrection Corrections
	 * @return ArrayOfCorrection
	 */
	public function setCorrections($_Corrections)
	{
		return ($this->Corrections = $_Corrections);
	}
	/**
	 * Get Corrections
	 * @return SOContactFixerTypeArrayOfCorrection
	 */
	public function getCorrections()
	{
		return $this->Corrections;
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
	 * @return SOContactFixerTypeError
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