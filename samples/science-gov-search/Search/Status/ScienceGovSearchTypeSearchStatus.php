<?php
/**
 * Class file for ScienceGovSearchTypeSearchStatus
 * @date 13/10/2012
 */
/**
 * Class ScienceGovSearchTypeSearchStatus
 * @date 13/10/2012
 */
class ScienceGovSearchTypeSearchStatus extends ScienceGovSearchWsdlClass
{
	/**
	 * The deepRankItems
	 * @var int
	 */
	public $deepRankItems;
	/**
	 * The errorMessage
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $errorMessage;
	/**
	 * The errorMessageDetails
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $errorMessageDetails;
	/**
	 * The failedCollectionCodeDetails
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var ScienceGovSearchTypeStringStringEntry
	 */
	public $failedCollectionCodeDetails;
	/**
	 * The failedCollectionDetails
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var ScienceGovSearchTypeStringStringEntry
	 */
	public $failedCollectionDetails;
	/**
	 * The itemsProcessed
	 * @var int
	 */
	public $itemsProcessed;
	/**
	 * The restartable
	 * @var boolean
	 */
	public $restartable;
	/**
	 * The restarted
	 * @var boolean
	 */
	public $restarted;
	/**
	 * The resultCountsByCode
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var ScienceGovSearchTypeStringIntEntry
	 */
	public $resultCountsByCode;
	/**
	 * The searchFinished
	 * @var boolean
	 */
	public $searchFinished;
	/**
	 * The searchId
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $searchId;
	/**
	 * The timeElapsed
	 * Meta informations :
	 * 	- nillable : true
	 * @var long
	 */
	public $timeElapsed;
	/**
	 * The totalCollectionCodeCounts
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var ScienceGovSearchTypeStringIntEntry
	 */
	public $totalCollectionCodeCounts;
	/**
	 * The totalCollectionCodes
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $totalCollectionCodes;
	/**
	 * The totalCompletedCodes
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $totalCompletedCodes;
	/**
	 * The totalContinuationCodes
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $totalContinuationCodes;
	/**
	 * The totalFailedCodes
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $totalFailedCodes;
	/**
	 * The totalFilteredResults
	 * Meta informations :
	 * 	- nillable : true
	 * @var int
	 */
	public $totalFilteredResults;
	/**
	 * The totalHaltedCodes
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $totalHaltedCodes;
	/**
	 * The collectionResponseTimes
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var ScienceGovSearchTypeStringIntEntry
	 */
	public $collectionResponseTimes;
	/**
	 * Constructor
	 * @param int deepRankItems
	 * @param string errorMessage
	 * @param string errorMessageDetails
	 * @param ScienceGovSearchTypeStringStringEntry failedCollectionCodeDetails
	 * @param ScienceGovSearchTypeStringStringEntry failedCollectionDetails
	 * @param int itemsProcessed
	 * @param boolean restartable
	 * @param boolean restarted
	 * @param ScienceGovSearchTypeStringIntEntry resultCountsByCode
	 * @param boolean searchFinished
	 * @param string searchId
	 * @param long timeElapsed
	 * @param ScienceGovSearchTypeStringIntEntry totalCollectionCodeCounts
	 * @param string totalCollectionCodes
	 * @param string totalCompletedCodes
	 * @param string totalContinuationCodes
	 * @param string totalFailedCodes
	 * @param int totalFilteredResults
	 * @param string totalHaltedCodes
	 * @param ScienceGovSearchTypeStringIntEntry collectionResponseTimes
	 * @return ScienceGovSearchTypeSearchStatus
	 */
	public function __construct($_deepRankItems = null,$_errorMessage = null,$_errorMessageDetails = null,$_failedCollectionCodeDetails = null,$_failedCollectionDetails = null,$_itemsProcessed = null,$_restartable = null,$_restarted = null,$_resultCountsByCode = null,$_searchFinished = null,$_searchId = null,$_timeElapsed = null,$_totalCollectionCodeCounts = null,$_totalCollectionCodes = null,$_totalCompletedCodes = null,$_totalContinuationCodes = null,$_totalFailedCodes = null,$_totalFilteredResults = null,$_totalHaltedCodes = null,$_collectionResponseTimes = null)
	{
		parent::__construct(array('deepRankItems'=>$_deepRankItems,'errorMessage'=>$_errorMessage,'errorMessageDetails'=>$_errorMessageDetails,'failedCollectionCodeDetails'=>$_failedCollectionCodeDetails,'failedCollectionDetails'=>$_failedCollectionDetails,'itemsProcessed'=>$_itemsProcessed,'restartable'=>$_restartable,'restarted'=>$_restarted,'resultCountsByCode'=>$_resultCountsByCode,'searchFinished'=>$_searchFinished,'searchId'=>$_searchId,'timeElapsed'=>$_timeElapsed,'totalCollectionCodeCounts'=>$_totalCollectionCodeCounts,'totalCollectionCodes'=>$_totalCollectionCodes,'totalCompletedCodes'=>$_totalCompletedCodes,'totalContinuationCodes'=>$_totalContinuationCodes,'totalFailedCodes'=>$_totalFailedCodes,'totalFilteredResults'=>$_totalFilteredResults,'totalHaltedCodes'=>$_totalHaltedCodes,'collectionResponseTimes'=>$_collectionResponseTimes));
	}
	/**
	 * Set deepRankItems
	 * @param int deepRankItems
	 * @return int
	 */
	public function setDeepRankItems($_deepRankItems)
	{
		return ($this->deepRankItems = $_deepRankItems);
	}
	/**
	 * Get deepRankItems
	 * @return int
	 */
	public function getDeepRankItems()
	{
		return $this->deepRankItems;
	}
	/**
	 * Set errorMessage
	 * @param string errorMessage
	 * @return string
	 */
	public function setErrorMessage($_errorMessage)
	{
		return ($this->errorMessage = $_errorMessage);
	}
	/**
	 * Get errorMessage
	 * @return string
	 */
	public function getErrorMessage()
	{
		return $this->errorMessage;
	}
	/**
	 * Set errorMessageDetails
	 * @param string errorMessageDetails
	 * @return string
	 */
	public function setErrorMessageDetails($_errorMessageDetails)
	{
		return ($this->errorMessageDetails = $_errorMessageDetails);
	}
	/**
	 * Get errorMessageDetails
	 * @return string
	 */
	public function getErrorMessageDetails()
	{
		return $this->errorMessageDetails;
	}
	/**
	 * Set failedCollectionCodeDetails
	 * @param StringStringEntry failedCollectionCodeDetails
	 * @return StringStringEntry
	 */
	public function setFailedCollectionCodeDetails($_failedCollectionCodeDetails)
	{
		return ($this->failedCollectionCodeDetails = $_failedCollectionCodeDetails);
	}
	/**
	 * Get failedCollectionCodeDetails
	 * @return ScienceGovSearchTypeStringStringEntry
	 */
	public function getFailedCollectionCodeDetails()
	{
		return $this->failedCollectionCodeDetails;
	}
	/**
	 * Set failedCollectionDetails
	 * @param StringStringEntry failedCollectionDetails
	 * @return StringStringEntry
	 */
	public function setFailedCollectionDetails($_failedCollectionDetails)
	{
		return ($this->failedCollectionDetails = $_failedCollectionDetails);
	}
	/**
	 * Get failedCollectionDetails
	 * @return ScienceGovSearchTypeStringStringEntry
	 */
	public function getFailedCollectionDetails()
	{
		return $this->failedCollectionDetails;
	}
	/**
	 * Set itemsProcessed
	 * @param int itemsProcessed
	 * @return int
	 */
	public function setItemsProcessed($_itemsProcessed)
	{
		return ($this->itemsProcessed = $_itemsProcessed);
	}
	/**
	 * Get itemsProcessed
	 * @return int
	 */
	public function getItemsProcessed()
	{
		return $this->itemsProcessed;
	}
	/**
	 * Set restartable
	 * @param boolean restartable
	 * @return boolean
	 */
	public function setRestartable($_restartable)
	{
		return ($this->restartable = $_restartable);
	}
	/**
	 * Get restartable
	 * @return boolean
	 */
	public function getRestartable()
	{
		return $this->restartable;
	}
	/**
	 * Set restarted
	 * @param boolean restarted
	 * @return boolean
	 */
	public function setRestarted($_restarted)
	{
		return ($this->restarted = $_restarted);
	}
	/**
	 * Get restarted
	 * @return boolean
	 */
	public function getRestarted()
	{
		return $this->restarted;
	}
	/**
	 * Set resultCountsByCode
	 * @param StringIntEntry resultCountsByCode
	 * @return StringIntEntry
	 */
	public function setResultCountsByCode($_resultCountsByCode)
	{
		return ($this->resultCountsByCode = $_resultCountsByCode);
	}
	/**
	 * Get resultCountsByCode
	 * @return ScienceGovSearchTypeStringIntEntry
	 */
	public function getResultCountsByCode()
	{
		return $this->resultCountsByCode;
	}
	/**
	 * Set searchFinished
	 * @param boolean searchFinished
	 * @return boolean
	 */
	public function setSearchFinished($_searchFinished)
	{
		return ($this->searchFinished = $_searchFinished);
	}
	/**
	 * Get searchFinished
	 * @return boolean
	 */
	public function getSearchFinished()
	{
		return $this->searchFinished;
	}
	/**
	 * Set searchId
	 * @param string searchId
	 * @return string
	 */
	public function setSearchId($_searchId)
	{
		return ($this->searchId = $_searchId);
	}
	/**
	 * Get searchId
	 * @return string
	 */
	public function getSearchId()
	{
		return $this->searchId;
	}
	/**
	 * Set timeElapsed
	 * @param long timeElapsed
	 * @return long
	 */
	public function setTimeElapsed($_timeElapsed)
	{
		return ($this->timeElapsed = $_timeElapsed);
	}
	/**
	 * Get timeElapsed
	 * @return long
	 */
	public function getTimeElapsed()
	{
		return $this->timeElapsed;
	}
	/**
	 * Set totalCollectionCodeCounts
	 * @param StringIntEntry totalCollectionCodeCounts
	 * @return StringIntEntry
	 */
	public function setTotalCollectionCodeCounts($_totalCollectionCodeCounts)
	{
		return ($this->totalCollectionCodeCounts = $_totalCollectionCodeCounts);
	}
	/**
	 * Get totalCollectionCodeCounts
	 * @return ScienceGovSearchTypeStringIntEntry
	 */
	public function getTotalCollectionCodeCounts()
	{
		return $this->totalCollectionCodeCounts;
	}
	/**
	 * Set totalCollectionCodes
	 * @param string totalCollectionCodes
	 * @return string
	 */
	public function setTotalCollectionCodes($_totalCollectionCodes)
	{
		return ($this->totalCollectionCodes = $_totalCollectionCodes);
	}
	/**
	 * Get totalCollectionCodes
	 * @return string
	 */
	public function getTotalCollectionCodes()
	{
		return $this->totalCollectionCodes;
	}
	/**
	 * Set totalCompletedCodes
	 * @param string totalCompletedCodes
	 * @return string
	 */
	public function setTotalCompletedCodes($_totalCompletedCodes)
	{
		return ($this->totalCompletedCodes = $_totalCompletedCodes);
	}
	/**
	 * Get totalCompletedCodes
	 * @return string
	 */
	public function getTotalCompletedCodes()
	{
		return $this->totalCompletedCodes;
	}
	/**
	 * Set totalContinuationCodes
	 * @param string totalContinuationCodes
	 * @return string
	 */
	public function setTotalContinuationCodes($_totalContinuationCodes)
	{
		return ($this->totalContinuationCodes = $_totalContinuationCodes);
	}
	/**
	 * Get totalContinuationCodes
	 * @return string
	 */
	public function getTotalContinuationCodes()
	{
		return $this->totalContinuationCodes;
	}
	/**
	 * Set totalFailedCodes
	 * @param string totalFailedCodes
	 * @return string
	 */
	public function setTotalFailedCodes($_totalFailedCodes)
	{
		return ($this->totalFailedCodes = $_totalFailedCodes);
	}
	/**
	 * Get totalFailedCodes
	 * @return string
	 */
	public function getTotalFailedCodes()
	{
		return $this->totalFailedCodes;
	}
	/**
	 * Set totalFilteredResults
	 * @param int totalFilteredResults
	 * @return int
	 */
	public function setTotalFilteredResults($_totalFilteredResults)
	{
		return ($this->totalFilteredResults = $_totalFilteredResults);
	}
	/**
	 * Get totalFilteredResults
	 * @return int
	 */
	public function getTotalFilteredResults()
	{
		return $this->totalFilteredResults;
	}
	/**
	 * Set totalHaltedCodes
	 * @param string totalHaltedCodes
	 * @return string
	 */
	public function setTotalHaltedCodes($_totalHaltedCodes)
	{
		return ($this->totalHaltedCodes = $_totalHaltedCodes);
	}
	/**
	 * Get totalHaltedCodes
	 * @return string
	 */
	public function getTotalHaltedCodes()
	{
		return $this->totalHaltedCodes;
	}
	/**
	 * Set collectionResponseTimes
	 * @param StringIntEntry collectionResponseTimes
	 * @return StringIntEntry
	 */
	public function setCollectionResponseTimes($_collectionResponseTimes)
	{
		return ($this->collectionResponseTimes = $_collectionResponseTimes);
	}
	/**
	 * Get collectionResponseTimes
	 * @return ScienceGovSearchTypeStringIntEntry
	 */
	public function getCollectionResponseTimes()
	{
		return $this->collectionResponseTimes;
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