<?php

class Sidane_MemberLikedPosts_Listener_LoadClassModel
{
    /**
     * Instruct the system that XenForo_Model_Member
     * should be extended by Dev_Model_Member
     *
     * @param string $class
     * @param array $extend
     */
    public static function loadClassModel($class, array &$extend)
    {
        if ($class == 'XenForo_Model_Post')
        {
            $extend[] = 'Sidane_MemberLikedPosts_Model_Post';
        }
    }
}
