<?php
/**
 * Class file for XiEdgarTypeManagementOwnership
 * @date 08/07/2012
 */
/**
 * Class XiEdgarTypeManagementOwnership
 * @date 08/07/2012
 */
class XiEdgarTypeManagementOwnership extends XiEdgarTypeCommon
{
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEdgarTypeSecurity
	 */
	public $Security;
	/**
	 * The Source
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Source;
	/**
	 * The SourceDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SourceDate;
	/**
	 * The SourceUrl
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SourceUrl;
	/**
	 * The SourceType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SourceType;
	/**
	 * The ManagementShares
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $ManagementShares;
	/**
	 * The ManagementPercent
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $ManagementPercent;
	/**
	 * The ValueDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ValueDate;
	/**
	 * Constructor
	 * @param XiEdgarTypeSecurity Security
	 * @param string Source
	 * @param string SourceDate
	 * @param string SourceUrl
	 * @param string SourceType
	 * @param double ManagementShares
	 * @param double ManagementPercent
	 * @param string ValueDate
	 * @return XiEdgarTypeManagementOwnership
	 */
	public function __construct($_Security = null,$_Source = null,$_SourceDate = null,$_SourceUrl = null,$_SourceType = null,$_ManagementShares,$_ManagementPercent,$_ValueDate = null)
	{
		XiEdgarWsdlClass::__construct(array('Security'=>$_Security,'Source'=>$_Source,'SourceDate'=>$_SourceDate,'SourceUrl'=>$_SourceUrl,'SourceType'=>$_SourceType,'ManagementShares'=>$_ManagementShares,'ManagementPercent'=>$_ManagementPercent,'ValueDate'=>$_ValueDate));
	}
	/**
	 * Set Security
	 * @param Security Security
	 * @return Security
	 */
	public function setSecurity($_Security)
	{
		return ($this->Security = $_Security);
	}
	/**
	 * Get Security
	 * @return XiEdgarTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
	}
	/**
	 * Set Source
	 * @param string Source
	 * @return string
	 */
	public function setSource($_Source)
	{
		return ($this->Source = $_Source);
	}
	/**
	 * Get Source
	 * @return string
	 */
	public function getSource()
	{
		return $this->Source;
	}
	/**
	 * Set SourceDate
	 * @param string SourceDate
	 * @return string
	 */
	public function setSourceDate($_SourceDate)
	{
		return ($this->SourceDate = $_SourceDate);
	}
	/**
	 * Get SourceDate
	 * @return string
	 */
	public function getSourceDate()
	{
		return $this->SourceDate;
	}
	/**
	 * Set SourceUrl
	 * @param string SourceUrl
	 * @return string
	 */
	public function setSourceUrl($_SourceUrl)
	{
		return ($this->SourceUrl = $_SourceUrl);
	}
	/**
	 * Get SourceUrl
	 * @return string
	 */
	public function getSourceUrl()
	{
		return $this->SourceUrl;
	}
	/**
	 * Set SourceType
	 * @param string SourceType
	 * @return string
	 */
	public function setSourceType($_SourceType)
	{
		return ($this->SourceType = $_SourceType);
	}
	/**
	 * Get SourceType
	 * @return string
	 */
	public function getSourceType()
	{
		return $this->SourceType;
	}
	/**
	 * Set ManagementShares
	 * @param double ManagementShares
	 * @return double
	 */
	public function setManagementShares($_ManagementShares)
	{
		return ($this->ManagementShares = $_ManagementShares);
	}
	/**
	 * Get ManagementShares
	 * @return double
	 */
	public function getManagementShares()
	{
		return $this->ManagementShares;
	}
	/**
	 * Set ManagementPercent
	 * @param double ManagementPercent
	 * @return double
	 */
	public function setManagementPercent($_ManagementPercent)
	{
		return ($this->ManagementPercent = $_ManagementPercent);
	}
	/**
	 * Get ManagementPercent
	 * @return double
	 */
	public function getManagementPercent()
	{
		return $this->ManagementPercent;
	}
	/**
	 * Set ValueDate
	 * @param string ValueDate
	 * @return string
	 */
	public function setValueDate($_ValueDate)
	{
		return ($this->ValueDate = $_ValueDate);
	}
	/**
	 * Get ValueDate
	 * @return string
	 */
	public function getValueDate()
	{
		return $this->ValueDate;
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