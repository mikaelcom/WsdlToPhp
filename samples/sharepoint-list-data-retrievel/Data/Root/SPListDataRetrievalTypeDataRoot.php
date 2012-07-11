<?php
/**
 * Class file for SPListDataRetrievalTypeDataRoot
 * @date 06/07/2012
 */
/**
 * Class SPListDataRetrievalTypeDataRoot
 * @date 06/07/2012
 */
class SPListDataRetrievalTypeDataRoot extends SPListDataRetrievalWsdlClass
{
	/**
	 * The root
	 * @var string
	 */
	public $root;
	/**
	 * The allowRemoteDataAccess
	 * @var boolean
	 */
	public $allowRemoteDataAccess;
	/**
	 * Constructor
	 * @param string root
	 * @param boolean allowRemoteDataAccess
	 * @return SPListDataRetrievalTypeDataRoot
	 */
	public function __construct($_root = null,$_allowRemoteDataAccess = null)
	{
		parent::__construct(array('root'=>$_root,'allowRemoteDataAccess'=>$_allowRemoteDataAccess));
	}
	/**
	 * Set root
	 * @param string root
	 * @return string
	 */
	public function setRoot($_root)
	{
		return ($this->root = $_root);
	}
	/**
	 * Get root
	 * @return string
	 */
	public function getRoot()
	{
		return $this->root;
	}
	/**
	 * Set allowRemoteDataAccess
	 * @param boolean allowRemoteDataAccess
	 * @return boolean
	 */
	public function setAllowRemoteDataAccess($_allowRemoteDataAccess)
	{
		return ($this->allowRemoteDataAccess = $_allowRemoteDataAccess);
	}
	/**
	 * Get allowRemoteDataAccess
	 * @return boolean
	 */
	public function getAllowRemoteDataAccess()
	{
		return $this->allowRemoteDataAccess;
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