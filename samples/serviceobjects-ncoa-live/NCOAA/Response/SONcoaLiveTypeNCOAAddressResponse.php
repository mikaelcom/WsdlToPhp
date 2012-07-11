<?php
/**
 * Class file for SONcoaLiveTypeNCOAAddressResponse
 * @date 06/07/2012
 */
/**
 * Class SONcoaLiveTypeNCOAAddressResponse
 * @date 06/07/2012
 */
class SONcoaLiveTypeNCOAAddressResponse extends SONcoaLiveWsdlClass
{
	/**
	 * The NCOAResultItem
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SONcoaLiveTypeArrayOfNCOAResult
	 */
	public $NCOAResultItem;
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
	 * @param SONcoaLiveTypeArrayOfNCOAResult NCOAResultItem
	 * @param SONcoaLiveTypeError Error
	 * @param string JobId
	 * @return SONcoaLiveTypeNCOAAddressResponse
	 */
	public function __construct($_NCOAResultItem = null,$_Error = null,$_JobId = null)
	{
		parent::__construct(array('NCOAResultItem'=>new SONcoaLiveTypeArrayOfNCOAResult($_NCOAResultItem),'Error'=>$_Error,'JobId'=>$_JobId));
	}
	/**
	 * Set NCOAResultItem
	 * @param ArrayOfNCOAResult NCOAResultItem
	 * @return ArrayOfNCOAResult
	 */
	public function setNCOAResultItem($_NCOAResultItem)
	{
		return ($this->NCOAResultItem = $_NCOAResultItem);
	}
	/**
	 * Get NCOAResultItem
	 * @return SONcoaLiveTypeArrayOfNCOAResult
	 */
	public function getNCOAResultItem()
	{
		return $this->NCOAResultItem;
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