<?php
/**
 * Copyright (c) 2021.  All rights reserved.
 * @author: Volodymyr Hryvinskyi <mailto:volodymyr@hryvinskyi.com>
 */

declare(strict_types=1);

namespace Hryvinskyi\SeoImageOptimizerApi\Model\Convertor;

class ConvertorListing
{
    /**
     * @var ConvertorInterface[]
     */
    private array $convertors;

    /**
     * @param array $convertors
     */
    public function __construct(array $convertors = [])
    {
        foreach ($convertors as $item) {
            if (isset($item['object']) === false) {
                throw new \InvalidArgumentException('The ConvertorInterface object empty');
            }

            if (!$item['object'] instanceof ConvertorInterface) {
                throw new \InvalidArgumentException('The convertor should be implemented of ' . ConvertorInterface::class);
            }
        }

        usort($convertors, static function ($a, $b) {
            if (isset($a['sortOrder']) === false || isset($b['sortOrder']) === false) {
                return true;
            }

            return $a['sortOrder'] <=> $b['sortOrder'];
        });

        $this->convertors = [];
        foreach ($convertors as $item) {
            $this->convertors[] = $item['object'];
        }
    }

    /**
     * @return ConvertorInterface[]
     */
    public function getConvertors(): array
    {
        return $this->convertors;
    }
}
