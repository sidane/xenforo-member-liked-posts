<?php

/**
 * Controller for handling actions on members.
 *
 * @package Sidane_MemberLikedPosts
 */
class Sidane_MemberLikedPosts_ControllerPublic_Member extends XFCP_Sidane_MemberLikedPosts_ControllerPublic_Member
{

  public function actionLikedPosts()
  {
    $visitor = XenForo_Visitor::getInstance();

    if (!XenForo_Permission::hasPermission($visitor['permissions'], 'general', 'viewMemberLikedPosts')) {
      return $this->responseNoPermission();
    }

    $userId = $this->_input->filterSingle('user_id', XenForo_Input::UINT);

    $likeModel = $this->getModelFromCache('XenForo_Model_Like');

    $page = 1;
    $perPage = 100;

    $likes = $likeModel->getLikesForContentUser($userId, array(
      'page' => $page,
      'perPage' => $perPage
    ));
    $likes = $likeModel->addContentDataToLikes($likes);

    $viewParams = array(
      'likes' => $likes
    );

    return $this->responseView('XenForo_ViewPublic_Account_Likes', 'member_liked_posts', $viewParams);
  }

}
