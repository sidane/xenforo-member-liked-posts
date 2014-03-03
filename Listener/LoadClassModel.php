<?php

class Sidane_MemberLikedPosts_Listener_LoadClassModel
{
  public static function loadClassModel($class, array &$extend)
  {
    if ($class == 'XenForo_Model_Post')
    {
      $extend[] = 'Sidane_MemberLikedPosts_Model_Post';
    }
  }
}
