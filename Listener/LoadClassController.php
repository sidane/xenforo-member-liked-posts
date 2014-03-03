<?php

class Sidane_MemberLikedPosts_Listener_LoadClassController
{
  public static function loadClassController($class, array &$extend)
  {
    if ($class == 'XenForo_ControllerPublic_Member')
    {
      $extend[] = 'Sidane_MemberLikedPosts_ControllerPublic_Member';
    }
  }
}
