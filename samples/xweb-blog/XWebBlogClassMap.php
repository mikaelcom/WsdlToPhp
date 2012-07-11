<?php
/**
 * ClassMap 
 * @date 09/07/2012
 */
/**
 * ClassMap
 * @date 09/07/2012
 */
class XWebBlogClassMap
{
	final public static function classMap()
	{
		return array (
  'Entry' => 'XWebBlogTypeEntry',
  'Replies' => 'XWebBlogTypeReplies',
  'Entry_Reply' => 'XWebBlogTypeEntry_Reply',
  'LoadEntryRequest' => 'XWebBlogTypeLoadEntryRequest',
  'LoadEntryResponse' => 'XWebBlogTypeLoadEntryResponse',
  'LoadBlogResponse' => 'XWebBlogTypeLoadBlogResponse',
  'LoadBlogPagedRequest' => 'XWebBlogTypeLoadBlogPagedRequest',
  'LoadBlogPagedResponse' => 'XWebBlogTypeLoadBlogPagedResponse',
  'GetNewEntryIDResponse' => 'XWebBlogTypeGetNewEntryIDResponse',
  'AddEntryRequest' => 'XWebBlogTypeAddEntryRequest',
  'UpdateEntryRequest' => 'XWebBlogTypeUpdateEntryRequest',
  'DeleteEntryRequest' => 'XWebBlogTypeDeleteEntryRequest',
  'LoadBlogByDateRangeRequest' => 'XWebBlogTypeLoadBlogByDateRangeRequest',
  'LoadBlogByDateRangeResponse' => 'XWebBlogTypeLoadBlogByDateRangeResponse',
  'LoadBlogByDateRangePagedRequest' => 'XWebBlogTypeLoadBlogByDateRangePagedRequest',
  'LoadBlogByDateRangePagedResponse' => 'XWebBlogTypeLoadBlogByDateRangePagedResponse',
  'ProcessEntryRequest' => 'XWebBlogTypeProcessEntryRequest',
  'AddReplyRequest' => 'XWebBlogTypeAddReplyRequest',
  'UpdateReplyRequest' => 'XWebBlogTypeUpdateReplyRequest',
  'DeleteReplyRequest' => 'XWebBlogTypeDeleteReplyRequest',
  'ProcessReplyRequest' => 'XWebBlogTypeProcessReplyRequest',
  'GetNewReplyIDResponse' => 'XWebBlogTypeGetNewReplyIDResponse',
  'LoadReplyRequest' => 'XWebBlogTypeLoadReplyRequest',
  'LoadReplyResponse' => 'XWebBlogTypeLoadReplyResponse',
);
	}
}
?>