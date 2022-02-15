<?php
/**
 * Copyright (c) 2022. All rights reserved.
 * @author: Volodymyr Hryvinskyi <mailto:volodymyr@hryvinskyi.com>
 */

declare(strict_types=1);

namespace Hryvinskyi\SeoImageOptimizerApi\Model\File;

interface IsOriginalFileUpdatedInterface
{
    /**
     * @param string $original
     * @param string $generated
     * @return bool
     */
    public function execute(string $original, string $generated): bool;
}
