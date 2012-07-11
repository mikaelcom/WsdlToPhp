<?php
/**
 * Class file for BingTypePhonebookResponse
 * @date 02/07/2012
 */
/**
 * Class BingTypePhonebookResponse
 * @date 02/07/2012
 */
class BingTypePhonebookResponse extends BingWsdlClass
{
	/**
	 * The Total
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var unsignedInt
	 */
	public $Total;
	/**
	 * The Offset
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var unsignedInt
	 */
	public $Offset;
	/**
	 * The LocalSerpUrl
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $LocalSerpUrl;
	/**
	 * The Title
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Title;
	/**
	 * The Results
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var BingTypeArrayOfPhonebookResult
	 */
	public $Results;
	/**
	 * Constructor
	 * @param unsignedInt Total
	 * @param unsignedInt Offset
	 * @param string LocalSerpUrl
	 * @param string Title
	 * @param BingTypeArrayOfPhonebookResult Results
	 * @return BingTypePhonebookResponse
	 */
	public function __construct($_Total = null,$_Offset = null,$_LocalSerpUrl = null,$_Title = null,$_Results = null)
	{
		parent::__construct(array('Total'=>$_Total,'Offset'=>$_Offset,'LocalSerpUrl'=>$_LocalSerpUrl,'Title'=>$_Title,'Results'=>new BingTypeArrayOfPhonebookResult($_Results)));
	}
	/**
	 * Set Total
	 * @param unsignedInt Total
	 * @return unsignedInt
	 */
	public function setTotal($_Total)
	{
		return ($this->Total = $_Total);
	}
	/**
	 * Get Total
	 * @return unsignedInt
	 */
	public function getTotal()
	{
		return $this->Total;
	}
	/**
	 * Set Offset
	 * @param unsignedInt Offset
	 * @return unsignedInt
	 */
	public function setOffset($_Offset)
	{
		return ($this->Offset = $_Offset);
	}
	/**
	 * Get Offset
	 * @return unsignedInt
	 */
	public function getOffset()
	{
		return $this->Offset;
	}
	/**
	 * Set LocalSerpUrl
	 * @param string LocalSerpUrl
	 * @return string
	 */
	public function setLocalSerpUrl($_LocalSerpUrl)
	{
		return ($this->LocalSerpUrl = $_LocalSerpUrl);
	}
	/**
	 * Get LocalSerpUrl
	 * @return string
	 */
	public function getLocalSerpUrl()
	{
		return $this->LocalSerpUrl;
	}
	/**
	 * Set Title
	 * @param string Title
	 * @return string
	 */
	public function setTitle($_Title)
	{
		return ($this->Title = $_Title);
	}
	/**
	 * Get Title
	 * @return string
	 */
	public function getTitle()
	{
		return $this->Title;
	}
	/**
	 * Set Results
	 * @param ArrayOfPhonebookResult Results
	 * @return ArrayOfPhonebookResult
	 */
	public function setResults($_Results)
	{
		return ($this->Results = $_Results);
	}
	/**
	 * Get Results
	 * @return BingTypeArrayOfPhonebookResult
	 */
	public function getResults()
	{
		return $this->Results;
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