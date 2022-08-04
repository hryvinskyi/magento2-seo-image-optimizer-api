<?php
/**
 * Copyright (c) 2021. All rights reserved.
 * @author: Volodymyr Hryvinskyi <mailto:volodymyr@hryvinskyi.com>
 */

declare(strict_types=1);

namespace Hryvinskyi\SeoImageOptimizerApi\Model;

interface ConfigInterface
{
    /**
     * @return bool
     */
    public function isEnabled(): bool;

    /**
     * @return int
     */
    public function imageQuality(): int;

    /**
     * @return bool
     */
    public function isEnabledWebP(): bool;

    /**
     * @return bool
     */
    public function isEnabledAvif(): bool;

    /**
     * @return bool
     */
    public function isEnabledJpg2(): bool;

    /**
     * @return array
     */
    public function getExcludeImageExpressionList(): array;

    /**
     * @return array
     */
    public function getExcludePictureExpressionList(): array;
}
