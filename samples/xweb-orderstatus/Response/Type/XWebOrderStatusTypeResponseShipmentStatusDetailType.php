<?php
/**
 * Class file for XWebOrderStatusTypeResponseShipmentStatusDetailType
 * @date 09/07/2012
 */
/**
 * Class XWebOrderStatusTypeResponseShipmentStatusDetailType
 * @date 09/07/2012
 */
class XWebOrderStatusTypeResponseShipmentStatusDetailType extends XWebOrderStatusWsdlClass
{
	/**
	 * The PurposeCode
	 * @var PurposeCode
	 */
	public $PurposeCode;
	/**
	 * The RefInfo
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 3
	 * @var XWebOrderStatusTypeResponseRefInfoType
	 */
	public $RefInfo;
	/**
	 * The ErrorInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var XWebOrderStatusTypeResponseErrorInfoType
	 */
	public $ErrorInfo;
	/**
	 * The ContainerInfo
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : unbounded
	 * @var XWebOrderStatusTypeResponseContainerInfoType
	 */
	public $ContainerInfo;
	/**
	 * Constructor
	 * @param PurposeCode PurposeCode
	 * @param XWebOrderStatusTypeResponseRefInfoType RefInfo
	 * @param XWebOrderStatusTypeResponseErrorInfoType ErrorInfo
	 * @param XWebOrderStatusTypeResponseContainerInfoType ContainerInfo
	 * @return XWebOrderStatusTypeResponseShipmentStatusDetailType
	 */
	public function __construct($_PurposeCode = null,$_RefInfo,$_ErrorInfo = null,$_ContainerInfo)
	{
		parent::__construct(array('PurposeCode'=>$_PurposeCode,'RefInfo'=>$_RefInfo,'ErrorInfo'=>$_ErrorInfo,'ContainerInfo'=>$_ContainerInfo));
	}
	/**
	 * Set PurposeCode
	 * @param PurposeCode PurposeCode
	 * @return PurposeCode
	 */
	public function setPurposeCode($_PurposeCode)
	{
		return ($this->PurposeCode = $_PurposeCode);
	}
	/**
	 * Get PurposeCode
	 * @return PurposeCode
	 */
	public function getPurposeCode()
	{
		return $this->PurposeCode;
	}
	/**
	 * Set RefInfo
	 * @param ResponseRefInfoType RefInfo
	 * @return ResponseRefInfoType
	 */
	public function setRefInfo($_RefInfo)
	{
		return ($this->RefInfo = $_RefInfo);
	}
	/**
	 * Get RefInfo
	 * @return XWebOrderStatusTypeResponseRefInfoType
	 */
	public function getRefInfo()
	{
		return $this->RefInfo;
	}
	/**
	 * Set ErrorInfo
	 * @param ResponseErrorInfoType ErrorInfo
	 * @return ResponseErrorInfoType
	 */
	public function setErrorInfo($_ErrorInfo)
	{
		return ($this->ErrorInfo = $_ErrorInfo);
	}
	/**
	 * Get ErrorInfo
	 * @return XWebOrderStatusTypeResponseErrorInfoType
	 */
	public function getErrorInfo()
	{
		return $this->ErrorInfo;
	}
	/**
	 * Set ContainerInfo
	 * @param ResponseContainerInfoType ContainerInfo
	 * @return ResponseContainerInfoType
	 */
	public function setContainerInfo($_ContainerInfo)
	{
		return ($this->ContainerInfo = $_ContainerInfo);
	}
	/**
	 * Get ContainerInfo
	 * @return XWebOrderStatusTypeResponseContainerInfoType
	 */
	public function getContainerInfo()
	{
		return $this->ContainerInfo;
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