<?php
/**
 * Class file for XiIndicesTypeIndexQuotes
 * @date 08/07/2012
 */
/**
 * Class XiIndicesTypeIndexQuotes
 * @date 08/07/2012
 */
class XiIndicesTypeIndexQuotes extends XiIndicesTypeCommon
{
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiIndicesTypeSecurity
	 */
	public $Security;
	/**
	 * The StartDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StartDate;
	/**
	 * The EndDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EndDate;
	/**
	 * The Indices
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiIndicesTypeArrayOfIndexQuote
	 */
	public $Indices;
	/**
	 * Constructor
	 * @param XiIndicesTypeSecurity Security
	 * @param string StartDate
	 * @param string EndDate
	 * @param XiIndicesTypeArrayOfIndexQuote Indices
	 * @return XiIndicesTypeIndexQuotes
	 */
	public function __construct($_Security = null,$_StartDate = null,$_EndDate = null,$_Indices = null)
	{
		XiIndicesWsdlClass::__construct(array('Security'=>$_Security,'StartDate'=>$_StartDate,'EndDate'=>$_EndDate,'Indices'=>new XiIndicesTypeArrayOfIndexQuote($_Indices)));
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
	 * @return XiIndicesTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
	}
	/**
	 * Set StartDate
	 * @param string StartDate
	 * @return string
	 */
	public function setStartDate($_StartDate)
	{
		return ($this->StartDate = $_StartDate);
	}
	/**
	 * Get StartDate
	 * @return string
	 */
	public function getStartDate()
	{
		return $this->StartDate;
	}
	/**
	 * Set EndDate
	 * @param string EndDate
	 * @return string
	 */
	public function setEndDate($_EndDate)
	{
		return ($this->EndDate = $_EndDate);
	}
	/**
	 * Get EndDate
	 * @return string
	 */
	public function getEndDate()
	{
		return $this->EndDate;
	}
	/**
	 * Set Indices
	 * @param ArrayOfIndexQuote Indices
	 * @return ArrayOfIndexQuote
	 */
	public function setIndices($_Indices)
	{
		return ($this->Indices = $_Indices);
	}
	/**
	 * Get Indices
	 * @return XiIndicesTypeArrayOfIndexQuote
	 */
	public function getIndices()
	{
		return $this->Indices;
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