<?php
/**
 * Class file for XiEdgarTypeMasterDocumentsResult
 * @date 08/07/2012
 */
/**
 * Class XiEdgarTypeMasterDocumentsResult
 * @date 08/07/2012
 */
class XiEdgarTypeMasterDocumentsResult extends XiEdgarTypeCommon
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
	 * The Documents
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEdgarTypeArrayOfMasterDocument
	 */
	public $Documents;
	/**
	 * Constructor
	 * @param XiEdgarTypeSecurity Security
	 * @param XiEdgarTypeArrayOfMasterDocument Documents
	 * @return XiEdgarTypeMasterDocumentsResult
	 */
	public function __construct($_Security = null,$_Documents = null)
	{
		XiEdgarWsdlClass::__construct(array('Security'=>$_Security,'Documents'=>new XiEdgarTypeArrayOfMasterDocument($_Documents)));
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
	 * Set Documents
	 * @param ArrayOfMasterDocument Documents
	 * @return ArrayOfMasterDocument
	 */
	public function setDocuments($_Documents)
	{
		return ($this->Documents = $_Documents);
	}
	/**
	 * Get Documents
	 * @return XiEdgarTypeArrayOfMasterDocument
	 */
	public function getDocuments()
	{
		return $this->Documents;
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