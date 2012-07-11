<?php
/**
 * Class file for SONcoaLiveTypeNCOAResult
 * @date 06/07/2012
 */
/**
 * Class SONcoaLiveTypeNCOAResult
 * @date 06/07/2012
 */
class SONcoaLiveTypeNCOAResult extends SONcoaLiveWsdlClass
{
	/**
	 * The NameIn
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $NameIn;
	/**
	 * The RawInputAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SONcoaLiveTypeRawInputAddress
	 */
	public $RawInputAddress;
	/**
	 * The CASSInputAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SONcoaLiveTypeCASSInputAddress
	 */
	public $CASSInputAddress;
	/**
	 * The NCOAMatch
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SONcoaLiveTypeNCOAMatch
	 */
	public $NCOAMatch;
	/**
	 * The Diagnostics
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SONcoaLiveTypeDiagnosticsFields
	 */
	public $Diagnostics;
	/**
	 * The Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SONcoaLiveTypeError
	 */
	public $Error;
	/**
	 * The JobId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $JobId;
	/**
	 * Constructor
	 * @param string NameIn
	 * @param SONcoaLiveTypeRawInputAddress RawInputAddress
	 * @param SONcoaLiveTypeCASSInputAddress CASSInputAddress
	 * @param SONcoaLiveTypeNCOAMatch NCOAMatch
	 * @param SONcoaLiveTypeDiagnosticsFields Diagnostics
	 * @param SONcoaLiveTypeError Error
	 * @param string JobId
	 * @return SONcoaLiveTypeNCOAResult
	 */
	public function __construct($_NameIn = null,$_RawInputAddress = null,$_CASSInputAddress = null,$_NCOAMatch = null,$_Diagnostics = null,$_Error = null,$_JobId = null)
	{
		parent::__construct(array('NameIn'=>$_NameIn,'RawInputAddress'=>$_RawInputAddress,'CASSInputAddress'=>$_CASSInputAddress,'NCOAMatch'=>$_NCOAMatch,'Diagnostics'=>$_Diagnostics,'Error'=>$_Error,'JobId'=>$_JobId));
	}
	/**
	 * Set NameIn
	 * @param string NameIn
	 * @return string
	 */
	public function setNameIn($_NameIn)
	{
		return ($this->NameIn = $_NameIn);
	}
	/**
	 * Get NameIn
	 * @return string
	 */
	public function getNameIn()
	{
		return $this->NameIn;
	}
	/**
	 * Set RawInputAddress
	 * @param RawInputAddress RawInputAddress
	 * @return RawInputAddress
	 */
	public function setRawInputAddress($_RawInputAddress)
	{
		return ($this->RawInputAddress = $_RawInputAddress);
	}
	/**
	 * Get RawInputAddress
	 * @return SONcoaLiveTypeRawInputAddress
	 */
	public function getRawInputAddress()
	{
		return $this->RawInputAddress;
	}
	/**
	 * Set CASSInputAddress
	 * @param CASSInputAddress CASSInputAddress
	 * @return CASSInputAddress
	 */
	public function setCASSInputAddress($_CASSInputAddress)
	{
		return ($this->CASSInputAddress = $_CASSInputAddress);
	}
	/**
	 * Get CASSInputAddress
	 * @return SONcoaLiveTypeCASSInputAddress
	 */
	public function getCASSInputAddress()
	{
		return $this->CASSInputAddress;
	}
	/**
	 * Set NCOAMatch
	 * @param NCOAMatch NCOAMatch
	 * @return NCOAMatch
	 */
	public function setNCOAMatch($_NCOAMatch)
	{
		return ($this->NCOAMatch = $_NCOAMatch);
	}
	/**
	 * Get NCOAMatch
	 * @return SONcoaLiveTypeNCOAMatch
	 */
	public function getNCOAMatch()
	{
		return $this->NCOAMatch;
	}
	/**
	 * Set Diagnostics
	 * @param DiagnosticsFields Diagnostics
	 * @return DiagnosticsFields
	 */
	public function setDiagnostics($_Diagnostics)
	{
		return ($this->Diagnostics = $_Diagnostics);
	}
	/**
	 * Get Diagnostics
	 * @return SONcoaLiveTypeDiagnosticsFields
	 */
	public function getDiagnostics()
	{
		return $this->Diagnostics;
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
	 * @return SONcoaLiveTypeError
	 */
	public function getError()
	{
		return $this->Error;
	}
	/**
	 * Set JobId
	 * @param string JobId
	 * @return string
	 */
	public function setJobId($_JobId)
	{
		return ($this->JobId = $_JobId);
	}
	/**
	 * Get JobId
	 * @return string
	 */
	public function getJobId()
	{
		return $this->JobId;
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