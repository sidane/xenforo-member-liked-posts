# Xenforo Member Liked Posts

XenForo add-on to display list of all a member's liked posts in their profile.

![Member liked posts tab](http://f.cl.ly/items/0l1w322M2Q232x1m2F33/liked_posts.png)

## Installation

Install in the usual XenForo way:

* Upload all files in the `upload/` directory to the root of your XenForo installation. 

* Go to your Admin Control Panel -> Add-ons -> Install New Add-on -> Install from uploaded file: Click the Browse button, locate `addon-sidaneMemberLikedPosts.xml` on your computer and press the `Install Add On` button.

A new `View member liked posts` permission controls access to the profile tab, so please update your user group permissions to make the new tab visible to your members.

## Limitations

The number of liked posts is currently fixed to 100, beginning with the oldest liked post. There is currently no support for pagination.

## Future improvements

* Add support for pagination
* Add admin options for defining custom number of liked posts per page
