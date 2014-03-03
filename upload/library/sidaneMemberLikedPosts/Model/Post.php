<?php

/**
 * Model for post.
 *
 * @package Sidane_MembersLikedPosts
 */
class Sidane_MemberLikedPosts_Model_Post extends XFCP_Sidane_MemberLikedPosts_Model_Post
{

  public function likedPostsForUser($userId, $fetchOptions) {
    $limitOptions = $this->prepareLimitFetchOptions($fetchOptions);

    return $this->_getDb()->fetchAll($this->limitQueryResults('
      SELECT xf_post.post_id, xf_post.message, xf_post.message_state, xf_post.post_date,
             xf_liked_content.like_date,
             xf_thread.thread_id, xf_thread.node_id, xf_thread.discussion_state
      FROM xf_liked_content
      LEFT JOIN xf_post ON (xf_post.post_id = xf_liked_content.content_id)
      LEFT JOIN xf_thread ON (xf_post.thread_id = xf_thread.thread_id)
      WHERE content_user_id = ?
      AND xf_liked_content.content_type = "post"
      GROUP BY content_id
      ORDER BY xf_liked_content.like_date DESC
    ', $limitOptions['limit'], $limitOptions['offset']), $userId);
  }

  public function getTotalLikedPostsForUser($userId) {
    $result = $this->_getDb()->fetchAll('
      SELECT count(*) as totalLikes
      FROM xf_liked_content
      WHERE xf_liked_content.content_type = "post"
      AND xf_liked_content.content_user_id = ?
      GROUP BY content_id
    ', $userId);

    return count($result);
  }

}
