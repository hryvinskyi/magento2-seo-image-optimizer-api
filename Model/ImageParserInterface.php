<?php
/**
 * Copyright (c) 2021. All rights reserved.
 * @author: Volodymyr Hryvinskyi <mailto:volodymyr@hryvinskyi.com>
 */

declare(strict_types=1);

namespace Hryvinskyi\SeoImageOptimizerApi\Model;

interface ImageParserInterface
{
    /**
     * @param string $content
     * @return string
     */
    public function execute(string $content): string;

    /**
     * @return string
     */
    public function getExcludeImageAttributes(): string;
}
