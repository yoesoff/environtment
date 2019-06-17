<?php

namespace Senheng\Def\Plugin;

use Magento\Theme\Block\Html\Footer;

class UpdateCopyrightWithCurrentYear
{
    /**
     * @param Footer $subject
     * @param string $result
     * @return string $result
     */
    public function afterGetCopyright(Footer $subject, $result)
    {
        return str_replace("current_year", date('Y'), $result);
    }
}