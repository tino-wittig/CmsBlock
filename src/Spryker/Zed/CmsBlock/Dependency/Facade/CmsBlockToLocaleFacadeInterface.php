<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\CmsBlock\Dependency\Facade;

interface CmsBlockToLocaleFacadeInterface
{

    /**
     * @return array
     */
    public function getAvailableLocales();

}
