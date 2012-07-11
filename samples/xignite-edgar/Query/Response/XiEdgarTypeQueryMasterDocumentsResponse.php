<?php
/**
 * Class file for XiEdgarTypeQueryMasterDocumentsResponse
 * @date 08/07/2012
 */
/**
 * Class XiEdgarTypeQueryMasterDocumentsResponse
 * @date 08/07/2012
 */
class XiEdgarTypeQueryMasterDocumentsResponse extends XiEdgarWsdlClass
{
	/**
	 * The QueryMasterDocumentsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEdgarTypeMasterDocumentsResult
	 */
	public $QueryMasterDocumentsResult;
	/**
	 * Constructor
	 * @param XiEdgarTypeMasterDocumentsResult QueryMasterDocumentsResult
	 * @return XiEdgarTypeQueryMasterDocumentsResponse
	 */
	public function __construct($_QueryMasterDocumentsResult = null)
	{
		parent::__construct(array('QueryMasterDocumentsResult'=>$_QueryMasterDocumentsResult));
	}
	/**
	 * Set QueryMasterDocumentsResult
	 * @param MasterDocumentsResult QueryMasterDocumentsResult
	 * @return MasterDocumentsResult
	 */
	public function setQueryMasterDocumentsResult($_QueryMasterDocumentsResult)
	{
		return ($this->QueryMasterDocumentsResult = $_QueryMasterDocumentsResult);
	}
	/**
	 * Get QueryMasterDocumentsResult
	 * @return XiEdgarTypeMasterDocumentsResult
	 */
	public function getQueryMasterDocumentsResult()
	{
		return $this->QueryMasterDocumentsResult;
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