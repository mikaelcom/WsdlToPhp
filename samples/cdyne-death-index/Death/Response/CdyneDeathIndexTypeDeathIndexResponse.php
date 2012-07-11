<?php
/**
 * Class file for CdyneDeathIndexTypeDeathIndexResponse
 * @date 03/07/2012
 */
/**
 * Class CdyneDeathIndexTypeDeathIndexResponse
 * @date 03/07/2012
 */
class CdyneDeathIndexTypeDeathIndexResponse extends CdyneDeathIndexWsdlClass
{
	/**
	 * The DeceasedList
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var CdyneDeathIndexTypeArrayOfDeceasedInfo
	 */
	public $DeceasedList;
	/**
	 * The ErrorText
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $ErrorText;
	/**
	 * The ReturnCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var int
	 */
	public $ReturnCode;
	/**
	 * Constructor
	 * @param CdyneDeathIndexTypeArrayOfDeceasedInfo DeceasedList
	 * @param string ErrorText
	 * @param int ReturnCode
	 * @return CdyneDeathIndexTypeDeathIndexResponse
	 */
	public function __construct($_DeceasedList = null,$_ErrorText = null,$_ReturnCode = null)
	{
		parent::__construct(array('DeceasedList'=>new CdyneDeathIndexTypeArrayOfDeceasedInfo($_DeceasedList),'ErrorText'=>$_ErrorText,'ReturnCode'=>$_ReturnCode));
	}
	/**
	 * Set DeceasedList
	 * @param ArrayOfDeceasedInfo DeceasedList
	 * @return ArrayOfDeceasedInfo
	 */
	public function setDeceasedList($_DeceasedList)
	{
		return ($this->DeceasedList = $_DeceasedList);
	}
	/**
	 * Get DeceasedList
	 * @return CdyneDeathIndexTypeArrayOfDeceasedInfo
	 */
	public function getDeceasedList()
	{
		return $this->DeceasedList;
	}
	/**
	 * Set ErrorText
	 * @param string ErrorText
	 * @return string
	 */
	public function setErrorText($_ErrorText)
	{
		return ($this->ErrorText = $_ErrorText);
	}
	/**
	 * Get ErrorText
	 * @return string
	 */
	public function getErrorText()
	{
		return $this->ErrorText;
	}
	/**
	 * Set ReturnCode
	 * @param int ReturnCode
	 * @return int
	 */
	public function setReturnCode($_ReturnCode)
	{
		return ($this->ReturnCode = $_ReturnCode);
	}
	/**
	 * Get ReturnCode
	 * @return int
	 */
	public function getReturnCode()
	{
		return $this->ReturnCode;
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