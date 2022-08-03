<?php
/**
 * Copyright (c) 2021. All rights reserved.
 * @author: Volodymyr Hryvinskyi <mailto:volodymyr@hryvinskyi.com>
 */

declare(strict_types=1);

namespace Hryvinskyi\SeoImageOptimizerApi\Model\Convertor;

interface ConvertorInterface
{
    /**
     * Run command
     *
     * @param string $sourceImageUri
     * @return void
     *
     * @throws \Magento\Framework\Exception\FileSystemException
     */
    public function execute(string $sourceImageUri): ?string;
}
