<?php

class Sidane_MemberLikedPosts_ViewPublic_LikedPosts extends XenForo_ViewPublic_Base
{
  public function renderHtml()
  {
    $bbCodeParser = XenForo_BbCode_Parser::create(XenForo_BbCode_Formatter_Base::create('Base', array('view' => $this)));
    foreach($this->_params['posts'] as &$post) {
      $post['messageHtml'] = XenForo_ViewPublic_Helper_Message::getBbCodeWrapper($post, $bbCodeParser);
    }
    
  }
}
