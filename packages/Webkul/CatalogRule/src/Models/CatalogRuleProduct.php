<?php

namespace Webkul\CatalogRule\Models;

use Illuminate\Database\Eloquent\Model;
use Webkul\CatalogRule\Contracts\CatalogRuleProduct as CatalogRuleProductContract;
use Webkul\Core\Models\ChannelProxy;
use Webkul\Customer\Models\CustomerGroupProxy;
use Webkul\Product\Models\ProductProxy;

class CatalogRuleProduct extends Model implements CatalogRuleProductContract
{
    public $timestamps = false;

    protected $fillable = [
        'starts_from',
        'ends_till',
        'discount_amount',
        'action_type',
        'end_other_rules',
        'sort_order',
        'catalog_rule_id',
        'channel_id',
        'customer_group_id',
        'product_id',
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
