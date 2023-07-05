<?php
/**
 * Copyright (c) 2021. All rights reserved.
 * @author: Volodymyr Hryvinskyi <mailto:volodymyr@hryvinskyi.com>
 */

declare(strict_types=1);

namespace Hryvinskyi\SeoImageOptimizerApi\Model\Convertor;

/**
 * Interface ConvertorInterface
 *
 * Represents the interface for optimize image.
 */
interface ConvertorInterface
{
    /**
     * Returns the type of the image.
     *
     * @return string The type of the image.
     */
    public function imageType(): string;

    /**
     * Check if convertor is enabled
     *
     * @return bool
     */
    public function isEnabled(): bool;

    /**
     * Convert image given source URI.
     *
     * @param string $sourceImageUri The URI of the source image.
     *
     * @return string|null The processed image URI, or null if the method execution is unsuccessful.
     */
    public function execute(string $sourceImageUri): ?string;

    /**
     * Converts a image from input path to output path.
     *
     * @param string $inputPath The path of the input image.
     * @param string $outputPath The path of the output image.
     * 
     * @return string If the conversion is successful return output path if not return input path.
     */
    public function convert(string $inputPath, string $outputPath): string;
}
