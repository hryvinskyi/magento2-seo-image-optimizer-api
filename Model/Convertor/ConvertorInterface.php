<?php
/**
 * Copyright (c) 2021. All rights reserved.
 * @author: Volodymyr Hryvinskyi <mailto:volodymyr@hryvinskyi.com>
 */

declare(strict_types=1);

namespace Hryvinskyi\SeoImageOptimizerApi\Model\Convertor;

use Hryvinskyi\ResponsiveImages\Module\PictureInterface;

interface ConvertorInterface
{
    /**
     * @param string $sourceImageTag
     * @param string $sourceImageUri
     * @param PictureInterface $picture
     * @param string|null $destinationImageUri
     * @return void
     */
    public function execute(
        string $sourceImageTag,
        string $sourceImageUri,
        PictureInterface $picture,
        ?string $destinationImageUri = null
    ): void;
}
