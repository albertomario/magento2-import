<?php
/**
 * Copyright (c) 2016 H&O E-commerce specialisten B.V. (http://www.h-o.nl/)
 * See LICENSE.txt for license details.
 */
namespace Ho\Import\Rewrite\ConfigurableImportExport;

class ModelImportProductTypeConfigurable
    extends \Magento\ConfigurableImportExport\Model\Import\Product\Type\Configurable
{

    /**
     * Collect super data labels.
     * @fixme https://github.com/magento/magento2/issues/5993
     *
     * @param array $data
     * @param integer|string $productSuperAttrId
     * @param integer|string $productId
     * @param array $variationLabels
     * @return $this
     */
    protected function _collectSuperDataLabels($data, $productSuperAttrId, $productId, $variationLabels)
    {
        return $this;
    }
}
