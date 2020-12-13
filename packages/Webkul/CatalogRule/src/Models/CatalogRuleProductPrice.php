<?php

namespace Webkul\CatalogRule\Models;

use Illuminate\Database\Eloquent\Model;
use Webkul\CatalogRule\Contracts\CatalogRuleProductPrice as CatalogRuleProductPriceContract;
use Webkul\Core\Models\ChannelProxy;
use Webkul\Customer\Models\CustomerGroupProxy;
use Webkul\Product\Models\ProductProxy;

class CatalogRuleProductPrice extends Model implements CatalogRuleProductPriceContract
{
    public $timestamps = false;

    protected $fillable = [
        'price',
        'rule_date',
        'starts_from',
        'ends_till',
        'catalog_rule_id',
        'channel_id',
        'customer_group_id',
    ];

    public function product(){ // TODO pull request
        return $this->belongsTo(ProductProxy::modelClass());
    }

    public function customer_group(){// TODO pull request
        return $this->belongsTo(CustomerGroupProxy::modelClass());
    }

    public function catalog_rule(){// TODO pull request
        return $this->belongsTo(CatalogRuleProxy::modelClass());
    }

    public function channel(){// TODO pull request
        return $this->belongsTo(ChannelProxy::modelClass());
    }
}