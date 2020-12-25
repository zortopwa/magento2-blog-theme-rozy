<?php
/**
 * Copyright ZT. All rights reserved.
 * See LICENSE.txt for license details (http://opensource.org/licenses/osl-3.0.php).
 *
 */

namespace ZT\BlogThemeRozy\Controller\Adminhtml\Setting\Upload;

use ZT\Blog\Controller\Adminhtml\Upload\Image\Action;

/**
 * Blog logo image upload controller
 */
class Logo extends Action
{
    /**
     * Authorization level of a basic admin session
     *
     * @see _isAllowed()
     */
    const ADMIN_RESOURCE = 'PWA_BlogTheme::rozy_settings';

    /**
     * File key
     *
     * @var string
     */
    protected $_fileKey = 'logo_url';
}
