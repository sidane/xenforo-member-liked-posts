<?php

class Sidane_MemberLikedPosts_Listener_LoadClassController
{
    /**
     * Instruct the system that XenForo_Controller_Member
     * should be extended by Dev_Controller_Member
     *
     * @param string $class
     * @param array $extend
     */
    public static function loadClassController($class, array &$extend)
    {
        if ($class == 'XenForo_ControllerPublic_Member')
        {
            $extend[] = 'Sidane_MemberLikedPosts_ControllerPublic_Member';
        }
    }
}

