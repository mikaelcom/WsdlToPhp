<?php
/**
 * Class file for YMailTypeFlag
 * @date 02/07/2012
 */
/**
 * Class YMailTypeFlag
 * @date 02/07/2012
 */
class YMailTypeFlag extends YMailWsdlClass
{
	/**
	 * The isReplied
	 * Meta informations :
	 * 	- default : -1
	 * @var int
	 */
	public $isReplied;
	/**
	 * The isFlagged
	 * Meta informations :
	 * 	- default : -1
	 * @var int
	 */
	public $isFlagged;
	/**
	 * The isRead
	 * Meta informations :
	 * 	- default : -1
	 * @var int
	 */
	public $isRead;
	/**
	 * The isDraft
	 * Meta informations :
	 * 	- default : -1
	 * @var int
	 */
	public $isDraft;
	/**
	 * The isForwarded
	 * Meta informations :
	 * 	- default : -1
	 * @var int
	 */
	public $isForwarded;
	/**
	 * The isHam
	 * Meta informations :
	 * 	- default : -1
	 * @var int
	 */
	public $isHam;
	/**
	 * The isSpam
	 * Meta informations :
	 * 	- default : -1
	 * @var int
	 */
	public $isSpam;
	/**
	 * The hasAttachment
	 * Meta informations :
	 * 	- default : -1
	 * @var int
	 */
	public $hasAttachment;
	/**
	 * The inAddressBook
	 * Meta informations :
	 * 	- default : -1
	 * @var int
	 */
	public $inAddressBook;
	/**
	 * Constructor
	 * @param int isReplied
	 * @param int isFlagged
	 * @param int isRead
	 * @param int isDraft
	 * @param int isForwarded
	 * @param int isHam
	 * @param int isSpam
	 * @param int hasAttachment
	 * @param int inAddressBook
	 * @return YMailTypeFlag
	 */
	public function __construct($_isReplied = -1,$_isFlagged = -1,$_isRead = -1,$_isDraft = -1,$_isForwarded = -1,$_isHam = -1,$_isSpam = -1,$_hasAttachment = -1,$_inAddressBook = -1)
	{
		parent::__construct(array('isReplied'=>$_isReplied,'isFlagged'=>$_isFlagged,'isRead'=>$_isRead,'isDraft'=>$_isDraft,'isForwarded'=>$_isForwarded,'isHam'=>$_isHam,'isSpam'=>$_isSpam,'hasAttachment'=>$_hasAttachment,'inAddressBook'=>$_inAddressBook));
	}
	/**
	 * Set isReplied
	 * @param int isReplied
	 * @return int
	 */
	public function setIsReplied($_isReplied)
	{
		return ($this->isReplied = $_isReplied);
	}
	/**
	 * Get isReplied
	 * @return int
	 */
	public function getIsReplied()
	{
		return $this->isReplied;
	}
	/**
	 * Set isFlagged
	 * @param int isFlagged
	 * @return int
	 */
	public function setIsFlagged($_isFlagged)
	{
		return ($this->isFlagged = $_isFlagged);
	}
	/**
	 * Get isFlagged
	 * @return int
	 */
	public function getIsFlagged()
	{
		return $this->isFlagged;
	}
	/**
	 * Set isRead
	 * @param int isRead
	 * @return int
	 */
	public function setIsRead($_isRead)
	{
		return ($this->isRead = $_isRead);
	}
	/**
	 * Get isRead
	 * @return int
	 */
	public function getIsRead()
	{
		return $this->isRead;
	}
	/**
	 * Set isDraft
	 * @param int isDraft
	 * @return int
	 */
	public function setIsDraft($_isDraft)
	{
		return ($this->isDraft = $_isDraft);
	}
	/**
	 * Get isDraft
	 * @return int
	 */
	public function getIsDraft()
	{
		return $this->isDraft;
	}
	/**
	 * Set isForwarded
	 * @param int isForwarded
	 * @return int
	 */
	public function setIsForwarded($_isForwarded)
	{
		return ($this->isForwarded = $_isForwarded);
	}
	/**
	 * Get isForwarded
	 * @return int
	 */
	public function getIsForwarded()
	{
		return $this->isForwarded;
	}
	/**
	 * Set isHam
	 * @param int isHam
	 * @return int
	 */
	public function setIsHam($_isHam)
	{
		return ($this->isHam = $_isHam);
	}
	/**
	 * Get isHam
	 * @return int
	 */
	public function getIsHam()
	{
		return $this->isHam;
	}
	/**
	 * Set isSpam
	 * @param int isSpam
	 * @return int
	 */
	public function setIsSpam($_isSpam)
	{
		return ($this->isSpam = $_isSpam);
	}
	/**
	 * Get isSpam
	 * @return int
	 */
	public function getIsSpam()
	{
		return $this->isSpam;
	}
	/**
	 * Set hasAttachment
	 * @param int hasAttachment
	 * @return int
	 */
	public function setHasAttachment($_hasAttachment)
	{
		return ($this->hasAttachment = $_hasAttachment);
	}
	/**
	 * Get hasAttachment
	 * @return int
	 */
	public function getHasAttachment()
	{
		return $this->hasAttachment;
	}
	/**
	 * Set inAddressBook
	 * @param int inAddressBook
	 * @return int
	 */
	public function setInAddressBook($_inAddressBook)
	{
		return ($this->inAddressBook = $_inAddressBook);
	}
	/**
	 * Get inAddressBook
	 * @return int
	 */
	public function getInAddressBook()
	{
		return $this->inAddressBook;
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